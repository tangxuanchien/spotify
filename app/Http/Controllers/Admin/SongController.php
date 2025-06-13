<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\CloudinaryUpload;
use App\Models\Genre;
use App\Models\Song;
use Cloudinary\Api\Admin\AdminApi;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    const PATH_VIEW = 'admin.songs.';
    public function index()
    {
        $songs = Song::with(['artist', 'cloudinary_upload', 'cloudinary_source'])->orderByDesc('id')->paginate(10);
        foreach ($songs as $song) {
            $song->status = $this->getSongStatus($song->status);
        }
        return view(self::PATH_VIEW . __FUNCTION__, compact('songs'));
    }

    public function show(string $id)
    {
        $song = Song::with(['artist', 'genre'])->find($id);
        $song->status = $this->getSongStatus($song->status);
        return view(self::PATH_VIEW . __FUNCTION__, compact('song'));
    }


    public function create()
    {
        $songs = Song::all();
        $artists = Artist::all();
        $genres = Genre::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('songs', 'artists', 'genres'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "name" => "required|max:255",
            "artist_id" => "required",
            "release_year" => "required|digits:4",
            "status" => "required|in:active,draft,scheduled",
            "genre_id" => "required",
            "duration" => "required"
        ]);

        if ($request->hasFile('image_url') && $request->hasFile('file_url')) {
            Cloudinary::upload($request->file('image_url')->getRealPath())->getSecurePath();

            $cloudinary_upload = CloudinaryUpload::create([
                'public_id' => Cloudinary::getPublicId(),
                'url' => Cloudinary::getPath()
            ]);

            Cloudinary::uploadFile($request->file('file_url')->getRealPath(), [
                'resource_type' => 'video'
            ])->getSecurePath();

            $cloudinary_source = CloudinaryUpload::create([
                'public_id' => Cloudinary::getPublicId(),
                'url' => Cloudinary::getPath()
            ]);
        }

        Song::create([
            'name' => $request->name,
            'artist_id' => $request->artist_id,
            'cloudinary_upload_id' => $cloudinary_upload->id,
            'cloudinary_source_id' => $cloudinary_source->id,
            'release_year' => $request->release_year,
            'duration' => $request->duration,
            'status' => $request->status,
            'genre_id' => $request->genre_id,
            'description' => $request->description,
            'lyrics' => $request->lyrics,
            'tags' => $request->tags,
        ]);

        return view(self::PATH_VIEW . 'index');
    }

    public function edit(string $id)
    {
        $song = Song::with(['artist', 'genre'])->find($id);
        $genres = Genre::all();
        $artists = Artist::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('song', 'genres', 'artists'));
    }

    public function update(Request $request, string $id)
    {

        $request->validate([
            "name" => "required|max:255",
            "artist_id" => "required",
            "release_year" => "required|digits:4",
            "status" => "required|in:active,draft,scheduled",
            "genre_id" => "required"
        ]);

        $song = Song::with('cloudinary_upload')->find($id);

        $song->update([
            "name" => $request->name,
            "artist_id" => $request->artist_id,
            "genre_id" => $request->genre_id,
            "release_year" => $request->release_year,
            "status" => $request->status,
            "lyrics" => $request->lyrics,
            "description" => $request->description,
            "tags" => $request->tags
        ]);


        if ($request->hasFile('image_url')) {
            Cloudinary::upload($request->file('image_url')->getRealPath())->getSecurePath();

            Cloudinary::destroy($song->cloudinary_upload->public_id);

            CloudinaryUpload::find($song->cloudinary_upload_id)->update([
                'public_id' => Cloudinary::getPublicId(),
                'url' => Cloudinary::getPath()
            ]);
        }

        if ($request->hasFile('file_url')) {
            Cloudinary::uploadFile($request->file('file_url')->getRealPath())->getSecurePath();
            Cloudinary::destroy($song->cloudinary_source->public_id, [
                'resource_type' => 'video'
            ]);

            CloudinaryUpload::find($song->cloudinary_source_id)->update([
                'public_id' => Cloudinary::getPublicId(),
                'url' => Cloudinary::getPath()
            ]);
        }

        if ($request->duration) {
            Song::find($id)->update([
                "duration" => $request->duration
            ]);
        }

        return redirect()->route(self::PATH_VIEW . 'index');
    }

    public function destroy(string $id)
    {
        $song = Song::with(['cloudinary_upload', 'cloudinary_source'])->findOrFail($id);

        if ($song->cloudinary_upload && $song->cloudinary_source) {
            Cloudinary::destroy($song->cloudinary_source->id);
            Cloudinary::destroy($song->cloudinary_upload->id);

            $song->cloudinary_source->delete();
            $song->cloudinary_upload->delete();
        }
        $song->delete();

        return back();
    }

    public function getSongStatus($status)
    {
        $status_type = [
            'active' => [
                'name' => 'Phát hành',
                'color' => 'status-active'
            ],
            'draft' => [
                'name' => 'Bản nháp',
                'color' => 'status-verified'
            ],
            'scheduled' => [
                'name' => 'Chờ phát hành',
                'color' => 'status-pending'
            ],
        ];
        return $status_type[$status] ?? $status_type['draft'];
    }

    public function pauseRelease($id){
        Song::find($id)->update([
            'status' => 'draft'
        ]);

        return back();
    }
}

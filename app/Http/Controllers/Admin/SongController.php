<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    const PATH_VIEW = 'admin.songs.';
    public function index()
    {
        $songs = Song::with('artist')->orderByDesc('id')->paginate(10);
        foreach ($songs as $song) {
            $song->image_url = asset(Storage::url('images/songs/'.$song->image_url));
        }
        return view(self::PATH_VIEW.__FUNCTION__, compact('songs'));
    }

    public function show(string $id)
    {
        $song = Song::with(['artist', 'genre'])->find($id);
        $song->image_url = asset(Storage::url('images/musics/' . $song->image_url));
        return view(self::PATH_VIEW.__FUNCTION__, compact('song'));
    }


    public function create()
    {
        return view(self::PATH_VIEW.__FUNCTION__);
    }

    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'source' => 'required',
        //     'image_url' => 'required|image'
        // ]);
        Storage::disk('public')->put('public/images/musics', $request->file('image_url'));
        return back();
    }

    public function edit(string $id)
    {
        $song = Song::with(['artist', 'genre'])->find($id);
        $genres = Genre::all();
        $artists = Artist::all();
        return view(self::PATH_VIEW.__FUNCTION__, compact('song', 'genres', 'artists'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "artist_id" => "required",
            "release_year" => "required",
            "duration" => "required"
        ]);

        Song::find( $id)->update($request->all());
        return redirect()->route('admin.songs.index');
    }

    public function destroy(string $id){
        dd($id);
    }
}

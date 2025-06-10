<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\CloudinaryUpload;
use App\Models\Song;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
    const PATH_VIEW = 'admin.artists.';
    public function index()
    {
        $artists = Artist::with('cloudinary_upload')->paginate(10);
        // dd($artists);
        return view(self::PATH_VIEW . __FUNCTION__, compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:artists,name|string:255',
            'slug' => 'required|unique:artists,slug|string:255',
            'description' => 'required',
            'image_url' => 'required'
        ]);

        Cloudinary::upload($request->file('image_url')->getRealPath())->getSecurePath();

        CloudinaryUpload::create([
            'public_id' => Cloudinary::getPublicId(),
            'url' => Cloudinary::getPath()
        ]);

        Artist::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'cloudinary_upload_id' => CloudinaryUpload::max('id'),
            'description' => $request->description
        ]);

        return redirect()->route('admin.artists.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artist = Artist::with('cloudinary_upload')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artist = Artist::with('cloudinary_upload')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('artist', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:artists,slug,'.$id,
            'description' => 'required'
        ]);

        $artist = Artist::with('cloudinary_upload')->findOrFail($id);
        $artist->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description
        ]);

        if($request->image_url){
            Cloudinary::upload($request->file('image_url')->getRealPath())->getSecurePath();
            Cloudinary::destroy($artist->cloudinary_upload->public_id);
            CloudinaryUpload::findOrFail($artist->cloudinary_upload_id)->update([
                'public_id' => Cloudinary::getPublicId(),
                'url' => Cloudinary::getPath()
            ]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artist = Artist::with('cloudinary_upload')->find($id);
        Cloudinary::destroy($artist->cloudinary_upload->public_id);
        CloudinaryUpload::destroy($artist->cloudinary_upload_id);
        Artist::destroy($id);
        return back();
    }
}

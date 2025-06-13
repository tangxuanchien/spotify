<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Genre;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('artist')->orderByDesc('id')->paginate(10);
        return view('admin.songs.index', compact('songs'));
    }

    public function show(string $id)
    {
        $song = Song::with(['artist', 'genre'])->find($id);
        return view('admin.songs.show', compact('song'));
    }


    public function create()
    {
        return view('admin.songs.create');
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
        return view('admin.songs.edit', compact('song', 'genres', 'artists'));
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
}

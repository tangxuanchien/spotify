<?php

namespace App\Http\Controllers;

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
        $song->image_url = asset(Storage::url('images/musics/'.$song->image_url));
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
}

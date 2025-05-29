<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Request;

class SongController extends Controller
{
    public function show()
    {
        $songs = Song::with('artist')->orderByDesc('id')->paginate(10);
        return view('admin.songs.index', compact('songs'));
    }


    public function create()
    {
        return view('admin.songs.create');
    }

    public function store(Request $request)
    {
        dd($request);
        return view('admin.songs.store');
    }
}

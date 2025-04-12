<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(){
        $this->playerbarData();
    }

    public function playerbarData(){
        $id = 1;
        $song_playerbar = Song::find($id);
        $artist_playerbar = $song_playerbar->artist;
        view()->share([
            'artist_playerbar' => $artist_playerbar,
            'song_playerbar' => $song_playerbar
        ]);
    }
}

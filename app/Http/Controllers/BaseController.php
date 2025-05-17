<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BaseController extends Controller
{
    public function __construct()
    {
        if (!Session::has('artist_playerbar')) {
            $song_playerbar = Song::find(1);
            $artist_playerbar = $song_playerbar->artist;
            Session::put('song_playerbar', $song_playerbar);
            Session::put('artist_playerbar', $artist_playerbar);
        }
        view()->share([
            'artist_playerbar' => Session::get('artist_playerbar'),
            'song_playerbar' => Session::get('song_playerbar')
        ]);
    }

    public function skipSong(Request $request)
    {
        if($request['skip'] == 'next'){
            $song_playerbar = Song::where('id', '>', $request['id'])->first();
        } else if($request['skip'] == 'previous'){
            $song_playerbar = Song::where('id', '<', $request['id'])->first();
        }
        $artist_playerbar = $song_playerbar->artist;
        Session::put('song_playerbar', $song_playerbar);
        Session::put('artist_playerbar', $artist_playerbar);
        return Redirect::back();
    }
}

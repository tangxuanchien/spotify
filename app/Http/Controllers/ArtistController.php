<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    function showArtist(){
        return view("artist.index");
    }
}

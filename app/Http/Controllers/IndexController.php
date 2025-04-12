<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index(){
        $artists = Artist::all();
        return view(__FUNCTION__, compact('artists'));
    }
}

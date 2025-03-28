<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $artists = Artist::all();
        return view(__FUNCTION__, compact('artists'));
    }
}

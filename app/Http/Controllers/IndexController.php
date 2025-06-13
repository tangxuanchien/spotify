<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends BaseController
{
    public function index()
    {
        $artists = Artist::with('cloudinary_upload')->limit(6)->get();
        return view(__FUNCTION__, compact('artists'));
    }

}

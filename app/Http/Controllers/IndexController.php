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
        $artists = Artist::all();
        $image = Storage::url('public/images/musics/tag.jpg');
        foreach ($artists as $artist) {
            $artist->image_url = Storage::url('images/artists/' . $artist['image_url']);
        }
        return view(__FUNCTION__, compact('artists', 'image'));
    }

}

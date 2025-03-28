<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    const PATH_VIEW = 'artist.';
    public function index()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function formatNumber($number)
    {
        if ($number >= 1000000) {
            return number_format($number / 1000000, 1, '.').'M';
        } elseif ($number >= 1000) {
            return number_format($number / 1000, 0).'K';
        }
        return $number;
    }

    public function show(Request $request, $name)
    {
        $artist = Artist::where('slug', $name)->firstOrFail();
        $artists_related = Artist::all()->reject($artist);
        $monthly_listeners = $this->formatNumber($artist['monthly_listeners']);
        $followers = $this->formatNumber($artist['followers']);
        return view(self::PATH_VIEW.__FUNCTION__ , compact('artist', 'artists_related', 'monthly_listeners', 'followers'));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'followers',
        'monthly_listeners',
        'image_url',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

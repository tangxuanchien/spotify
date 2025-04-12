<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [

    ];
    public function songs(){
        return $this->hasMany(Song::class);
    }
}

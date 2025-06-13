<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $guarded = [];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function cloudinary_upload(){
        return $this->belongsTo(CloudinaryUpload::class);
    }

    public function cloudinary_source(){
        return $this->belongsTo(CloudinaryUpload::class, 'cloudinary_source_id');
    }
}

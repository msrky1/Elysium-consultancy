<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GaleryCategory;
use App\Models\Galery;

class Image extends Model
{
    use HasFactory;

    public function getGalery(){

        return $this->belongsTo(GaleryCategory::class, 'category_id');
    }

    public function getImage(){

        return $this->hasMany(Galery::class, 'image_id');
    }
}

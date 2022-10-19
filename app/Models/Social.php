<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SocialCategory;

class Social extends Model
{
    use HasFactory;

    protected $table = "socsials";
    
    public function getCategory(){

        return $this->belongsTo(SocialCategory::class, 'category_id');
    }
}

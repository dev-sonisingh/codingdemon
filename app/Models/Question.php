<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_id','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // public function images()
    // {
    //     return $this->hasMany(Image::class);
    // }
}

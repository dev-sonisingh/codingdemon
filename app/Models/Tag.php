<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['tag_titile','tag_slug'];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}

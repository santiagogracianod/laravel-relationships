<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{

    protected $guarded = [];


    public function image(): MorphMany
    {
        return $this->morphMany(Image::class,'imageable');
    }
}

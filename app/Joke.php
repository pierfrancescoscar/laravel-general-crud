<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{
    protected $fillable = [
        'title',
        'description',
        'thumb',
    ];
}

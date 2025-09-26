<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body']; //these columns should be allowed mass assignment
    //post::all exist even tho you don't see it, exist in models class with build in methods
}

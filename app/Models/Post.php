<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id', 'title', 'content', 'image', 'slug'
    ];

    public function Category(){

        // realizzo la relazione con il model di Category
        return $this->belongsTo('App\Models\Category');

    }
}
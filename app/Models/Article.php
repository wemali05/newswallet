<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 
        'title', 
        'image_path',
        'author_name',
        'website_name',
        'link',
        'description'
    ];
}

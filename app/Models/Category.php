<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 
        'description',
    ];

    /**
     * Relation to articles
     * A category has many articles
     * 
     */
    public function articles(){
        return $this->hasMany('App\Models\Article');
    }
}

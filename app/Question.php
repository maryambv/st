<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = [
        'tagName', 'tagStatus'
    ];
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['category_id', 'text'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }

    public function correctAnswer()
    {
        return $this->choices()->where('is_correct', 1)->first();
    }
}

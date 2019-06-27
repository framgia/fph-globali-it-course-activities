<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $guarded = [];

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}

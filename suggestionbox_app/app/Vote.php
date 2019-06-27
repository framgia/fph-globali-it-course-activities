<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function suggestion()
    {
        return $this->belongsTo('App\Suggestion');
    }
}

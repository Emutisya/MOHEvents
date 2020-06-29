<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{

    public function make()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function applications(){
        return $this->hasMany('App\Application');
    }
}
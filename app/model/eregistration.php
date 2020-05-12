<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class eregistration extends Model
{
    protected $table ='eregistrations';
    protected $fillable= ['description','location','time','date','organization'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model 
{
    public $timestamps = false;
    protected $fillable = ['code_massar','date_naissance','creation_password','time_insert'];
}


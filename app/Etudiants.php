<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model 
{
    public $timestamps = false;
    protected $fillable = ['code_massar','date_naissance','creation_password'];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model 
{
    public $timestamps = false;
    protected $fillable = ['nom_etudiant','prenom_etudiant','lieu_naissance','adresse_email','numero_telephone','annee_bac','section_bac','ville_etudiant','etablissement','adresse_etudiant'];
}
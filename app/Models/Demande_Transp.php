<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande_Transp extends Model
{
    use HasFactory;
       protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'tel',
        'dateN',
        'email',
        'conditionTransp',
        'adresseDep',
        'adresseArriv',
        'estUrgent',
        'estTraiter',
        'etbSante',
    ];

      public function PersonneMalade(){
        //inverse de la relation hasMany
        return $this->belongsToMany(Personne_malade::class);
    }

    public function hopital(){
        //inverse de la relation hasOne
        return $this->belongsTo(Hopital::class);
    }

    public function partenaire(){
        return $this->belongsToMany(Partenaire::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}

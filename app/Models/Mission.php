<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;
     protected $fillable = [
        'nom',
        'prenom',
        'email',
        'estUrgent',
        'estFacture',
        'date_Dep',
        'adresse_Dep',
        'adresse_Arriv',
        'condTransp',
        'idChauffeur',
        'ChaufSecond',
        'heureDebut',
        'heureFin',
    ];

    public function chauffeur(){
        return $this->belongsTo(Chauffeur::class);
    }
    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }
    public function facture(){
        return $this->belongsTo(Facture::class);
    }
    public function mission(){
        return $this->hasOne(Mission::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;
     protected $fillable = [
        'immatriculation',
        'marque',
        'Desc',
        'permis',
        'estLibre',
    ];

       public function mission(){
        return $this->belongsToMany(Mission::class);
    }
    public function facture(){
        return $this->hasMany(Facture::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
      protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'email',
        'adresse',
        'permis',
        'estDisponible',
    ];
  public function mission(){
        return $this->hasMany(Transport::class);
    }
}

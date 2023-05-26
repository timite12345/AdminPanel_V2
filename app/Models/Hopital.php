<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    use HasFactory;
       protected $fillable = [
         'refEtb',
        'nom',
        'adresse',
        'email',
        'tel',
        'estValide',
        'type',
    ];
  public function demandetransport(){
        return $this->hasMany(Demande_Transp::class);
    }

    public function facture(){
        return $this->hasMany(Facture::class);
    }



}

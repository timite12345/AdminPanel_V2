<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonneMalade extends Model
{
    use HasFactory;
     protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'contact',
        'email',
        'maladie',
    ];

      public function mission(){
        return $this->belongsToMany(Mission::class);
    }
}

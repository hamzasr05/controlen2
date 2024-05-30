<?php

namespace App;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{

    protected $fillable = [
        'titre', 'adresse', 'prix_unitaire', 'type_chambre',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internaute extends Model
{

    protected $fillable = [
        'nom', 'prenom', 'adresse', 'date_naissance', 'cin',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

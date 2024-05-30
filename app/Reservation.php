<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [
        'internaute_id', 'hotel_id', 'date_debut_sejour', 'date_fin_sejour', 'titre',
    ];

    public function internaute()
    {
        return $this->belongsTo(Internaute::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}

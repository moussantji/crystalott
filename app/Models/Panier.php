<?php

namespace App\Models;

use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'abonnement_id',
        'quantite'
    ];

    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class);
    }
}

<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $fillable = [
        'code',
        'discount',
        'type',
        'expires_at',
    ];
    // Relation avec Order
    public function Commande()
    {
        return $this->hasMany(Commande::class);
    }
}

<?php

namespace App\Models;

use App\Models\Panier;
use App\Models\Coupons;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'nom',
        'email',
        'country',
        'payment_method',
        'tel',
        'total',
        'payment_status',
        'order_status',
    ];

    public function paniers()
    {
        return $this->hasMany(Panier::class, 'session_id', 'session_id');
    }

    // Relation avec Coupon
    public function coupon()
    {
        return $this->belongsTo(Coupons::class);
    }

    // Calcul du total de la commande après application du coupon
    public function getTotalAfterDiscount()
    {
        $total = $this->total; // Assurez-vous que le total est calculé avant l'application du coupon

        if ($this->coupon) {
            if ($this->coupon->type === 'percentage') {
                $total -= $total * ($this->coupon->discount / 100); // Réduction en pourcentage
            } else {
                $total -= $this->coupon->discount; // Réduction en montant fixe
            }
        }

        return max($total, 0); // Le total ne peut pas être négatif
    }
    
}

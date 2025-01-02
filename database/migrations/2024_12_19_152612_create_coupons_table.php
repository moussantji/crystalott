<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Code du coupon (ex: "DISCOUNT20")
            $table->decimal('discount', 8, 2); // Montant de la réduction (ex: 20.00)
            $table->enum('type', ['percentage', 'fixed']); // Type de réduction (pourcentage ou montant fixe)
            $table->date('expires_at')->nullable(); // Date d'expiration du coupon
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};

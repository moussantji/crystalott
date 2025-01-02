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
        Schema::table('commandes', function (Blueprint $table) {
            $table->string('payment_status')->default('Unpaid'); // Statut du paiement (Unpaid, paid)
            $table->string('order_status')->default('pending');   // Statut de la commande (Draft, Packaging, Canceled, completed)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->dropColumn(['payment_status', 'order_status']);
        });
    }
};

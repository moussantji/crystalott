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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('session_id'); // Session utilisateur
            $table->string('nom');        // Nom utilisateur
            $table->string('email');      // Email utilisateur
            $table->string('country');      // Pays utilisateur
            $table->string('payment_method');      // Methode payment utilisateur
            $table->text('tel');      // Num utilisateur
            $table->float('total', 8, 2); // Total de la commande
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};

<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogUserLocation
{
    /**
     * Handle the event.
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        // Obtenir l'IP de l'utilisateur
        $ip = request()->ip();

        if ($ip === '127.0.0.1' || $ip === '::1') {
            // Adresse IP locale, utilisez une IP par défaut pour tester
            $ip = '8.8.8.8';
        }

        // Récupérer les informations de localisation avec ip-api
        $response = Http::get("http://ip-api.com/json/{$ip}");

        if ($response->successful()) {
            $data = $response->json();

            // Mettre à jour les informations de localisation de l'utilisateur
            $user->update([
                'latitude' => $data['lat'] ?? null,
                'longitude' => $data['lon'] ?? null,
                'country' => $data['country'] ?? null,
                'region' => $data['regionName'] ?? null,
                'city' => $data['city'] ?? null,
                'zip' => $data['zip'] ?? null,
            ]);
        }
    }
}

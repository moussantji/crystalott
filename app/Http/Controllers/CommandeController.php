<?php

namespace App\Http\Controllers;

use PayPal\Api\Payer;
use App\Models\Panier;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use App\Models\Commande;
use PayPal\Api\Transaction;
use App\Events\OrderCreated;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use App\Mail\OrderConfirmationMail;
use App\Mail\OrderPaymentLinkEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class CommandeController extends Controller
{

    public function index()
    {
        $session_id = session()->getId();
        $paniers = Panier::where('session_id', $session_id)->get();

        return view('commandes', [
            'paniers' => $paniers
        ]);
    }
    public function commander(Request $request)
    {
        $session_id = Session::getId();

        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'country' => 'required',
            'payment_method' => 'required',
        ]);

        $paniers = Panier::where('session_id', $session_id)->get();

        if ($paniers->isEmpty()) {
            return response()->json(['error' => 'Votre panier est vide']);
        }

        $total = $paniers->sum(function ($panier) {
            return $panier->abonnement->prix * $panier->quantite;
        });

        $order = Commande::create([
            'session_id' => $session_id,
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'country' => $request->input('country'),
            'payment_method' => $request->payment_method,
            'total' => $total,
            'payment_status' => 'Unpaid',  // Par défaut
            'order_status' => 'pending',    // Par défaut
        ]);

        // Envoi de l'email de confirmation
        Mail::to($order->email)->queue(new OrderConfirmationMail($order));

        session()->regenerate();

        return to_route('welcome')->with('email_sent', true);
    }
}

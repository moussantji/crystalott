<?php

namespace App\Mail;

use App\Models\Commande;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order; // La commande à envoyer dans l'email

    public function __construct(Commande $order)
    {
        $this->order = $order;
    }

    public function build()
    {
        return $this->subject('Order Confirmation - IPTV Service')
                    ->view('emails.orderConfirmation')
                    ->with([
                        'orderId'=> $this->order->id,
                        'name' => $this->order->nom,
                        'paymentMethod' => $this->order->payment_method,
                        'total' => $this->order->total, // Assure-toi que l'attribut existe
                    ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PanierController extends Controller
{

    public function ajouter(Request $request)
    {
        $session_id = Session::getId();
        $abonnement_id = $request->input('abonnement_id');
        $quantite = $request->input('quantite', 1);

        $panier = Panier::where('session_id', $session_id)
            ->where('abonnement_id', $abonnement_id)
            ->first();

        if ($panier) {
            $panier->increment('quantite', $quantite);
        } else {
            Panier::create([
                'session_id' => $session_id,
                'abonnement_id' => $abonnement_id,
                'quantite' => $quantite,
            ]);
        }

        return to_route('panier');
    }

    public function afficher()
    {
        $session_id = Session::getId();
        $paniers = Panier::where('session_id', $session_id)->with('abonnement')->get();

        return view('panier', compact('paniers'));
    }

    public function supprimer($id)
    {
        $session_id = Session::getId();
        Panier::where('session_id', $session_id)->where('id', $id)->delete();

        $paniers = Panier::where('session_id', $session_id)->with('abonnement')->get();

        return to_route('panier', compact('paniers'));
    }

    public function update(Request $request)
    {
        // Sinon, on met à jour les quantités des paniers
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'panier') === 0) { // Si le nom du champ contient 'panier'
                $panierId = str_replace('panier', '', $key);
                $panier = Panier::find($panierId);
                if ($panier) {
                    $panier->quantite = $value;
                    $panier->save();
                }
            }
        }

        return redirect()->back()->with('success', 'Quantités mises à jour');
    }
}

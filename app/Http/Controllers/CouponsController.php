<?php

namespace App\Http\Controllers;

use App\Models\Coupons;
use App\Models\Analytics;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
        // Afficher la liste des coupons
        public function index()
        {
        Analytics::trackPageView('coupons.index'); // Nom de la page

            $coupons = Coupons::paginate(10);
            return view('coupons.index', compact('coupons'));
        }

        // Afficher le formulaire pour créer un coupon
        public function create()
        {
        Analytics::trackPageView('coupons.index'); // Nom de la page

            return view('coupons.create');
        }

        // Enregistrer un nouveau coupon
        public function store(Request $request)
        {
            $request->validate([
                'code' => 'required|unique:coupons',
                'type' => 'required|in:percentage,fixed',
                'discount' => 'required|numeric|min:0',
                'expires_at' => 'nullable|date',
            ]);

            Coupons::create($request->all());

            return redirect()->route('coupons.index')->with('success', 'Coupon créé avec succès!');
        }

        // Afficher le formulaire pour modifier un coupon
        public function edit(Coupons $coupon)
        {
        Analytics::trackPageView('coupons.index'); // Nom de la page

            return view('coupons.edit', compact('coupon'));
        }

        // Mettre à jour un coupon
        public function update(Request $request, Coupons $coupon)
        {
            $request->validate([
                'code' => 'required|unique:coupons,code,' . $coupon->id,
                'type' => 'required|in:percentage,fixed',
                'discount' => 'required|numeric|min:0',
                'expires_at' => 'nullable|date',
            ]);

            $coupon->update($request->all());

            return redirect()->route('coupons.index')->with('success', 'Coupon mis à jour avec succès!');
        }

        // Supprimer un coupon
        public function destroy(Coupons $coupon)
        {
            $coupon->delete();

            return redirect()->route('coupons.index')->with('success', 'Coupon supprimé avec succès!');
        }
}

<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Post;
use App\Models\User;
use App\Models\Photo;
use App\Models\Movies;
use App\Models\Commande;
use App\Models\Analytics;
use App\Models\MoviesImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MovieRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentConfirmationMail;

class AdminComtroller extends Controller
{
    public function index()
    {
        Analytics::trackPageView('admin.dashboard'); // Nom de la page
        $totalAmount = Commande::sum('total'); // ou 'amount' selon le nom de la colonne qui contient le montant de la commande
        // Calculer le nombre total de posts
        $totalPosts = Post::count();
        $analytics = Analytics::paginate(6);

        $totalPaidOrders = Commande::where('Payment_status', 'Paid')->count(); // 'total' est le nom de la colonne pour le montant total de la commande
        $commandes = Commande::all();
        $totalOrders = Commande::count(); // 'total' est le nom de la colonne contenant les montants des commandes
        $paidOrders = Commande::where('Payment_status', 'Paid')->count(); // Nombre de commandes payées
        // Éviter la division par zéro
        $percentagePaid = $totalOrders > 0 ? ($paidOrders / $totalOrders) * 100 : 0;
        $percentagePaid = number_format($percentagePaid,2);
        $user = Auth::user();
        $countr = $user->country;
        $country = $countr;
        $lat = $user->latitude;
        $long = $user->longitude;

        $monthlyViewsRaw = DB::table('analytics')
        ->select(DB::raw('MONTH(created_at) as month'), DB::raw('SUM(page_views) as total_page_views'))
        ->groupBy(DB::raw('MONTH(created_at)'))
        ->get();

        $monthlyViews = array_fill(1, 12, 0); // Tableau avec 12 mois initialisé à 0

        foreach ($monthlyViewsRaw as $view) {
            $monthlyViews[$view->month] = $view->total_page_views;
        }

        $pageviews = [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67];
        $pageclicks = [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35];

        return view('admin.dashboard', [
            'analytics' => $analytics,
            'totalamount' => $totalAmount,
            'totalpost' => $totalPosts,
            'totalpaidorders' => $totalPaidOrders,
            'totalorders' => $totalOrders,
            'pageviews' => $pageviews,
            'pageclicks' => $pageclicks,
            'percentagepaid' => $percentagePaid,
            'country' => $country,
            'lat' => $lat,
            'long' => $long,
            'commandes' => $commandes,
            'monthlyviews' => array_values($monthlyViews),
        ]);
    }
    public function commandes()
    {
        Analytics::trackPageView('admin.commande'); // Nom de la page
        $totalPaidOrders = Commande::where('Payment_status', 'Paid')->count(); // 'total' est le nom de la colonne pour le montant total de la commande
        $totalUnpaidOrders = Commande::where('Payment_status', 'Unpaid')->count(); // 'total' est le nom de la colonne pour le montant total de la commande
        $commandes = Commande::with('paniers.abonnement')->paginate(10);
        return view('admin.commandes', [
            'commandes' => $commandes,
            'totalpaidorders' => $totalPaidOrders,
            'totalunpaidorders' => $totalUnpaidOrders,

        ]);
    }
    public function commande_detail(Commande $commande)
    {
        Analytics::trackPageView('admin.commande'); // Nom de la page

        return view('admin.detail', [
            'commande' => $commande
        ]);
    }
    public function updateStatus(Request $request, $id)
    {
        $commande = Commande::findOrFail($id);

        $request->validate([
            'payment_status' => 'required|in:pending,paid,failed',
            'order_status' => 'required|in:pending,processing,shipped,completed',
        ]);

        $commande->update([
            'payment_status' => $request->input('payment_status'),
            'order_status' => $request->input('order_status'),
        ]);

        return redirect()->back()->with('success', 'Statuts mis à jour avec succès.');
    }
    public function faq()
    {
        return view('admin.faq');
    }
    public function video()
    {
        Analytics::trackPageView('admin.video'); // Nom de la page
        $movies = Movies::paginate(10);
        return view('admin.video', [
            'movies' => $movies,
        ]);
    }

    public function create()
    {
        Analytics::trackPageView('admin.video'); // Nom de la page
        $user = Auth::user();
        return view('admin.create', [
            'user' => $user,
        ]);
    }

    public function store(MovieRequest $request)
    {
        $movie = Movies::create($request->validated());
        $movie->attachfiles($request->validated('pictures'));
        return to_route('admin.video')->with('success', 'the video is added');
    }

    public function edit(Movies $movie)
    {
        Analytics::trackPageView('admin.video'); // Nom de la page
        $user = Auth::user();
        return view('admin.edit', [
            'user' => $user,
            'movie' => $movie,
        ]);
    }

    public function update(MovieRequest $request, Movies $movie)
    {
        $movie->update($request->validated());
        $movie->attachfiles($request->validated('pictures'));
        return to_route('admin.video')->with('success', 'the video is modified');
    }

    public function delete(Movies $movie)
    {
        MoviesImage::destroy($movie->MovieImage()->pluck('id'));
        $movie->delete();
        return to_route('admin.video')->with('success', 'the video is deleted');
    }

    public function destroy(MoviesImage $movieimage)
    {
        $movieimage->delete();
        return to_route('admin.video')->with('success', 'the image is deleted');
    }

    public function photo(Photo $photo)
    {
        $photo->delete();
        return to_route('profile.edit')->with('success', 'the image is deleted');
    }

    public function helpcenter()
    {
        Analytics::trackPageView('admin.helpcenter'); // Nom de la page

        return view('admin.help-center');
    }

    public function privacypolicy()
    {
        Analytics::trackPageView('admin.privacypolicy'); // Nom de la page

        return view('admin.privacy-policy');
    }

    public function commandes_update(Request $request, Commande $commande)
    {

        $username = [];
        $password = [];
        foreach($commande->paniers as $panier)
        {
            for ($i = 1; $i <= $panier->quantite; $i++) {
                $request->validate([
                    'username' . $panier->id . '_' . $i => 'required|string|max:255',
                    'password' . $panier->id . '_' . $i => 'required|string|max:255',
                ]);

                $username[$panier->id][$i] = $request->input('username' . $panier->id . '_' . $i);
                $password[$panier->id][$i] = $request->input('password' . $panier->id . '_' . $i);
            }
        }
        $commande->update([
            'payment_status' => 'Paid',
            'order_status' => 'Completed'
        ]);
        Mail::to($commande->email)->send(new PaymentConfirmationMail($username, $password, $commande));

        return redirect()->route('admin.commande')->with('message', 'Order Updated successfully, and email sent.');
    }

    public function purchased()
    {
        Analytics::trackPageView('admin.purchased'); // Nom de la page

        $totalPaidOrders = Commande::where('Payment_status', 'Paid')->paginate(5); // 'total' est le nom de la colonne pour le montant total de la commande
        return view('admin.purchased',[
            'commandes' => $totalPaidOrders,
        ]);
    }

    public function invoices()
    {
        Analytics::trackPageView('admin.invoices'); //nom de la page
        $totalUnpaidOrders = Commande::where('Payment_status', 'Unpaid')->paginate(5); // 'total' est le nom de la colonne pour le montant total de la commande
        return view('admin.invoices',[
            'commandes' => $totalUnpaidOrders,
        ]);
    }
}

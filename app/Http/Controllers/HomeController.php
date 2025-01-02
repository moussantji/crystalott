<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Movies;
use App\Models\Panier;
use App\Models\Analytics;
use App\Models\Abonnement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function welcome()
    {
        Analytics::trackPageView('welcome'); // Nom de la page

        $session_id = Session::getId();
        $posts = Post::with('category')->orderBy('created_at','desc')->take(3)->get();
        $movies = Movies::all();
        $paniers = Panier::where('session_id', $session_id)->with('abonnement')->get();
        $abonnements = Abonnement::all();
        return view('welcome',[
            'movies' => $movies,
            'posts' => $posts,
            'abonnements' => $abonnements,
            'paniers' => $paniers,
        ]);
    }

    public function blog(string $slug, Post $id)
    {
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::all();
        return view('blog-detail',[
            'post' => $id,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

}

<?php

use App\Models\Analytics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminPanel\AdminComtroller;
use App\Http\Controllers\CustomerPanel\CustomerComtroller;

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';


Route::get('/', [HomeController::class,'welcome'])->name('welcome');
Route::post('/panier/ajouter', [PanierController::class, 'ajouter'])->name('panier.ajouter');
Route::get('/panier', [PanierController::class, 'afficher'])->name('panier');
Route::delete('/panier/{id}', [PanierController::class, 'supprimer'])->name('panier.delete');
Route::post('/commander', [CommandeController::class, 'commander'])->name('commander');
Route::get('/checkout', [CommandeController::class, 'index'])->name('commandes.index');
Route::post('/panier/update', [PanierController::class, 'update'])->name('panier.update');
Route::get('/blog/{slug}-{id}', [HomeController::class,'blog'])->name('blog')->where([
    'slug' => $slugRegex,
    'id' => $idRegex,
]);
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store')->where([
    'post' => $idRegex,
]);
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');



Route::get('/dashboard', [CustomerComtroller::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/picture', [ProfileController::class, 'picture'])->name('profile.picture');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


Route::middleware(['auth','role:admin'])->group(function () use ($idRegex) {
    Route::get('dashboard',[AdminComtroller::class, 'index'])->name('admin.dashboard');
    Route::get('movies',[AdminComtroller::class, 'video'])->name('admin.video');
    Route::get('movies/create',[AdminComtroller::class, 'create'])->name('admin.video.create');
    Route::post('movies/create',[AdminComtroller::class, 'store'])->name('admin.video.store');
    Route::get('movies/{movie}/edit',[AdminComtroller::class, 'edit'])->name('admin.video.edit')->where([
        'movie' => $idRegex
    ]);
    Route::post('movies/{movie}/update',[AdminComtroller::class, 'update'])->name('admin.video.update')->where([
        'movie' => $idRegex
    ]);
    Route::delete('movies/{movie}',[AdminComtroller::class, 'delete'])->name('admin.video.delete')->where([
        'movie' => $idRegex
    ]);
    Route::delete('picture/{movieimage}', [AdminComtroller::class, 'destroy'])->name('admin.picture.destroy')->where([
        'movieimage' => $idRegex
    ]);
    Route::delete('photo/{photo}', [AdminComtroller::class, 'photo'])->name('admin.photo.destroy')->where([
        'photo' => $idRegex
    ]);
    Route::get('/admin/faq',[AdminComtroller::class, 'faq'])->name('admin.faq');
    Route::get('/admin/help-center',[AdminComtroller::class, 'helpcenter'])->name('admin.helpcenter');
    Route::get('/admin/privacy-policy',[AdminComtroller::class, 'privacypolicy'])->name('admin.privacypolicy');
    Route::get('/admin/commandes', [AdminComtroller::class, 'commandes'])->name('admin.commande');
    Route::get('/admin/purchased', [AdminComtroller::class, 'purchased'])->name('admin.purchased');
    Route::get('/admin/invoices', [AdminComtroller::class, 'invoices'])->name('admin.invoices');
    Route::post('/admin/commandes/{commande}', [AdminComtroller::class, 'commandes_update'])->name('admin.commande.update')->where([
        'commande' => $idRegex
    ]);
    Route::get('/admin/commandes/{commande}', [AdminComtroller::class, 'commande_detail'])->name('admin.commande.show')->where([
        'commande' => $idRegex
    ]);
    Route::delete('blogimage/{blogimage}', [PostController::class, 'blogimage_destroy'])->name('admin.blog.destroy')->where([
        'blogimage' => $idRegex
    ]);
    Route::resource('/admin/posts', PostController::class)->except('show');
    Route::resource('/admin/coupons', CouponsController::class)->except('show');
    Route::resource('/admin/categories', CategoryController::class)->except('show');
    Route::post('/admin/commandes/{id}/update-status', [AdminComtroller::class, 'updateStatus']);
});

Route::get('/images/{path}', [ImageController::class, 'show'])->where('path', '.*');



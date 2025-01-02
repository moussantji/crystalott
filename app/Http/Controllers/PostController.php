<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Analytics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\BlogsImage;

class PostController extends Controller
{
    public function index()
    {
        Analytics::trackPageView('posts.index'); // Nom de la page

        // Liste les articles avec leur catégorie
        $posts = Post::with('category')->latest()->paginate(10);
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        Analytics::trackPageView('posts.index'); // Nom de la page
        // Récupérer toutes les catégories pour le formulaire
        $categories = Category::all();
        return view('posts.create', [
            'categories' => $categories
        ]);
    }

    public function store(BlogRequest $request)
    {

        // Création de l'article
        $post = Post::create($request->validated());
        $post->attachfiles($request->validated('pictures'));

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        Analytics::trackPageView('posts.index'); // Nom de la page
        // Modifier un article
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Mise à jour de l'article
        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        // Suppression de l'article
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
    public function blogimage_destroy(BlogsImage $blogimage)
    {
        $blogimage->delete();
        return to_route('posts.index')->with('success', 'the image is deleted');
    }
}

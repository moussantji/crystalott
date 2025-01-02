<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Analytics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        Analytics::trackPageView('categories.index'); // Nom de la page

        // Liste toutes les catégories
        $categories = Category::latest()->paginate(10);
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        Analytics::trackPageView('categories.index'); // Nom de la page

        // Formulaire pour ajouter une catégorie
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        // Création de la catégorie
        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        Analytics::trackPageView('categories.index'); // Nom de la page

        // Formulaire pour modifier une catégorie
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        // Mise à jour de la catégorie
        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        // Suppression de la catégorie
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        // Data resep dalam bentuk array
        $recipes = [
            ['id' => 1, 'name' => 'Spaghetti Bolognese', 'ingredients' => 'Spaghetti, Tomato, Beef', 'instructions' => 'Cook spaghetti, add sauce'],
            ['id' => 2, 'name' => 'Chicken Curry', 'ingredients' => 'Chicken, Curry powder, Coconut milk', 'instructions' => 'Cook chicken, add curry powder, simmer with coconut milk'],
            ['id' => 3, 'name' => 'Beef Tacos', 'ingredients' => 'Beef, Taco shells, Lettuce', 'instructions' => 'Cook beef, fill taco shells with beef and lettuce'],
            ['id' => 4, 'name' => 'Caesar Salad', 'ingredients' => 'Lettuce, Caesar dressing, Croutons', 'instructions' => 'Mix lettuce with dressing, add croutons'],
            ['id' => 5, 'name' => 'Chocolate Cake', 'ingredients' => 'Flour, Cocoa powder, Sugar', 'instructions' => 'Mix ingredients, bake in oven'],
            ['id' => 6, 'name' => 'Grilled Cheese Sandwich', 'ingredients' => 'Bread, Cheese, Butter', 'instructions' => 'Butter bread, add cheese, grill'],
            ['id' => 7, 'name' => 'Pancakes', 'ingredients' => 'Flour, Eggs, Milk', 'instructions' => 'Mix ingredients, cook on skillet'],
            ['id' => 8, 'name' => 'Sushi', 'ingredients' => 'Rice, Fish, Seaweed', 'instructions' => 'Roll rice with fish and seaweed'],
            ['id' => 9, 'name' => 'Lasagna', 'ingredients' => 'Pasta, Cheese, Tomato sauce', 'instructions' => 'Layer pasta, cheese, and sauce, bake'],
            ['id' => 10, 'name' => 'Minestrone Soup', 'ingredients' => 'Vegetables, Pasta, Beans', 'instructions' => 'Cook vegetables, add pasta and beans'],
        ];

        // Tentukan jumlah item per halaman
        $perPage = 5;

        // Tentukan halaman saat ini
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Potong array sesuai dengan halaman saat ini
        $currentPageRecipes = array_slice($recipes, ($currentPage - 1) * $perPage, $perPage);

        // Buat paginasi manual
        $recipesPaginated = new LengthAwarePaginator(
            $currentPageRecipes,
            count($recipes),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // Kirim data ke view
        return view('recipes.index', compact('recipesPaginated'));
    }
}
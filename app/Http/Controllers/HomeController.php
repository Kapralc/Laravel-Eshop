<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review; // Nezapomeň importovat model Review
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    // Načtěte produkty z databáze
    $products = Product::all();
    
    // Načtěte recenze seřazené podle data (nejnovější první)
    $reviews = Review::orderBy('created_at', 'desc')->get(); // Seřadí podle 'created_at' (nejnovější první)

    // Předání produktů a recenzí do view
    return view('home', compact('products', 'reviews'));
}

    // Ostatní metody zůstávají stejné
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        // Načte produkt podle ID
        $product = Product::findOrFail($id);

        // Předá produkt do view
        return view('products.show', compact('product'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%{$query}%")->get();
        return view('products.index', compact('products'));
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}

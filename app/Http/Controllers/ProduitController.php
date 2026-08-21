<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Requests\StoreproduitRequest;
use App\Http\Requests\UpdateproduitRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('admin.produit.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // 
    public function store(StoreproduitRequest $request)
    {

    $data = $request->all();
    Produit::create($data);
    
    try {
           Produit::create($data);
           return redirect()->route('produits.index')->with('success', 'Le produit est enregistré avec succès.');
       } catch (\Throwable $th) {
           return redirect()->route('produits.index')->with('error', 'Erreur d\'enregistrement du produit.');
       }

}

    /**
     * Display the specified resource.
     */
    public function show(produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produit $produit)
    {
        $produit=Produit::findOrFail($produit->id);
        return view('admin.produit.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produit $produit)
    {
        // dd($request, $produit);
        $produit = Produit::findOrFail($produit->id);
        $produit->update($request->all());
        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    //  public function destroy(produit $produit)
    // { 
    //     // dd($produit);
    //     $produit = Produit::findOrFail($produit->id);
    //     $produit->delete();
    //     return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
    //     }
    // }
    public function destroy(Produit $produit)
{
    $produit->delete();
    return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
}
}

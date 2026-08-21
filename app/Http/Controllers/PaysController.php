<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaysRequest; 

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $pays = Pays::all();
    return view('admin.pays.index' , compact('pays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.pays.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaysRequest $request)
    {
       // dd($request->all());
         $data = $request->all();
         try {
          Pays::create($data);  
       return redirect()->route('pays.index')->with('success', 'Le pays est enregistré avec succès.');

       } catch (\Throwable $th) {
           return redirect()->route('pays.index')->with('error', 'Erreur d\'enregistrement du pays.');
       }

          

    }

    /**
     * Display the specified resource.
     */
    public function show(Pays $pays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pays $lepays)
    {
        
        return view('admin.pays.edit', compact('lepays'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pays $pays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pays $pays)
    {
        
        $pays=Pays::findOrFail($pays->id);
        $pays->delete();
        return redirect()->route('pays.index');
    }
}

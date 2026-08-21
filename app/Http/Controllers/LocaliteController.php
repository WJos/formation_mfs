<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocaliteRequest;
use App\Models\Localite;
use Illuminate\Http\Request;

class LocaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localites = Localite::all();
        return view('admin.localite.index', compact('localites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.localite.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocaliteRequest $request)
    {
        //
        //dd($request->all());
        $data = $request->all();
        // Localite::create($data);
        //return view('admin.localite.index');
        // return redirect()->route('localites.index')->with('success', 'La localité est enregistré avec succès.');


        try {
            Localite::create($data);
            return redirect()->route('localites.index')->with('success', 'La localité est enregistré avec succès.');
        } catch (\Throwable $th) {
            return redirect()->route('localites.index')->with('error', 'Erreur d\'enregistrement de La localité.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Localite $localite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Localite $localite)
    {
        //
        $localite = Localite::findOrfail($localite->id);
        return view('admin.localite.edit', compact('localite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Localite $localite)
    {
        //
        $localite = Localite::findOrfail($localite->id);
        $localite->update($request->all());
        //return view('admin.localite.index');
        return redirect()->route('localites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Localite $localite)
    {
        //

        $localite = Localite::findOrfail($localite->id);
        $localite->delete();
        return redirect()->route('localites.index');
    }
}

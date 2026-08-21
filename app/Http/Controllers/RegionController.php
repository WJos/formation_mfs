<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRegionRequest;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions= Region::All();    
        return view('admin.region.index',compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.region.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegionRequest $request)
    {
       // dd($request->all());
        $data = $request->all();
       try {
           Region::create($data);
           return redirect()->route('regions.index')->with('success', 'La région est enregistrée avec succès.');
       } catch (\Throwable $th) {
           return redirect()->route('regions.index')->with('error', 'Erreur d\'enregistrement de la région.');
       }


    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Region $region)
    {
        $region = Region::findOrFail($region->id);
        return view('admin.region.edit', compact('region'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        $regions = Region::findOrFail($region->id);
        $regions->update($request->all());
        return redirect()->route('regions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        $region = Region::findOrFail($region->id);
        $region->delete();
        return redirect()->route('regions.index')->with('success', 'Supprimé avec succès.');
;
    }
}


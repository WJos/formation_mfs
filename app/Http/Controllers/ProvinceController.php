<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $provinces = Province::all();
        return view('admin.province.index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.province.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvinceRequest $request)
    {

    
        $data = $request->all();
        Province::create($data);
        // return view('admin.province.index');
       try {
           Province::create($data);
           return redirect()->route('provinces.index')->with('success', 'La province est enregistrée avec succès.');
       } catch (\Throwable $th) {
           return redirect()->route('provinces.index')->with('error', 'Erreur d\'enregistrement de la province.');
       }

    }

    /**
     * Display the specified resource.
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Province $province)
    {
        //
        $province = Province::findOrFail($province->id);
        return view('admin.province.edit', compact('province'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Province $province)
    {
        //
        $province = Province::findOrFail($province->id);
        $province->update($request->all());
        return redirect()->route('provinces.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Province $province)
    {
        //
        $province = Province::findOrFail($province->id);
        $province->delete();
        return redirect()->route('provinces.index');
    }
}

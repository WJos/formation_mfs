<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Http\Requests\StoreCommuneRequest;
use App\Http\Requests\UpdateCommuneRequest;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 2);
        $query = Commune::query();
        $communes = $query
            ->orderBy('created_at', 'desc')
            ->paginate($perPage)
            ->withQueryString();

        return view('admin.commune.index', compact('communes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.commune.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommuneRequest $request)
    {
        // dd($request);
        $data = $request->all();
        // Commune::create($data );
        try {
            Commune::create($data);
            return redirect()->route('communes.index')->with('success', 'La commune est enregistrée avec succès.');
        } catch (\Throwable $th) {
            return redirect()->route('communes.index')->with('error', 'Erreur d\'enregistrement de la commune.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Commune $commune)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commune $commune)
    {

        $commune = Commune::findOrFail($commune->id);
        return view('admin.commune.edit', compact('commune'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommuneRequest $request, Commune $commune)
    {
        $commune = Commune::findOrFail($commune->id);
        $commune->update($request->all());
        return redirect()->route('communes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commune $commune)
    {
        $commune = Commune::findOrFail($commune->id);
        $commune->delete();
        return redirect()->route('communes.index');
    }
}

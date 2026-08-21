<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // $request->validated();

        $data = $request->all();

        $data['password'] = Hash::make('1234567890');
        $data['status'] = true;

        try {
            User::create($data);
            return redirect()->route('users.index')->with('success', 'L\'utilisateur est enregistré avec succès.');
        } catch (\Throwable $th) {
            return redirect()->route('users.index')->with('error', 'Erreur d\'enregistrement de l\'utilisateur.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

        $user = User::findOrFail($user->id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user = User::findOrFail($user->id);

        $user->update($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // dd($user);
        $user = User::findOrFail($user->id);

        $user->delete();

        return redirect()->route('users.index');

    }
}

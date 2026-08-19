<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Models\Region;

class FirstController extends Controller
{
    public function index()
    {
        $data['regions'] = Region::with('provinces')->get();
        $regions = Region::with('provinces')->get();
        // $data['provinces'] = Province::all();

        // dd($data);

        return view('first', $data);
    }
}

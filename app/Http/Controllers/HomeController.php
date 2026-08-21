<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;
use App\Models\Region;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
}

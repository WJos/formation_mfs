<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[fillable(['nom', 'chef_lieu', 'superficie'])]

class Region extends Model
{
    /** @use HasFactory<\Database\Factories\RegionFactory> */

    protected $fillable = ['nom', 'chef_lieu', 'superficie'];
    use HasFactory;
}

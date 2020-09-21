<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function __invoke()
    {
        return response()->json(Pizza::all());
    }
}

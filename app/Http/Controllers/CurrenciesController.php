<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class CurrenciesController extends Controller
{
    public function __invoke()
    {
        return response()->json(Currency::all());
    }
}

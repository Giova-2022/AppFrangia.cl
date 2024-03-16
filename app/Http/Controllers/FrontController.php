<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function productos()
    {
        $productos = productos::all();
        return view('front.productos', compact("productos"));
    }
}

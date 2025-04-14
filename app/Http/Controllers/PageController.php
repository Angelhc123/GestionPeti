<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Muestra la vista de la misión
    public function mision()
    {
        return view('mision');
    }

    // Muestra la vista de la visión
    public function vision()
    {
        return view('vision');
    }

    // Muestra la vista del panel
    public function panel()
    {
        return view('panel');
    }
}

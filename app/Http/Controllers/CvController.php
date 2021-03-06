<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    // Llamamos al index del curriculum vitae
    public function index()
    {
        return view('cv');
    }
}

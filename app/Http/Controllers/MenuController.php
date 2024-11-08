<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('home'); // Vista para la sección "Casa"
    }

    public function photos()
    {
        return view('photos'); // Vista para la sección "Fotos"
    }

    public function contact()
    {
        return view('contact'); // Vista para la sección "Contacto"
    }
}


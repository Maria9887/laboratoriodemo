<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        // Lógica de la página de menú...
        return view('laboratorio.index');
    }

    public function about()
    {
        // Lógica de about..
        return view('laboratorio.about');
    }

    public function estudios()
    {
        // Lógica de estudios...
        return view('laboratorio.estudios');
    }
    public function promociones()
    {
        // Lógica de promociones
        return view('laboratorio.promociones');
    }
    public function pacientes()
    {
        // Lógica de pacientes...
        return view('laboratorio.pacientes');
    }
    public function contacto()
    {
        // Lógica de pacientes...
        return view('laboratorio.contacto');
    }

}

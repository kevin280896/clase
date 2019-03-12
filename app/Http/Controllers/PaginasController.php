<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function informacion(){
        return view('paginas/informacion');
    }

    public function bienvenida($nombre, $apellido = null){
        return view('paginas.bienvenida', compact('nombre', 'apellido'))
            ->with([
                'nombre_completo' => $nombre . ' ' . $apellido,
            ]);
    }

    public function contacto(){
        return view('paginas.contacto');
    }

    public function equipo(){
        return view('paginas.equipo');
    }
}

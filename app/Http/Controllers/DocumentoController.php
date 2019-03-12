<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index(){
        $docs = DB::table('documentos')
//            ->where('dirigido', 'kevin')
            ->get();


        return view('documentos.documentoIndex', compact('docs'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaData extends Controller
{
    public function GetEmpresas(){

        $empresas = \App\Empresa::where('activo',true)->get();

        return response()->json($empresas);
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class FiltracionController extends Controller
{
 	public function Filtracion(Request $req){

    	$time = Carbon::now();
    	$clientIP = \Request::ip();

    	return response()->json(['Fecha'=>$time->subHours(5)->toString(),
    		'ClientIP-SERVER'=>$clientIP,
    		'IP-API'=>$req['ip'],
    		'Navegador' =>$req['browser']]
		);
    }

    public function Index(Request $req){
    	$ip = $_SERVER['REMOTE_ADDR'];
   		return view('index',['ipServer'=>$ip]);
    }
}




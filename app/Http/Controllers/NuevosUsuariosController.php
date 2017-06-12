<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class NuevosUsuariosController extends Controller
{
    //
    public function index(){
        $usuarios = DB::table('simopdb.users')->select('id','name','email')->get();
        return view('ListUsers')->with('usuarios', $usuarios);
        //dd($usuarios);
    }

    public function getRegister(){
    	$departamentos = DB::table('simopdb.departamentos')->select('id','name')->get();
       	return view('auth.register')->with('departamentos', $departamentos);
    }

    public function register(Request $request){

    	DB::table('simopdb.users')->insert([
    		'name' => $request->name,
            'email' => $request->email,
            'role' => $request->rol,
            'password' => bcrypt($request->rol),
            'departamento_id'=>$request->departamento
    		]);



 
    }
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;

class DepartamentosController extends Controller
{
    //

    public function index(){
    	$departamentos = DB::table('departamentos')->select('id','name')->get();
    	return  View::make('layouts.ListDepartamentos')->with('departamentos',$departamentos);
    }

    public function editar($id){
    	$departamento = DB::table('departamentos')->select('name','id')->where('id','=',$id)->get();
        return View::make('EditDepartamento')->with('departamento',$departamento);
    }

    public function actualizar(Request $request){
        DB::table('departamentos')->where('id', $request->id)->update(['name' => $request->name]);
        return redirect()->intended('/success');
    }


    public function crear(){
        return View::make('FormDepartamento');
    }

    public function guardar(Request $request){
        DB::table('departamentos')->insert([
            'name' => $request->name
        ]);
        return redirect()->intended('/success');       
    }


}

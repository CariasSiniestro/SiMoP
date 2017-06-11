<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use View;

class MedidasController extends Controller
{
    //
    public function index(){
    	$unidades = DB::table('simopdb.unidad_medida')->select('id','name')->get();
    	return View::make('layouts.ListUnidadesMedida')->with('unidades', $unidades);
    }

   	public function editar($id){
    	$medida = DB::table('simopdb.unidad_medida')->select('name','id')->where('id','=',$id)->get();
        return View::make('EditUnidad')->with('medida',$medida);
   	}

    public function actualizar(Request $request){
        DB::table('simopdb.unidad_medida')->where('id', $request->id)->update(['name' => $request->name]);
        return redirect()->intended('/success');   	
    }

    public function crear(){
        return View::make('FormUnidadMedida');
    }

    public function guardar(Request $request){
    	DB::table('simopdb.unidad_medida')->insert([
    		'name' => $request->name,
            'created_at' => date('Y-m-d h:m:s')   
    	]);
    	return redirect()->intended('/success'); 
    }


}

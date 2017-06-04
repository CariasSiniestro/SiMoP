<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;

class CategoriasController extends Controller
{
    //
    public function index(){
 		$categorias = DB::table('categorias')->select('id','name')->get(); 
 		return View::make('layouts.ListCategorias')->with('categorias',$categorias);  	
    }

    public function ShowSelect(){
    	$categorias = DB::table('categorias')->select('id','name')->get();
    	$departamentos = DB::table('departamentos')->select('id','name')->orderBy('name', 'asc')->get();
    	//return View::make('layouts.ViewCategorias')->with('categorias', $categorias);
    	return View::make('layouts.ViewCategorias')
    					->with('categorias', $categorias)
    					->with('departamentos', $departamentos);
    }

    public function editar($id){
    	$categoria = DB::table('categorias')->select('name','id')->where('id','=',$id)->get();
        return View::make('EditCategoria')->with('categoria',$categoria);    	
    }

    public function actualizar(Request $request){
        DB::table('categorias')->where('id', $request->id)->update(['name' => $request->name]);
        return redirect()->intended('/success');   	
    }

    public function crear(){
        return View::make('FormCategoria');
    }

    public function guardar(Request $request){
        DB::table('categorias')->insert([
            'name' => $request->name
        ]);
        return redirect()->intended('/success');  
    }

}

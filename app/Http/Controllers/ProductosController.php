<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;

class ProductosController extends Controller
{
    //
    public function index(){
    	$productos = DB::table('productos')->select('id','name','id_categoria','id_medida')->get();
    	return view('ListProductos')->with('productos',$productos);
    }

    public function showPorCategoria($id){
        $productos = DB::table('productos')->select('id','name')->where('id_categoria', $id)->get();
        return View::make('ProductosCategoria')->with('productos', $productos)  ;
    }

    public function crear(){
    	$categorias = DB::table('categorias')->select('id','name')->get();
    	$medidas = DB::table('unidad_medida')->select('id','name')->get();
    	return view('NuevoProducto')->with('categorias',$categorias)->with('medidas',  $medidas);
    }

	public function guardar(Request $request){
		
		DB::table('productos')->insert([
			'name' => $request->name,
			'id_categoria' => $request->categoria,			
			'id_medida' => $request->medida
 			
		]);

		return redirect()->intended('/productos');
	}

    public function editar($id){
      	$categorias = DB::table('categorias')->select('id','name')->get();
    	$medidas = DB::table('unidad_medida')->select('id','name')->get();
    	$producto = DB::table('productos')->select('name','id','id_categoria','id_medida')->where('id','=',$id)->get();
        return View::make('EditProducto')->with('producto',$producto)
        								 ->with('categorias',$categorias)
        								 ->with('medidas',$medidas);    	
    }  

    public function actualizar(Request $request){
    	try {
    		DB::table('productos')->where('id',$request->id)->update([
    			'name'=> $request->name,
    			'id_categoria'=> $request->categoria,
    			'id_medida'=> $request->medida
    		]);	
    		return redirect()->intended('/success');

    	} catch (Exception $e) {
    		return redirect()->intended('/');
    	}
    } 


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;

class ProductosController extends Controller
{
    //muestra una lista de producto, todos. . .
    public function index(){
    	/*$productos = DB::table('productos')->select('id','name','id_categoria','id_medida')->get();
    	*/
        $productos = DB::select("
                               SELECT  P.id,P.name AS Pname,UM.name AS UMname,C.name AS Cname
                                FROM productos P
                                INNER JOIN unidad_medida UM 
                                ON 
                                P.id_medida = UM.id
                                INNER JOIN categorias C 
                                ON
                                P.id_categoria = C.id
                                ORDER BY (C.name)
                                ");
            
       return view('ListProductos')->with('productos',$productos);
    }

//muestra una vista de los productos segun categoria elegida
    public function showPorCategoria($id){
        $productos = DB::select("
                            SELECT  P.id,P.name AS Producto,UM.name AS Presentacion
                                FROM productos P
                                INNER JOIN unidad_medida UM 
                                ON 
                                P.id_medida = UM.id
                                INNER JOIN categorias C 
                                ON
                                P.id_categoria = C.id
                                AND
                                P.id_categoria = ?
                                ORDER BY (C.name)
                                ",array($id));

        /*DB::table('productos')->select('id','name')->where('id_categoria', $id)->get();*/
        //dd($productos);
        return View::make('ProductosCategoria')->with('productos', $productos);
    }

//muestra el form. para nuevo producto
    public function crear(){
    	$categorias = DB::table('categorias')->select('id','name')->get();
    	$medidas = DB::table('unidad_medida')->select('id','name')->get();
    	return view('NuevoProducto')->with('categorias',$categorias)->with('medidas',  $medidas);
        //dd(date('Y-m-d h:m:s'));
    }

//guarda el nuevo producto en la BD
	public function guardar(Request $request){
		
		DB::table('productos')->insert([
			'name' => $request->name,
			'id_categoria' => $request->categoria,			
			'id_medida' => $request->medida,
            'created_at' => date('Y-m-d h:m:s') 
 			
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
 
    		DB::table('productos')->where('id',$request->id)->update([
    			'name'=> $request->name,
    			'id_categoria'=> $request->categoria,
    			'id_medida'=> $request->medida,
                'updated_at' => date('Y-m-d h:m:s')
    		]);	
    		return redirect()->intended('/success');

    	
    } 


}

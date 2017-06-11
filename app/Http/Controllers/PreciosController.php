<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;
class PreciosController extends Controller
{
    //
    public function index(){

    }

//devuelve el formulario para seleccionar la categoria para ingreso de precios
    public function getView(){
    	$categorias = DB::table('simopdb.categorias')->select('id', 'name')->get();
    	$departamento = DB::table('simopdb.departamentos')->select('id', 'name')->where('id',Auth::user()->departamento_id)->get();
    	return view('IngresoPrecios')->with('categorias',$categorias)
    								->with('departamento',$departamento);
    	//dd($departamento);
    }

 //gurada el grupo de precios ingresados por el usuario, por categoria
    public function storeGroup(Request $request){

        $id_user = $request->id_user;
        $precios = $request->get('precio', []);
        $productos = $request ->get('id_producto', []);
        
        for ($i=0; $i < (sizeof($request->precio)) ; $i++) { 
            DB::table('simopdb.precios_data')->insert([
                'id_producto' => $productos[$i],
                'precio' => $precios[$i],
                'id_usuario' => $id_user,
                'created_at' => date('Y-m-d h:m:s')
            ]);
        }

        return redirect()->intended('/success');
        
    }

}

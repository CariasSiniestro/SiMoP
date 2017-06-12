<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;
use View;
class PreciosController extends Controller
{
    //
    public function index($id){
        $fecha=date('d-m-Y');
        $data= DB::select('
                        SELECT P.name AS Producto,UM.name AS Presentacion, avg(PD.precio) AS Precio
                            FROM simopdb.departamentos D
                            INNER JOIN simopdb.Users U
                            ON D.id = U.departamento_id
                            INNER JOIN simopdb.precios_data PD
                            ON PD.id_usuario = U.id
                            INNER JOIN simopdb.productos P
                            ON P.id = PD.id_producto
                            INNER JOIN simopdb.categorias Cat
                            ON Cat.id = P.id_categoria
                            INNER JOIN simopdb.unidad_medida UM
                            ON UM.id=P.id_medida
                            AND
                            D.id=? 
                            GROUP BY P.name,UM.name
                            ',array($id));
        //dd($data);
        return view('PreciosPorDepto')->with('data',$data);
    }

//devuelve el formulario para seleccionar la categoria para ingreso de precios
    public function preciosUser(){
        $productos = DB::select("
                            SELECT  P.id,P.name AS Producto,UM.name AS Presentacion
                                FROM simopdb.productos P
                                INNER JOIN simopdb.unidad_medida UM 
                                ON 
                                P.id_medida = UM.id
                                INNER JOIN simopdb.categorias C 
                                ON
                                P.id_categoria = C.id
                                ORDER BY (C.name)
                                ");
    	return View::make('ProductosUser')->with('productos',$productos);
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

        return redirect()->intended('/');
        
    }

    public function ViewConsulta(){
        $departamentos = DB::table('simopdb.departamentos')->select('id','name')->get();
        return view('ConsultaPorDepartamento')->with('departamentos',$departamentos);
    }

}

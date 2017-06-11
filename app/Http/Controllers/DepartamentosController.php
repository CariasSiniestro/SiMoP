<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;
use Auth;
use PDO;
class DepartamentosController extends Controller
{
    //

    public function index(){
    	$departamentos = DB::table('simopdb.departamentos')->select('id','name')->get();
    	return  View::make('layouts.ListDepartamentos')->with('departamentos',$departamentos);
    }

    public function editar($id){
    	$departamento = DB::table('simopdb.departamentos')->select('name','id')->where('id','=',$id)->get();
        return View::make('EditDepartamento')->with('departamento',$departamento);
    }

    public function actualizar(Request $request){
        DB::table('simopdb.departamentos')->where('id', $request->id)->update([
                    'name' => $request->name,
                    'updated_at' => date('Y-m-d h:m:s')
                    ]);
        return redirect()->intended('/success');
    }


    public function crear(){
        return View::make('FormDepartamento');
    }

    public function guardar(Request $request){
        DB::table('simopdb.departamentos')->insert([
            'name' => $request->name,
            'created_at' => date('Y-m-d h:m:s')
        ]);

/*
        $pdo = DB::getPdo();
        
        $stmt = $pdo->prepare("begin INSERTDEPTO(:nombre,:created_at,:user_id); end;"); 
        $nombre=$request->name;
        $fecha=date('Y-m-d h:m:s');
        $user_id=$request->id_user;
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':created_at', $fecha, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);        
        $stmt->execute();
        return redirect()->intended('/success');  */     
    }


}

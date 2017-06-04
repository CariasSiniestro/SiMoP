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

    public function getView(){
    	$categorias = DB::table('categorias')->select('id', 'name')->get();
    	$departamento = DB::table('departamentos')->select('id', 'name')->where('id',Auth::user()->departamento_id)->get();
    	return view('IngresoPrecios')->with('categorias',$categorias)
    								->with('departamento',$departamento);
    	//dd($departamento);
    }

}

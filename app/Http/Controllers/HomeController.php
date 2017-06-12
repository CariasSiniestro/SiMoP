<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use View;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos=DB::table('simopdb.departamentos')->select('id', 'name')->get();
        return view('welcome')->with('departamentos', $departamentos);
    }
 
        
 /*   public function GetMain()
    {
        //return View::make('layout.ViewPrincipal');
               return view('layout.app');
    }
 */   

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function escolheEntidadeAtiva(Request $request){
        $entidadeAtiva = $request->all();
        Session::put('entidade.ativa',$entidadeAtiva['entidades']);
        $ativada = Session::get('entidade.ativa');
        //$_SESSION['empresaAtiva'] = $empresaAtiva['todasEmpresas'];
        return redirect()->Route('home');
    }
}

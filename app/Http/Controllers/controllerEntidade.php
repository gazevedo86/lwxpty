<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidade;

class controllerEntidade extends Controller
{

    private $entidade = '';
    function __construct(){
      $this->entidade = new Entidade;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $retornaEntidade = $this->entidade->retornaEntidadeCadastradas();
        return view('entidades.cadastroEntidade', ['retornaEntidade'=>$retornaEntidade]);
    }

    public function adminEntidade($id){
      $entidade = $this->entidade->retornaCadastroEntidade($id);

      return view('entidades.adminEntidade', ['entidade'=>$entidade]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infPostEntidade = $request->except('_token','salvar','inserir');
        $insereEntidade = $this->entidade->insereNovaEntidade($infPostEntidade);
        return redirect('/cadastroEntidade');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

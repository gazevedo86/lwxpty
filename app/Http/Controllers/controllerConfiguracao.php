<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracao;
class controllerConfiguracao extends Controller
{


     public function __construct()
     {
       $this->middleware('auth');

     }

    public function index()
    {
        //
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
        //
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
    public function update(Request $request, $id,$area)
    {
        $post = $request->except('_token','salvar');
        $configuracao = new Configuracao();
        if($area == '13salario'){
          $salario = $configuracao->decSalario($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }
        if($area == 'assinatura'){
          $assinatura = $configuracao->assinatura($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'calculo'){
          $calculo = $configuracao->calculo($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'endereco'){
          $endereco = $configuracao->endereco($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'ferias'){
          $ferias = $configuracao->ferias($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'folhaComplementar'){
          $folhaComplementar = $configuracao->folhaComplementar($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'licencaPremio'){
          $licencaPremio = $configuracao->licencaPremio($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'mensagem'){
          $mensagem = $configuracao->mensagem($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'opcoesGerais'){
          $opcoesGerais = $configuracao->opcoesGerais($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'previdencia'){
          $previdencia = $configuracao->previdencia($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'rais'){
          $rais = $configuracao->rais($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        if($area == 'outrasInformacoes'){
          $outrasInformacoes = $configuracao->outrasInformacoes($post, $id);
           return redirect()->route("adminEntidade",['id'=>$id]);
        }

        print_r($area);
        exit;

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

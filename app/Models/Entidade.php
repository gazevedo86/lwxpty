<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Entidade extends Model
{

  private $tabela = 'tb_entidade';


    public function insereNovaEntidade($entidades){
      $insert = DB::table($this->tabela)->insertGetId($entidades);
      return $insert;
    }

    public function retornaEntidadeCadastradas(){
     return $entidades = DB::table($this->tabela)->select()->get();
    }

    public function listaEntidades(){
     return $entidades = DB::table($this->tabela)->select('nome_entidade','id_entidade')->get()->pluck('nome_entidade','id_entidade');
    }


    public function retornaCadastroEntidade($id){
      return $cadastroEntidade = DB::table('tb_entidade')
          ->leftjoin('tb_conf_decsalario','tb_conf_decsalario.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_assinaturas','tb_conf_assinaturas.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_calculos','tb_conf_calculos.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_endereco','tb_conf_endereco.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_ferias','tb_conf_ferias.fk_entidade','=','tb_entidade.id_entidade')
          //->join('tb_conf_fgts','tb_conf_fgts.fk_entidade','=','tb_entidade.id')
          ->leftjoin('tb_conf_folha_complementar','tb_conf_folha_complementar.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_licenca_premio','tb_conf_licenca_premio.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_mensagens','tb_conf_mensagens.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_opcoes_gerais','tb_conf_opcoes_gerais.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_outras_informacoes','tb_conf_outras_informacoes.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_previdencia','tb_conf_previdencia.fk_entidade','=','tb_entidade.id_entidade')
          ->leftjoin('tb_conf_rais','tb_conf_rais.fk_entidade','=','tb_entidade.id_entidade')
          ->select()
          ->where('tb_entidade.id_entidade', '=', $id)
          ->get();
    }
}

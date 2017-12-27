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

    public function retornaCadastroEntidade($id){
      return $cadastroEntidade = DB::table('tb_entidade')
          ->select()
          ->where('id', '=', $id)
          ->get();
    }
}

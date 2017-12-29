<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class Configuracao extends Model
{
  public function decSalario($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_13salario')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);

    return $update;
  }

  public function assinatura($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_assinaturas')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);

    return $update;
  }

}

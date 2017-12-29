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

  public function calculo($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_calculos')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function endereco($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_endereco')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function ferias($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_ferias')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function folhaComplementar($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_folha_complementar')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function licencaPremio($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_licenca_premio')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function mensagem($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_mensagens')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function opcoesGerais($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_opcoes_gerais')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function previdencia($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_previdencia')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function rais($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_rais')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

  public function outrasInformacoes($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
    $update = DB::table('tb_conf_outras_informacoes')
                  ->updateOrInsert(['fk_entidade'=>$id],$post);
    return $update;
  }

}

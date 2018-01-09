<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
use DateTime;
class Configuracao extends Model
{

  public function listaEstados(){
    return $listaEstados = DB::table('tb_conf_uf')
                    ->select('sigla_uf', 'id_uf')
                    ->get()
                    ->pluck('sigla_uf', 'id_uf');
  }
  public function listaMunicipiosEstado($id){
    return $listaMunicipiosEstado = DB::table('tb_cidades')
                    ->join('tb_conf_uf','tb_cidades.fk_uf','=','tb_conf_uf.id_uf')
                    ->select('nome', 'id_cidades')
                    ->where('tb_cidades.fk_uf','=',$id)
                    ->get()
                    ->pluck('nome', 'id_cidades');
  }
  public function decSalario($post, $id){
    $post['fk_usuario']=Auth::id();
    $post['fk_entidade']=$id;
      if(!isset($post['decsalario_acumular_unico_evento'])){
        $post['decsalario_acumular_unico_evento'] = 0;
      }
      if(!isset($post['decsalario_divisor'])){
        $post['decsalario_divisor'] = 0;
      }
      if(!isset($post['decsalario_calcular_media_fechamento'])){
        $post['decsalario_calcular_media_fechamento'] = 0;
      }
      if(!isset($post['decsalario_incluir_eventuais_lancados_mensal'])){
        $post['decsalario_incluir_eventuais_lancados_mensal'] = 0;
      }
      if(!isset($post['decsalario_calcular_media_adiantamento'])){
        $post['decsalario_calcular_media_adiantamento'] = 0;
      }
      if(!isset($post['decsalario_calcular_remanescente'])){
        $post['decsalario_calcular_remanescente'] = 0;
      }

    $update = DB::table('tb_conf_decsalario')
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

    $datetime = new DateTime();
    if ($post['calculos_convenio_medico_dia_controle']) {
        $post['calculos_convenio_medico_dia_controle'] = $datetime->createFromFormat('d/m/Y', $post['calculos_convenio_medico_dia_controle']);
        $post['calculos_convenio_medico_dia_controle'] = $post['calculos_convenio_medico_dia_controle']->format('Y-m-d');
    }
    if ($post['calculos_frequencia_dia_inicial']) {
        $post['calculos_frequencia_dia_inicial'] = $datetime->createFromFormat('d/m/Y', $post['calculos_frequencia_dia_inicial']);
        $post['calculos_frequencia_dia_inicial'] = $post['calculos_frequencia_dia_inicial']->format('Y-m-d');
    }
    if ($post['calculos_frequencia_dia_final']) {
        $post['calculos_frequencia_dia_final'] = $datetime->createFromFormat('d/m/Y', $post['calculos_frequencia_dia_final']);
        $post['calculos_frequencia_dia_final'] = $post['calculos_frequencia_dia_final']->format('Y-m-d');
    }

    if(!isset($post['calculos_mudar_referencia_salario_automatica'])){
      $post['calculos_mudar_referencia_salario_automatica'] = 0;
    }
    if(!isset($post['calculos_descontar_irrf'])){
      $post['calculos_descontar_irrf'] = 0;
    }
    if(!isset($post['calculos_permitir_holerite_negativo'])){
      $post['calculos_permitir_holerite_negativo'] = 0;
    }
    if(!isset($post['calculos_gerar_adiantamento_mensal_admitidos_mes'])){
      $post['calculos_gerar_adiantamento_mensal_admitidos_mes'] = 0;
    }
    if(!isset($post['calculos_pagar_avos_afastamento'])){
      $post['calculos_pagar_avos_afastamento'] = 0;
    }
    if(!isset($post['calculos_cnae_preponderante'])){
      $post['calculos_cnae_preponderante'] = 0;
    }
    if(!isset($post['calculos_hora_salarial'])){
      $post['calculos_hora_salarial'] = 0;
    }
    if(!isset($post['calculos_afastamentos_anteriores'])){
      $post['calculos_afastamentos_anteriores'] = 0;
    }
    if(!isset($post['calculos_bloquear_gravacao_calcular'])){
      $post['calculos_bloquear_gravacao_calcular'] = 0;
    }

    if(!isset($post['calculos_gerar_adiantamento_mensal_servidores'])){
      $post['calculos_gerar_adiantamento_mensal_servidores'] = 0;
    }


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

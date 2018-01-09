<?php

use Illuminate\Database\Seeder;

class estadosTabelaUF extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('tb_conf_uf')->insert([
    ['nome_uf'=>'Acre','sigla_uf'=>'AC'],
    ['nome_uf'=>'Alagoas','sigla_uf'=>'AL'],
    ['nome_uf'=>'Amapá','sigla_uf'=>'AP'],
    ['nome_uf'=>'Amazonas','sigla_uf'=>'AM'],
    ['nome_uf'=>'Bahia','sigla_uf'=>'BA'],
    ['nome_uf'=>'Ceará','sigla_uf'=>'CE'],
    ['nome_uf'=>'DistritoFederal','sigla_uf'=>'DF'],
    ['nome_uf'=>'EspíritoSanto','sigla_uf'=>'ES'],
    ['nome_uf'=>'Goiás','sigla_uf'=>'GO'],
    ['nome_uf'=>'Maranhão','sigla_uf'=>'MA'],
    ['nome_uf'=>'MatoGrosso','sigla_uf'=>'MT'],
    ['nome_uf'=>'MatoGrossodoSul','sigla_uf'=>'MS'],
    ['nome_uf'=>'MinasGerais','sigla_uf'=>'MG'],
    ['nome_uf'=>'Pará','sigla_uf'=>'PA'],
    ['nome_uf'=>'Paraíba','sigla_uf'=>'PB'],
    ['nome_uf'=>'Paraná','sigla_uf'=>'PR'],
    ['nome_uf'=>'Pernambuco','sigla_uf'=>'PE'],
    ['nome_uf'=>'Piauí','sigla_uf'=>'PI'],
    ['nome_uf'=>'Rio de Janeiro','sigla_uf'=>'RJ'],
    ['nome_uf'=>'Rio Grande do Norte','sigla_uf'=>'RN'],
    ['nome_uf'=>'Rio Grande do Sul','sigla_uf'=>'RS'],
    ['nome_uf'=>'Rondônia','sigla_uf'=>'RO'],
    ['nome_uf'=>'Roraima','sigla_uf'=>'RR'],
    ['nome_uf'=>'SantaCatarina','sigla_uf'=>'SC'],
    ['nome_uf'=>'São Paulo','sigla_uf'=>'SP'],
    ['nome_uf'=>'Sergipe','sigla_uf'=>'SE'],
    ['nome_uf'=>'Tocantins','sigla_uf'=>'TO'],
  ]);
  }
  }

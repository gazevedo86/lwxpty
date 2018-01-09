@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/calculo", 'method'=>'post')) }}

<div class="row" >
  <div class="col-md-7">

    <!-- INICIO DO BLOCO DE CONFIGURAÇÃO 1   -->
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Mudar referência de salário automaticamente?</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_mudar_referencia_salario_automatica',(!empty($entidade->calculos_mudar_referencia_salario_automatica)?$entidade->calculos_mudar_referencia_salario_automatica:0),(($entidade->calculos_mudar_referencia_salario_automatica==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_mudar_referencia_salario_automatica')) }}
                <label class="onoffswitch-label" for="calculos_mudar_referencia_salario_automatica">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            {{ Form::label('calculos_mudar_referencia_salario_tempo','Tempo (anos)') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculos_mudar_referencia_salario_tempo',(($entidade->calculos_mudar_referencia_salario_tempo)?$entidade->calculos_mudar_referencia_salario_tempo:null),array('class'=>'touchspin1','id'=>'calculos_mudar_referencia_salario_tempo')) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('calculos_mudar_referencia_salario_carencia','Carência (anos)') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculos_mudar_referencia_salario_carencia',(($entidade->calculos_mudar_referencia_salario_carencia)?$entidade->calculos_mudar_referencia_salario_carencia:null),array('class'=>'touchspin1','id'=>'calculos_mudar_referencia_salario_carencia')) }}
          </div>
        </div>
      </div>
    </div>
    <!-- FIM DO BLOCO DE CONFIGURAÇÃO 1   -->
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Salário minimo</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('calculos_salario_minimo_nacional','Nacional') }}
            <div class="input-group m-b">
              <span class="input-group-addon">$</span>
              {{ Form::text('calculos_salario_minimo_nacional',(($entidade->calculos_salario_minimo_nacional)?$entidade->calculos_salario_minimo_nacional:null),array('class'=>'form-control','id'=>'calculos_salario_minimo_nacional')) }}
              <span class="input-group-addon">.00</span>
            </div>
          </div>
          <div class="col-md-6">
            {{ Form::label('calculos_salario_minimo_municipal','Municipal') }}
            <div class="input-group m-b">
              <span class="input-group-addon">$</span>
              {{ Form::text('calculos_salario_minimo_municipal',(($entidade->calculos_salario_minimo_municipal)?$entidade->calculos_salario_minimo_municipal:null),array('class'=>'form-control','id'=>'calculos_salario_minimo_municipal')) }}
              <span class="input-group-addon">.00</span>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Base de calculo</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('calculos_base_calculo_prefeito_vice','Prefeito/ Vice') }}
            <div class="input-group m-b">
              <span class="input-group-addon">$</span>
              {{ Form::text('calculos_base_calculo_prefeito_vice',(($entidade->calculos_base_calculo_prefeito_vice)?$entidade->calculos_base_calculo_prefeito_vice:null),array('class'=>'form-control','id'=>'calculos_base_calculo_prefeito_vice')) }}
              <span class="input-group-addon">.00</span>
            </div>

          </div>
          <div class="col-md-6">
            {{ Form::label('calculos_base_calculo_presidente_vereador','Presidente/ Vereador') }}
            <div class="input-group m-b">
              <span class="input-group-addon">$</span>
              {{ Form::text('calculos_base_calculo_presidente_vereador',(($entidade->calculos_base_calculo_presidente_vereador)?$entidade->calculos_base_calculo_presidente_vereador:null),array('class'=>'form-control','id'=>'calculos_base_calculos_presidente_vereador')) }}
              <span class="input-group-addon">.00</span>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Convênio médico</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('calculos_convenio_medico_data_controle','Data para controle') }}
            {{ Form::select('calculos_convenio_medico_data_controle',array('1'=>'Convenio 1','2'=>'Convenio 2'),(($entidade->calculos_convenio_medico_data_controle)?$entidade->calculos_convenio_medico_data_controle:null),array('class'=>'select2_demo_1 form-control','id'=>'convenio_medico_data_controle')) }}
          </div>
          <div class="col-md-6">
            {{ Form::label('calculos_convenio_medico_dia_controle','Dia para controle') }}
            {{ Form::text('calculos_convenio_medico_dia_controle',(($entidade->calculos_convenio_medico_dia_controle)?date('d/m/Y',strtotime($entidade->calculos_convenio_medico_dia_controle)):null),array('class'=>'form-control','id'=>'calculos_convenio_medico_dia_controle','data-mask'=>'99/99/9999')) }}
          </div>
        </div>
      </div>
    </div>
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>DSR</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('calculos_dsr_data_controle','Data para controle') }}
            {{ Form::select('calculos_dsr_data_controle',array('1'=>'Convenio 1','2'=>'Convenio 2'),(($entidade->calculos_dsr_data_controle)?$entidade->calculos_dsr_data_controle:null),array('class'=>'select2_demo_1 form-control','id'=>'calculos_dsr_data_controle','data-mask'=>'99/99/9999')) }}
          </div>

        </div>
      </div>
    </div>
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Frequência</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-2">
            {{ Form::label('calculos_frequencia_dia_inicial','Dia inicial') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculos_frequencia_dia_inicial',(($entidade->calculos_frequencia_dia_inicial)?date('d/m/Y',strtotime($entidade->calculos_frequencia_dia_inicial)):null),array('class'=>'form-control','id'=>'calculos_frequencia_dia_inicial','data-mask'=>'99/99/9999')) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('calculos_frequencia_dia_final','Dia final') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculos_frequencia_dia_final',(($entidade->calculos_frequencia_dia_final)?date('d/m/Y',strtotime($entidade->calculos_frequencia_dia_final)):null),array('class'=>'form-control','id'=>'calculos_frequencia_dia_final','data-mask'=>'99/99/9999')) }}
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-5">
    <div class="ibox float-e-margins">
      <div class="ibox-title">

        <h5>Calculos</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-10 ">
            Descontar IRRF de valor igual ou inferior a R$ 10,00
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_descontar_irrf',(!empty($entidade->calculos_descontar_irrf)?$entidade->calculos_descontar_irrf:0),(($entidade->calculos_descontar_irrf==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_descontar_irrf')) }}
                <label class="onoffswitch-label" for="calculos_descontar_irrf">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Permitir holerite negativo?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_permitir_holerite_negativo',(!empty($entidade->calculos_permitir_holerite_negativo)?$entidade->calculos_permitir_holerite_negativo:0),(($entidade->calculos_permitir_holerite_negativo==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_permitir_holerite_negativo')) }}
                <label class="onoffswitch-label" for="calculos_permitir_holerite_negativo">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Gerar adiantamento mensal para admitidos no mês?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_gerar_adiantamento_mensal_admitidos_mes',(!empty($entidade->calculos_gerar_adiantamento_mensal_admitidos_mes)?$entidade->calculos_gerar_adiantamento_mensal_admitidos_mes:0),(($entidade->calculos_gerar_adiantamento_mensal_admitidos_mes==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_gerar_adiantamento_mensal_admitidos_mes')) }}
                <label class="onoffswitch-label" for="calculos_gerar_adiantamento_mensal_admitidos_mes">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Pagar avos de afastamento?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_pagar_avos_afastamento',(!empty($entidade->calculos_pagar_avos_afastamento)?$entidade->calculos_pagar_avos_afastamento:0),(($entidade->calculos_pagar_avos_afastamento==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_pagar_avos_afastamento')) }}
                <label class="onoffswitch-label" for="calculos_pagar_avos_afastamento">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Calcular CNAE preponderante?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_cnae_preponderante',(!empty($entidade->calculos_cnae_preponderante)?$entidade->calculos_cnae_preponderante:0),(($entidade->calculos_cnae_preponderante==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_cnae_preponderante')) }}
                <label class="onoffswitch-label" for="calculos_cnae_preponderante">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Calcular hora salário pela data de falta?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_hora_salarial',(!empty($entidade->calculos_hora_salarial)?$entidade->calculos_hora_salarial:0),(($entidade->calculos_hora_salarial==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_hora_salarial')) }}
                <label class="onoffswitch-label" for="calculos_hora_salarial">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Abater afastamentos anteriores a data de tempo de serviço?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_afastamentos_anteriores',(!empty($entidade->calculos_afastamentos_anteriores)?$entidade->calculos_afastamentos_anteriores:0),(($entidade->calculos_afastamentos_anteriores==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_afastamentos_anteriores')) }}
                <label class="onoffswitch-label" for="calculos_afastamentos_anteriores">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Bloquear gravação ao calcular?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_bloquear_gravacao_calcular',(!empty($entidade->calculos_bloquear_gravacao_calcular)?$entidade->calculos_bloquear_gravacao_calcular:0),(($entidade->calculos_bloquear_gravacao_calcular==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_bloquear_gravacao_calcular')) }}
                <label class="onoffswitch-label" for="calculos_bloquear_gravacao_calcular">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10">
            Gerar adiantamento mensal para servidores com menos de 15 dias mês?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('calculos_gerar_adiantamento_mensal_servidores',(!empty($entidade->calculos_gerar_adiantamento_mensal_servidores)?$entidade->calculos_gerar_adiantamento_mensal_servidores:0),(($entidade->calculos_gerar_adiantamento_mensal_servidores==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'calculos_gerar_adiantamento_mensal_servidores')) }}
                <label class="onoffswitch-label" for="calculos_gerar_adiantamento_mensal_servidores">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
      </div>
    </div>
  </div>

</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-6">
      <div class="ibox-title">
        <h5>Vale transporte</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('calculos_vale_transporte','Teto para desconto do salário base') }}

            <div class="input-group m-b">
              <span class="input-group-addon">$</span>
              {{ Form::text('calculos_vale_transporte',(($entidade->calculos_vale_transporte)?$entidade->calculos_vale_transporte:null),array('class'=>'form-control','id'=>'calculos_vale_transporte')) }}
              <span class="input-group-addon">.00</span>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="ibox-title">
        <h5>Tempo de serviço</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('calculos_tempo_servico_data_controle','Teto para desconto do salário base') }}
            <div class="input-group m-b">
              <span class="input-group-addon">$</span>
              {{ Form::text('calculos_tempo_servico_data_controle',(($entidade->calculos_tempo_servico_data_controle)?$entidade->calculos_tempo_servico_data_controle:null),array('class'=>'form-control','id'=>'calculos_tempo_servico_data_controle')) }}
              <span class="input-group-addon">.00</span>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="hr-line-dashed"></div>
<div class="ibox-content">
  <button class="btn btn-white" type="submit">Cancel</button>
  {{Form::submit('Salvar',array('class'=>'btn btn-primary','name'=>'salvar'))}}
</div>

{{ Form::close() }}

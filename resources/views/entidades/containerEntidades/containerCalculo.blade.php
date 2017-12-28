@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id/area/calculo", 'method'=>'post')) }}

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
                {{ Form::checkbox('calculo_mudar_referencia_automaticamente','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_mudar_referencia_automaticamente')) }}
                <label class="onoffswitch-label" for="calculo_mudar_referencia_automaticamente">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            {{ Form::label('calculo_mudar_referencia_salario_tempo','Tempo (anos)') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculo_mudar_referencia_salario_tempo','',array('class'=>'touchspin1','id'=>'calculo_mudar_referencia_salario_tempo')) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('calculo_mudar_referencia_salario_carencia','Carência (anos)') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculo_mudar_referencia_salario_carencia','',array('class'=>'touchspin1','id'=>'calculo_mudar_referencia_salario_carencia')) }}
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
            {{ Form::label('calculo_salario_minimo_nacional','Nacional') }}
            {{ Form::text('calculo_salario_minimo_nacional','',array('class'=>'form-control','id'=>'calculo_salario_minimo_nacional')) }}
          </div>
          <div class="col-md-6">
            {{ Form::label('calculo_salario_minimo_municipal','Municipal') }}
            {{ Form::text('calculo_salario_minimo_municipal','',array('class'=>'form-control','id'=>'calculo_salario_minimo_municipal')) }}
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
            {{ Form::label('calculo_base_calculo_prefeito_vice','Prefeito/ Vice') }}
            {{ Form::text('calculo_base_calculo_prefeito_vice','',array('class'=>'form-control','id'=>'calculo_base_calculo_prefeito_vice')) }}
          </div>
          <div class="col-md-6">
            {{ Form::label('calculo_base_calculo_presidente_vereador','Presidente/ Vereador') }}
            {{ Form::text('calculo_base_calculo_presidente_vereador','',array('class'=>'form-control','id'=>'calculo_base_calculo_presidente_vereador')) }}
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
            {{ Form::label('calculo_convenio_medico_data_controle','Data para controle') }}
            {{ Form::select('calculo_convenio_medico_data_controle',array('1'=>'Convenio 1','2'=>'Convenio 2'),null,array('class'=>'select2_demo_1 form-control','id'=>'convenio_medico_data_controle')) }}
          </div>
          <div class="col-md-6">
            {{ Form::label('calculo_convenio_medico_dia_controle','Dia para controle') }}
            {{ Form::text('calculo_convenio_medico_dia_controle','',array('class'=>'form-control','id'=>'calculo_convenio_medico_dia_controle')) }}
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
            {{ Form::label('calculo_data_controle','Data para controle') }}
            {{ Form::select('calculo_data_controle',array('1'=>'Convenio 1','2'=>'Convenio 2'),null,array('class'=>'select2_demo_1 form-control','id'=>'calculo_data_controle')) }}
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
            {{ Form::label('calculo_frequencia_dia_inicial','Dia inicial') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculo_frequencia_dia_inicial','',array('class'=>'form-control','id'=>'calculo_frequencia_dia_inicial')) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('calculo_frequencia_dia_final','Dia final') }}
          </div>
          <div class="col-md-3">
            {{ Form::text('calculo_frequencia_dia_final','',array('class'=>'form-control','id'=>'calculo_frequencia_dia_final')) }}
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
                {{ Form::checkbox('calculo_descontar_irrf','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_descontar_irrf')) }}
                <label class="onoffswitch-label" for="calculo_descontar_irrf">
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
                {{ Form::checkbox('calculo_permitir_holerite_negativo','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_permitir_holerite_negativo')) }}
                <label class="onoffswitch-label" for="calculo_permitir_holerite_negativo">
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
                {{ Form::checkbox('calculo_gerar_adiantamento_mensal_admitidos_mes','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_gerar_adiantamento_mensal_admitidos_mes')) }}
                <label class="onoffswitch-label" for="calculo_gerar_adiantamento_mensal_admitidos_mes">
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
                {{ Form::checkbox('calculo_pagar_avos_afastamento','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_pagar_avos_afastamento')) }}
                <label class="onoffswitch-label" for="calculo_pagar_avos_afastamento">
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
                {{ Form::checkbox('calculo_calcular_cnae_preponderante','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_calcular_cnae_preponderante')) }}
                <label class="onoffswitch-label" for="calculo_calcular_cnae_preponderante">
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
                {{ Form::checkbox('calculo_hora_salarial','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_hora_salarial')) }}
                <label class="onoffswitch-label" for="calculo_hora_salarial">
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
                {{ Form::checkbox('calculo_afastamentos_anteriores','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_afastamentos_anteriores')) }}
                <label class="onoffswitch-label" for="calculo_afastamentos_anteriores">
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
                {{ Form::checkbox('calculo_bloquear_gravacao_calcular','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_bloquear_gravacao_calcular')) }}
                <label class="onoffswitch-label" for="calculo_bloquear_gravacao_calcular">
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
                {{ Form::checkbox('calculo_gerar_adiantamento_mensal_servidores','',true,array('class'=>'onoffswitch-checkbox','id'=>'calculo_gerar_adiantamento_mensal_servidores')) }}
                <label class="onoffswitch-label" for="calculo_gerar_adiantamento_mensal_servidores">
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
            {{ Form::label('calculo_vale_transporte','Teto para desconto do salário base') }}
            {{ Form::text('calculo_vale_transporte','',array('class'=>'form-control','id'=>'calculo_vale_transporte')) }}
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
            {{ Form::label('calculo_tempo_servico_data_controle','Teto para desconto do salário base') }}
            {{ Form::text('calculo_tempo_servico_data_controle','',array('class'=>'form-control','id'=>'calculo_tempo_servico_data_controle')) }}
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

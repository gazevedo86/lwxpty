<div class="row">
  <div class="col-lg-7">

    <!-- INICIO DO BLOCO DE CONFIGURAÇÃO 1   -->
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Complemento do 13º salário</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-2">
              {{ Form::label('complemento_13_salario_tipo','Tipo') }}
            </div>
            <div class="col-md-10">
              {{ Form::select('complemento_13_salario_tipo',array('1'=>'tipo1','2'=>'tipo2'),'',array('class'=>'select2_demo_1 form-control','id'=>'mudar_referencia_automaticamente_tempo_anos')) }}
            </div>
          </div>
          <div class="col-sm-12">
            <div class="hr-line-dashed"></div>
          </div>
          <div class="col-lg-6">
            <div class="col-md-6">
              {{ Form::label('complemento_13_salario_tipo2','Mês (Tipo 2)') }}
            </div>
            <div class="col-md-6">
              {{ Form::select('complemento_13_salario_tipo2',array('1'=>'tipo21','2'=>'tipo22'),'',array('class'=>'select2_demo_1 form-control','id'=>'mudar_referencia_automaticamente_tempo_anos')) }}
            </div>
          </div>
          <div class="col-lg-6">
            <div class="col-md-6">
              {{ Form::label('complemento_13_salario_Demonstrar','Demonstrar?') }}
            </div>
            <div class="col-md-6">
              {{ Form::select('complemento_13_salario_Demonstrar',array('1'=>'demonstrar','2'=>'demonstrar2'),'',array('class'=>'select2_demo_1 form-control','id'=>'complemento_13_salario_Demonstrar')) }}
            </div>
          </div>
          <div class="col-sm-12">
            <div class="hr-line-dashed"></div>
          </div>
          <div class="col-lg-6 col-lg-offset-3">
            {{ Form::label('complemento_13_salario_nao_paga_valor_inferior','Nao pagar valor inferior a') }}
            {{ Form::text('complemento_13_salario_nao_paga_valor_inferior','',array('class'=>'form-control')) }}
          </div>
        </div>

      </div>
    </div>
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Tipo de média</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-2">
              {{ Form::label('complemento_13_salario_tipo','Tipo') }}
            </div>
            <div class="col-md-10">
              {{ Form::select('complemento_13_salario_tipo',array('1'=>'tipo1','2'=>'tipo2'),'',array('class'=>'select2_demo_1 form-control','id'=>'mudar_referencia_automaticamente_tempo_anos')) }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIM DO BLOCO DE CONFIGURAÇÃO 1   -->


  </div>
  <div class="col-lg-5">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>13º salário</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-10 ">
            {{ Form::label('13_salario_acumular_13_salario_unico_evento','Acumular 13º salário em um unico evento?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13_salario_acumular_13_salario_unico_evento','',true,array('class'=>'onoffswitch-checkbox','id'=>'13_salario_acumular_13_salario_unico_evento')) }}
                <label class="onoffswitch-label" for="descontar_irrf">
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
            {{ Form::label('13_salario_divisor_13_salario','Divisor do 13º salário é o mês do calculo?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13_salario_divisor_13_salario','',true,array('class'=>'onoffswitch-checkbox','id'=>'13_salario_divisor_13_salario')) }}
                <label class="onoffswitch-label" for="permitir_holerite_negativo">
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
            {{ Form::label('13_salario_calcular_media_fechamento','Calcular média fechamento?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13_salario_calcular_media_fechamento','',true,array('class'=>'onoffswitch-checkbox','id'=>'13_salario_calcular_media_fechamento')) }}
                <label class="onoffswitch-label" for="gerar_adiantamento_mensal_admitidos_mes">
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
            {{ Form::label('13_salario_incluir_eventuais_lancados_mensal','Incluir eventuais lançados no mensal?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13_salario_incluir_eventuais_lancados_mensal','',true,array('class'=>'onoffswitch-checkbox','id'=>'13_salario_incluir_eventuais_lancados_mensal')) }}
                <label class="onoffswitch-label" for="pagar_avos_afastamento">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Adiantamento 13º salário (1º parcela)</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-10 ">
            {{ Form::label('13_salario_calcular_media_adiantamento_13_salario','Calcular média no adiantamento 13º salário?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13_salario_calcular_media_adiantamento_13_salario','',true,array('class'=>'onoffswitch-checkbox','id'=>'13_salario_calcular_media_adiantamento_13_salario')) }}
                <label class="onoffswitch-label" for="13_salario_calcular_media_adiantamento_13_salario">
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
            {{ Form::label('13_salario_calcular_remanescente','Calcular para remanescentes?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13_salario_calcular_remanescente','',true,array('class'=>'onoffswitch-checkbox','id'=>'13_salario_calcular_remanescente')) }}
                <label class="onoffswitch-label" for="13_salario_calcular_remanescente">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-6 ">
            {{ Form::label('13_salario_porcentagem_adiantamento_13_salario','Porcentagem do adiantamento 13º salário') }}
          </div>
          <div class="col-md-6">
            {{ Form::text('13_salario_porcentagem_adiantamento_13_salario','',array('class'=>'form-control','id'=>'13_salario_porcentagem_adiantamento_13_salario')) }}
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-6 ">
            {{ Form::label('13_salario_mes_para_calculo','Mês para calculo') }}
          </div>
          <div class="col-md-6">
            {{ Form::select('13_salario_mes_para_calculo',array('1'=>'tipo21','2'=>'tipo22'),'',array('class'=>'select2_demo_1 form-control','id'=>'13_salario_mes_para_calculo')) }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

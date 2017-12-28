@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id/area/13salario", 'method'=>'post')) }}

<div class="row">
  <div class="col-md-7">

    <!-- INICIO DO BLOCO DE CONFIGURAÇÃO 1   -->
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Complemento do 13º salário</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-2">
              {{ Form::label('13salario_complemento_tipo','Tipo') }}
            </div>
            <div class="col-md-10">
              {{ Form::select('13salario_complemento_tipo',array('1'=>'tipo1','2'=>'tipo2'),'',array('class'=>'select2_demo_1 form-control','id'=>'13salario_complemento_tipo')) }}
            </div>
          </div>
          <div class="col-sm-12">
            <div class="hr-line-dashed"></div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              {{ Form::label('13salario_complemento_tipo2','Mês (Tipo 2)') }}
            </div>
            <div class="col-md-6">
              {{ Form::select('13salario_complemento_tipo2',array('1'=>'tipo21','2'=>'tipo22'),'',array('class'=>'select2_demo_1 form-control','id'=>'13salario_complemento_tipo2')) }}
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              {{ Form::label('13salario_complemento_Demonstrar','Demonstrar?') }}
            </div>
            <div class="col-md-6">
              {{ Form::select('13salario_complemento_Demonstrar',array('1'=>'demonstrar','2'=>'demonstrar2'),'',array('class'=>'select2_demo_1 form-control','id'=>'13salario_complemento_Demonstrar')) }}
            </div>
          </div>
          <div class="col-sm-12">
            <div class="hr-line-dashed"></div>
          </div>
          <div class="col-md-6 col-md-offset-3">
            {{ Form::label('13salario_complemento_nao_paga_valor_inferior','Nao pagar valor inferior a') }}
            {{ Form::text('13salario_complemento_nao_paga_valor_inferior','',array('class'=>'form-control', 'id'=>'13salario_complemento_nao_paga_valor_inferior')) }}
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
          <div class="col-md-12">
            <div class="col-md-2">
              {{ Form::label('13salario_tipo_media','Tipo') }}
            </div>
            <div class="col-md-10">
              {{ Form::select('13salario_tipo_media',array('1'=>'tipo1','2'=>'tipo2'),'',array('class'=>'select2_demo_1 form-control','id'=>'13salario_tipo_media')) }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIM DO BLOCO DE CONFIGURAÇÃO 1   -->


  </div>
  <div class="col-md-5">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>13º salário</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-10 ">
            {{ Form::label('13salario_acumular_salario_unico_evento','Acumular 13º salário em um unico evento?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13salario_acumular_salario_unico_evento','',true,array('class'=>'onoffswitch-checkbox','id'=>'13salario_acumular_salario_unico_evento')) }}
                <label class="onoffswitch-label" for="13salario_acumular_salario_unico_evento">
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
            {{ Form::label('13salario_divisor','Divisor do 13º salário é o mês do calculo?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13salario_divisor','',true,array('class'=>'onoffswitch-checkbox','id'=>'13salario_divisor')) }}
                <label class="onoffswitch-label" for="13salario_divisor">
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
            {{ Form::label('13salario_calcular_media_fechamento','Calcular média fechamento?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13salario_calcular_media_fechamento','',true,array('class'=>'onoffswitch-checkbox','id'=>'13salario_calcular_media_fechamento')) }}
                <label class="onoffswitch-label" for="13salario_calcular_media_fechamento">
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
            {{ Form::label('13salario_incluir_eventuais_lancados_mensal','Incluir eventuais lançados no mensal?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13salario_incluir_eventuais_lancados_mensal','',true,array('class'=>'onoffswitch-checkbox','id'=>'13salario_incluir_eventuais_lancados_mensal')) }}
                <label class="onoffswitch-label" for="13salario_incluir_eventuais_lancados_mensal">
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
            {{ Form::label('13salario_calcular_media_adiantamento','Calcular média no adiantamento 13º salário?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13salario_calcular_media_adiantamento','',true,array('class'=>'onoffswitch-checkbox','id'=>'13salario_calcular_media_adiantamento')) }}
                <label class="onoffswitch-label" for="13salario_calcular_media_adiantamento">
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
            {{ Form::label('13salario_calcular_remanescente','Calcular para remanescentes?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('13salario_calcular_remanescente','',true,array('class'=>'onoffswitch-checkbox','id'=>'13salario_calcular_remanescente')) }}
                <label class="onoffswitch-label" for="13salario_calcular_remanescente">
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
            {{ Form::label('13salario_porcentagem_adiantamento','Porcentagem do adiantamento 13º salário') }}
          </div>
          <div class="col-md-6">
            {{ Form::text('13salario_porcentagem_adiantamento','',array('class'=>'form-control','id'=>'13salario_porcentagem_adiantamento')) }}
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-6 ">
            {{ Form::label('13salario_mes_para_calculo','Mês para calculo') }}
          </div>
          <div class="col-md-6">
            {{ Form::select('13salario_mes_para_calculo',array('1'=>'tipo21','2'=>'tipo22'),'',array('class'=>'select2_demo_1 form-control','id'=>'13salario_mes_para_calculo')) }}
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

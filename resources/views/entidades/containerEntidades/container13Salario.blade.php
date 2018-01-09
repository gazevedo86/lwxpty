@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/13salario", 'method'=>'post')) }}

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
              {{ Form::label('decsalario_complemento_tipo','Tipo') }}
            </div>
            <div class="col-md-10">
              {{ Form::select('decsalario_complemento_tipo',array('1'=>'tipo1','2'=>'tipo2'),(($entidade->decsalario_complemento_tipo)?$entidade->decsalario_complemento_tipo:''),array('class'=>'select2_demo_1 form-control','id'=>'decsalario_complemento_tipo', 'placeholder'=>'Selecione')) }}
            </div>
          </div>
          <div class="col-sm-12">
            <div class="hr-line-dashed"></div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              {{ Form::label('decsalario_complemento_tipo2','Mês (Tipo 2)') }}
            </div>
            <div class="col-md-6">
              {{ Form::select('decsalario_complemento_tipo2',array('1'=>'tipo21','2'=>'tipo22'),(($entidade->decsalario_complemento_tipo2)?$entidade->decsalario_complemento_tipo2:''),array('class'=>'select2_demo_1 form-control','id'=>'decsalario_complemento_tipo2', 'placeholder'=>'Selecione')) }}
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              {{ Form::label('decsalario_complemento_demonstrar','Demonstrar?') }}
            </div>
            <div class="col-md-6">
              {{ Form::select('decsalario_complemento_demonstrar',array('1'=>'demonstrar','2'=>'demonstrar2'),(($entidade->decsalario_complemento_demonstrar)?$entidade->decsalario_complemento_demonstrar:''),array('class'=>'select2_demo_1 form-control','id'=>'decsalario_complemento_Demonstrar', 'placeholder'=>'Selecione')) }}
            </div>
          </div>
          <div class="col-sm-12">
            <div class="hr-line-dashed"></div>
          </div>
          <div class="col-md-6 col-md-offset-3">
            {{ Form::label('decsalario_complemento_nao_paga_valor_inferior','Nao pagar valor inferior a') }}
            {{ Form::text('decsalario_complemento_nao_paga_valor_inferior',$entidade->decsalario_complemento_nao_paga_valor_inferior,array('class'=>'form-control', 'id'=>'decsalario_complemento_nao_paga_valor_inferior')) }}
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
              {{ Form::label('decsalario_tipo_media','Tipo') }}
            </div>
            <div class="col-md-10">
              {{ Form::select('decsalario_tipo_media',array('1'=>'tipo1','2'=>'tipo2'),$entidade->decsalario_tipo_media,array('class'=>'select2_demo_1 form-control','id'=>'decsalario_tipo_media', 'placeholder'=>'Selecione')) }}
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
            {{ Form::label('decsalario_acumular_unico_evento','Acumular 13º salário em um unico evento?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('decsalario_acumular_unico_evento',(!empty($entidade->decsalario_acumular_unico_evento)?$entidade->decsalario_acumular_unico_evento:0),(($entidade->decsalario_acumular_unico_evento==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'decsalario_acumular_unico_evento')) }}
                <label class="onoffswitch-label" for="decsalario_acumular_unico_evento">
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
            {{ Form::label('decsalario_divisor','Divisor do 13º salário é o mês do calculo?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('decsalario_divisor',(!empty($entidade->decsalario_divisor)?$entidade->decsalario_divisor:0),(($entidade->decsalario_divisor==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'decsalario_divisor')) }}
                <label class="onoffswitch-label" for="decsalario_divisor">
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
            {{ Form::label('decsalario_calcular_media_fechamento','Calcular média fechamento?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('decsalario_calcular_media_fechamento',(!empty($entidade->decsalario_calcular_media_fechamento)?$entidade->decsalario_calcular_media_fechamento:0),(($entidade->decsalario_calcular_media_fechamento==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'decsalario_calcular_media_fechamento')) }}
                <label class="onoffswitch-label" for="decsalario_calcular_media_fechamento">
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
            {{ Form::label('decsalario_incluir_eventuais_lancados_mensal','Incluir eventuais lançados no mensal?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('decsalario_incluir_eventuais_lancados_mensal',(!empty($entidade->decsalario_incluir_eventuais_lancados_mensal)?$entidade->decsalario_incluir_eventuais_lancados_mensal:0),(($entidade->decsalario_incluir_eventuais_lancados_mensal==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'decsalario_incluir_eventuais_lancados_mensal')) }}
                <label class="onoffswitch-label" for="decsalario_incluir_eventuais_lancados_mensal">
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
            {{ Form::label('decsalario_calcular_media_adiantamento','Calcular média no adiantamento 13º salário?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('decsalario_calcular_media_adiantamento',(!empty($entidade->decsalario_calcular_media_adiantamento)?$entidade->decsalario_calcular_media_adiantamento:0),(($entidade->decsalario_calcular_media_adiantamento==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'decsalario_calcular_media_adiantamento')) }}
                <label class="onoffswitch-label" for="decsalario_calcular_media_adiantamento">
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
            {{ Form::label('decsalario_calcular_remanescente','Calcular para remanescentes?') }}
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('decsalario_calcular_remanescente',(!empty($entidade->decsalario_calcular_remanescente)?$entidade->decsalario_calcular_remanescente:0),(($entidade->decsalario_calcular_remanescente==1)?true:false),array('class'=>'onoffswitch-checkbox','id'=>'decsalario_calcular_remanescente')) }}
                <label class="onoffswitch-label" for="decsalario_calcular_remanescente">
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
            {{ Form::label('decsalario_porcentagem_adiantamento','Porcentagem do adiantamento 13º salário') }}
          </div>
          <div class="col-md-6">
            {{ Form::text('decsalario_porcentagem_adiantamento',(($entidade->decsalario_porcentagem_adiantamento)?$entidade->decsalario_porcentagem_adiantamento:''),array('class'=>'form-control','id'=>'decsalario_porcentagem_adiantamento')) }}
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-6 ">
            {{ Form::label('decsalario_mes_para_calculo','Mês para calculo') }}
          </div>
          <div class="col-md-6">
            {{ Form::select('decsalario_mes_para_calculo',array('1'=>'tipo21','2'=>'tipo22'),(($entidade->decsalario_mes_para_calculo)?$entidade->decsalario_mes_para_calculo:''),array('class'=>'select2_demo_1 form-control','id'=>'decsalario_mes_para_calculo', 'placeholder'=>'Selecione')) }}
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

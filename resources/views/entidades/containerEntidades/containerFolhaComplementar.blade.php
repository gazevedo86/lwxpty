<div class="row">
  <div class="col-md-6">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Folha complementar</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-md-10 ">
                  {{ Form::label('folha_complementar_discriminar_eventos','Discriminar eventos da folha complementar na folha posterior?') }}
                </div>
                <div class="col-md-2">
                  <div class="switch">
                    <div class="onoffswitch">
                      {{ Form::checkbox('13_salario_acumular_13_salario_unico_evento','',true,array('class'=>'onoffswitch-checkbox','id'=>'13_salario_acumular_13_salario_unico_evento')) }}
                      <label class="onoffswitch-label" for="13_salario_acumular_13_salario_unico_evento">
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
                  {{ Form::label('folha_complementar_comparar_apenas_eventos_dois_calculos','Comparar apenas eventos que existem nos dois calculos?') }}
                </div>
                <div class="col-md-2">
                  <div class="switch">
                    <div class="onoffswitch">
                      {{ Form::checkbox('folha_complementar_comparar_apenas_eventos_dois_calculos','',true,array('class'=>'onoffswitch-checkbox','id'=>'folha_complementar_comparar_apenas_eventos_dois_calculos')) }}
                      <label class="onoffswitch-label" for="descontar_irrf">
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
    </div>
  </div>
  <div class="col-md-6">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Folha complementar</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              <div class="row">
                <div class="col-md-10 ">
                  {{ Form::label('folha_complementar_tipo_folha_complementar','Discriminar eventos da folha complementar na folha posterior?') }}
                  {{ Form::select('folha_complementar_tipo_folha_complementar',array('1'=>'tipo1'), null,array('class'=>'select2_demo_1 form-control')) }}
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="row">
                {{ Form::label('folha_complementar_considerar_salario','Considerar salario') }}
                <div class="col-md-10 ">
                  {{ Form::select('folha_complementar_tipo_folha_complementar',array('1'=>'tipo1'), null,array('class'=>'select2_demo_1 form-control')) }}
                </div>
              </div>
              <div class="hr-line-dashed"></div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

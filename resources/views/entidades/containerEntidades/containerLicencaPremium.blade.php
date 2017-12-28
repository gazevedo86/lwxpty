@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id/area/licencaPremio", 'method'=>'post')) }}
<div class="row">
  <div class="col-md-8">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Licença premio</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-4 ">
              {{ Form::label('licenca_premio_calcular_media','Calcular média de licença premio?') }}
            </div>
            <div class="col-md-2">
              <div class="switch">
                <div class="onoffswitch">
                  {{ Form::checkbox('licenca_premio_calcular_media','',true,array('class'=>'onoffswitch-checkbox','id'=>'licenca_premio_calcular_media')) }}
                  <label class="onoffswitch-label" for="licenca_premio_calcular_media">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-4 ">
              {{ Form::label('licenca_premio_controla_data_pagamento','Controla licença prêmio por data de pagamento') }}
            </div>
            <div class="col-md-2">
              <div class="switch">
                <div class="onoffswitch">
                  {{ Form::checkbox('licenca_premio_controla_data_pagamento','',true,array('class'=>'onoffswitch-checkbox','id'=>'licenca_premio_controla_data_pagamento')) }}
                  <label class="onoffswitch-label" for="licenca_premio_controla_licenca_data_pagamento">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="col-md-4">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Considerar para duração de gozo</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-8 ">
              {{ Form::label('licenca_premio_falta_injustificada','Falta injustificada?') }}
            </div>
            <div class="col-md-4">
              <div class="switch">
                <div class="onoffswitch">
                  {{ Form::checkbox('licenca_premio_falta_injustificada','',true,array('class'=>'onoffswitch-checkbox','id'=>'licenca_premio_falta_injustificada')) }}
                  <label class="onoffswitch-label" for="licenca_premio_falta_injustificada">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="hr-line-dashed"></div>
          <div class="form-group">
            <div class="row">
                {{ Form::label('licenca_premio_falta_justificada','Falta justificada?') }}
                <div class="col-md-8 ">
              </div>
              <div class="col-md-4">
                <div class="switch">
                  <div class="onoffswitch">
                    {{ Form::checkbox('licenca_premio_falta_justificada','',true,array('class'=>'onoffswitch-checkbox','id'=>'licenca_premio_falta_justificada')) }}
                    <label class="onoffswitch-label" for="licenca_premio_falta_justificada">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-8 ">
                  {{ Form::label('licenca_premio_falta_abonada','Licenca premio falta abonada?') }}
                </div>
                <div class="col-md-4">
                  <div class="switch">
                    <div class="onoffswitch">
                      {{ Form::checkbox('licenca_premio_falta_abonada','',true,array('class'=>'onoffswitch-checkbox','id'=>'licenca_premio_falta_abonada')) }}
                      <label class="onoffswitch-label" for="licenca_premio_falta_abonada">
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
</div>
<div class="hr-line-dashed"></div>
  <div class="ibox-content">
  <button class="btn btn-white" type="submit">Cancel</button>
  {{Form::submit('Salvar',array('class'=>'btn btn-primary','name'=>'salvar'))}}
</div>

{{ Form::close() }}

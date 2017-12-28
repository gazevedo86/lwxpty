@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id/area/folhaComplementar", 'method'=>'post')) }}

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
                      {{ Form::checkbox('folha_complementar_discriminar_eventos','',true,array('class'=>'onoffswitch-checkbox','id'=>'folha_complementar_discriminar_eventos')) }}
                      <label class="onoffswitch-label" for="folha_complementar_discriminar_eventos">
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
                  {{ Form::label('folha_complementar_comparar_eventos','Comparar apenas eventos que existem nos dois calculos?') }}
                </div>
                <div class="col-md-2">
                  <div class="switch">
                    <div class="onoffswitch">
                      {{ Form::checkbox('folha_complementar_comparar_eventos','',true,array('class'=>'onoffswitch-checkbox','id'=>'folha_complementar_comparar_eventos')) }}
                      <label class="onoffswitch-label" for="folha_complementar_comparar_eventos">
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
                  {{ Form::label('folha_complementar_tipo','Discriminar eventos da folha complementar na folha posterior?') }}
                  {{ Form::select('folha_complementar_tipo',array('1'=>'tipo1'), null,array('class'=>'select2_demo_1 form-control','id'=>'folha_complementar_tipo')) }}
                </div>
              </div>
              <div class="hr-line-dashed"></div>
              <div class="row">
                {{ Form::label('folha_complementar_considerar_salario','Considerar salario') }}
                <div class="col-md-10 ">
                  {{ Form::select('folha_complementar_considerar_salario',array('1'=>'tipo1'), null,array('class'=>'select2_demo_1 form-control','id'=>'folha_complementar_considerar_salario')) }}
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

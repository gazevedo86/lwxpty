@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/previdencia", 'method'=>'post')) }}

<div class="row">
  <div class="col-md-4">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Previdencia</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              {{ Form::label('fk_lista_sefip', 'Codigo do recolhimento SEFIP') }}
              {{Form::select('fk_lista_sefip',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fk_lista_sefip'))}}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              {{ Form::label('fk_lista_gps', 'Codigo do pagamento GPS') }}
              {{Form::select('fk_lista_gps',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fk_lista_gps'))}}
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-4">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Configurar incidência da patronal</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <div class="switch">
                <div class="onoffswitch">
                  {{ Form::checkbox('previdencia_incidencia_patronal','',true,array('class'=>'onoffswitch-checkbox','id'=>'previdencia_incidencia_patronal')) }}
                  <label class="onoffswitch-label" for="previdencia_incidencia_patronal">
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
</div>
<div class="hr-line-dashed"></div>
  <div class="ibox-content">
  <button class="btn btn-white" type="submit">Cancel</button>
  {{Form::submit('Salvar',array('class'=>'btn btn-primary','name'=>'salvar'))}}
</div>

{{ Form::close() }}

@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/ferias", 'method'=>'post')) }}

<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Tipo de pagamento de férias</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-3 ">
              {{ Form::label('ferias_tipo_pagamento','Recibo de férias') }}
              {{Form::select('ferias_tipo_pagamento',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'ferias_tipo_pagamento'))}}
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

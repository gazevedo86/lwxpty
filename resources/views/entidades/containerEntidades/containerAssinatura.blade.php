@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id/area/assinatura", 'method'=>'post')) }}


<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Assinaturas</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3 col-md-offset-9 ">
                {{ Form::button('Nova assinatura', array('class'=>'btn btn-block btn-info')) }}
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                {{ Form::label('assinatura_nome','Nome da assinatura') }}
                {{ Form::text('assinatura_nome','',array('class'=>'form-control','id'=>'assinatura_nome')) }}
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                {{ Form::label('assinatura_descricao_cargo','Nome da assinatura') }}
                {{ Form::text('assinatura_descricao_cargo','',array('class'=>'form-control','id'=>'assinatura_descricao_cargo')) }}
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-md-6">
                {{ Form::label('assinatura_documento','Enviar assinatura') }}
                {{ Form::file('assinatura_documento',array('class'=>'form-control','id'=>'assinatura_documento')) }}
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

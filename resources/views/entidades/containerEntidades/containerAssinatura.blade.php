<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Assinaturas</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-md-3 col-md-offset-9 ">
                {{ Form::button('Nova assinatura', array('class'=>'btn btn-block btn-info')) }}
              </div>
            </div>
            <div class="col-lg-12">
              <div class="col-md-6">
                {{ Form::label('nome_assinatura','Nome da assinatura') }}
                {{ Form::text('nome_assinatura','',array('class'=>'form-control','id'=>'nome_assinatura')) }}
              </div>
            </div>
            <div class="col-lg-12">
              <div class="col-md-6">
                {{ Form::label('descricao_cargo','Nome da assinatura') }}
                {{ Form::text('descricao_cargo','',array('class'=>'form-control','id'=>'descricao_cargo')) }}
              </div>
            </div>
            <div class="col-lg-12">
              <div class="col-md-6">
                {{ Form::label('documento_assinatura','Enviar assinatura') }}
                {{ Form::file('documento_assinatura',array('class'=>'form-control','id'=>'documento_assinatura')) }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

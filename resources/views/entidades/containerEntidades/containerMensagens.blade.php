@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id/area/mensagem", 'method'=>'post')) }}
<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Mensagens</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <div class="col-sm-12">
                {{ Form::label('mensagens_holerite','Mensagens holerite') }}<span class="text-danger">*</span>
                {{ Form::text('mensagens_holerite','',array('class'=>'form-control','id'=>'mensagens_holerite'))}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-sm-12">
                {{ Form::label('mensagens_aniversario','Mensagem de aniversário') }}<span class="text-danger">*</span>
                {{ Form::text('mensagens_aniversario','',array('class'=>'form-control','id'=>'mensagens_aniversario'))}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="col-sm-12">
                {{ Form::label('mensagens_cesta_basica','Mensagem cesta básica') }}<span class="text-danger">*</span>
                {{ Form::text('mensagens_cesta_basica','',array('class'=>'form-control','id'=>'mensagens_cesta_basica'))}}
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-sm-12">
                {{ Form::label('mensagens_rodape_relatoios','Rodapé de relatório') }}<span class="text-danger">*</span>
                {{ Form::text('mensagens_rodape_relatoios','',array('class'=>'form-control','id'=>'mensagens_rodape_relatoios'))}}
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

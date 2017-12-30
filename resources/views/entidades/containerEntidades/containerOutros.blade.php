@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/outrasInformacoes", 'method'=>'post')) }}

<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Brasão</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              <img alt="image" class="img-circle" src="/img/profile_small.jpg" width="90" height="90" />
              {{Form::file('outras_informacoes_imagem',array('class'=>'form-control','id'=>'outras_informacoes_imagem'))}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Outros</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-6">
              {{ Form::label('outras_informacoes_telefone','Telefone') }}
              {{Form::text('outras_informacoes_telefone','',array('class'=>'form-control','id'=>'outras_informacoes_telefone'))}}
            </div>
            <div class="col-sm-6">
              {{ Form::label('outras_informacoes_fax','Fax') }}
              {{Form::text('outras_informacoes_fax','',array('class'=>'form-control','id'=>'outras_informacoes_fax'))}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              {{ Form::label('outras_informacoes_email','Email') }}
              {{Form::text('outras_informacoes_email','',array('class'=>'form-control','id'=>'outras_informacoes_email'))}}
            </div>
            <div class="col-sm-6">
              {{ Form::label('outras_informacoes_site','Site') }}
              {{Form::text('outras_informacoes_site','',array('class'=>'form-control','id'=>'outras_informacoes_site'))}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              {{ Form::label('outras_informacoes_data','Data de encerramento de atividades') }}
              {{Form::text('outras_informacoes_data','',array('class'=>'form-control','id'=>'outras_informacoes_data'))}}
            </div>
            <div class="col-sm-6">
              {{ Form::label('outras_informacoes_nome_abreviado','Nome Abreviado') }}
              {{Form::text('outras_informacoes_nome_abreviado','',array('class'=>'form-control','id'=>'outras_informacoes_nome_abreviado'))}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              {{ Form::label('outras_informacoes_tipo','Tipo') }}
              {{Form::select('outras_informacoes_tipo',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'outras_informacoes_tipo'))}}
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

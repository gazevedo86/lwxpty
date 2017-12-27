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
              {{Form::file('outrosEncerramentoAtividade',array('class'=>'form-control','id'=>'outrosEncerramentoAtividade'))}}
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
              {{ Form::label('outrosTelefone','Telefone') }}
              {{Form::text('outrosTelefone','',array('class'=>'form-control','id'=>'outrosTelefone'))}}
            </div>
            <div class="col-sm-6">
              {{ Form::label('outrosFax','Fax') }}
              {{Form::text('outrosFax','',array('class'=>'form-control','id'=>'outrosFax'))}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              {{ Form::label('outrosEmail','Email') }}
              {{Form::text('outrosEmail','',array('class'=>'form-control','id'=>'outrosEmail'))}}
            </div>
            <div class="col-sm-6">
              {{ Form::label('outrosSite','Site') }}
              {{Form::text('outrosSite','',array('class'=>'form-control','id'=>'outrosSite'))}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              {{ Form::label('outrosEncerramentoAtividade','Data de encerramento de atividades') }}
              {{Form::text('outrosEncerramentoAtividade','',array('class'=>'form-control','id'=>'outrosEncerramentoAtividade'))}}
            </div>
            <div class="col-sm-6">
              {{ Form::label('outrosNomeAbreviado','Nome Abreviado') }}
              {{Form::text('outrosNomeAbreviado','',array('class'=>'form-control','id'=>'outrosNomeAbreviado'))}}
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              {{ Form::label('outrosTipo','Tipo') }}
              {{Form::select('outrosTipo',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'rais_atividade_economica'))}}

            </div>
            <div class="col-sm-6">
              {{ Form::label('outrosCodigoSip','Código Entidade SIP RPPS (Exportação)') }}
              {{Form::text('outrosNomeAbreviado','',array('class'=>'form-control','id'=>'outrosNomeAbreviado'))}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>


<div class="col-lg-5">
  <div class="ibox float-e-margins">
    <div class="ibox-title">
      <h5>as</h5>
    </div>
    <div class="ibox-content">
      <div class="row">
        <div class="col-md-10 ">
          Sincronização automática com RPPS
        </div>
        <div class="col-md-2">
          <div class="switch">
            <div class="onoffswitch">
              {{ Form::checkbox('sincronizacaoAutomaticaRpps','',true,array('class'=>'onoffswitch-checkbox','id'=>'sincronizacaoAutomaticaRpps')) }}
              <label class="onoffswitch-label" for="sincronizacaoAutomaticaRpps">
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

<div class="row">
  <div class="col-md-9">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Rais</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              {{ Form::label('rais_atividade_economica', 'Atividade econômica') }}
              {{Form::select('rais_atividade_economica',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'rais_atividade_economica'))}}
            </div>
            <div class="col-sm-9">
              {{ Form::label('descricao_rais_atividade_economica', '&nbsp;') }}
              {{Form::text('descricao_rais_atividade_economica','',array('class'=>'form-control','id'=>'descricao_rais_atividade_economica'))}}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              {{ Form::label('rais_codigo_municipio', 'Código do munucípio') }}
              {{ Form::select('rais_codigo_municipio',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'rais_codigo_municipio'))}}
            </div>
            <div class="col-sm-9">
              {{ Form::label('descricao_rais_codigo_municipio', '&nbsp;') }}
              {{Form::text('descricao_rais_codigo_municipio','',array('class'=>'form-control','id'=>'rais_codigo_municipio'))}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Proprietários</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              {{ Form::label('rais_quantidade_proprietarios', 'Quantidade de proprietários') }}
              {{Form::text('rais_quantidade_proprietarios','',array('class'=>'form-control','id'=>'rais_quantidade_proprietarios'))}}
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

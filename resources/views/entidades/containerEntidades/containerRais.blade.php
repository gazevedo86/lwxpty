
@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/rais", 'method'=>'post')) }}

<div class="row">
  <div class="col-md-4">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Rais</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              {{ Form::label('fk_atividade_economica', 'Atividade econômica') }}
              {{Form::select('fk_atividade_economica',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fk_atividade_economica'))}}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              {{ Form::label('fk_cidades', 'Código do munucípio') }}
              {{ Form::select('fk_cidades',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fk_cidades'))}}
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
              {{ Form::text('qtd_proprietarios','',array('class'=>'touchspin1','id'=>'qtd_proprietarios')) }}

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

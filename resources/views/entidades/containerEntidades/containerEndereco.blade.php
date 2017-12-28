@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id/area/endereco", 'method'=>'post')) }}


<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Endereço</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              {{ Form::label('endereco_cep', 'CEP') }}
              {{Form::text('endereco_cep',(isset($pessoa->cep)? $pessoa->cep : ''),array('class'=>'form-control','id'=>'endereco_cep','placeholder'=>'CEP'))}}
            </div>
            <div class="col-sm-3">
              {{ Form::label('endereco_logradouro', 'Logradouro') }}
              {{Form::text('endereco_logradouro',(isset($pessoa->logradouro)?$pessoa->logradouro:''),array('class'=>'form-control','id'=>'endereco_logradouro','placeholder'=>'Logradouro'))}}
            </div>
            <div class="col-sm-3">
              {{ Form::label('endereco_numero', 'Nº') }}
              {{Form::text('endereco_numero',(isset($pessoa->numero_endereco)?$pessoa->numero_endereco:''),array('class'=>'form-control','id'=>'endereco_numero','placeholder'=>'Nº'))}}
            </div>
            <div class="col-sm-3">
              {{ Form::label('endereco_complemento', 'Complemento') }}
              {{Form::text('endereco_complemento',(isset($pessoa->complemento)?$pessoa->complemento:''),array('class'=>'form-control','id'=>'endereco_complemento','placeholder'=>'Complemento'))}}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4">
              {{ Form::label('endereco_bairro', 'Complemento') }}
              {{Form::text('endereco_bairro',(isset($pessoa->bairro)?$pessoa->bairro:''),array('class'=>'form-control','id'=>'endereco_bairro','placeholder'=>'Bairro'))}}
            </div>
            <div class="col-sm-4">
              {{ Form::label('endereco_cidade', 'Cidade') }}
              {{Form::select('endereco_cidade',array('1'=>'cidades'),null,array('class'=>'select2_demo_1 form-control','id'=>'endereco_cidade'))}}
            </div>
            <div class="col-sm-4">
              {{ Form::label('endereco_uf', 'UF') }}
              {{Form::select('endereco_uf',array('1'=>'estados'),null,array('class'=>'select2_demo_1 form-control','id'=>'endereco_uf'))}}
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

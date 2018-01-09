@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/endereco", 'method'=>'post')) }}


<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Endereço</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              {{ Form::label('endereco_cep', 'CEP') }}
              {{Form::text('endereco_cep',(isset($entidade->endereco_cep)? $entidade->endereco_cep : ''),array('class'=>'form-control','id'=>'endereco_cep','placeholder'=>'CEP'))}}
            </div>
            <div class="col-md-3">
              {{ Form::label('endereco_logradouro', 'Logradouro') }}
              {{Form::text('endereco_logradouro',(isset($entidade->endereco_logradouro)?$entidade->endereco_logradouro:''),array('class'=>'form-control','id'=>'endereco_logradouro','placeholder'=>'Logradouro'))}}
            </div>
            <div class="col-md-3">
              {{ Form::label('endereco_numero', 'Nº') }}
              {{Form::text('endereco_numero',(isset($entidade->endereco_numero)?$entidade->endereco_numero:''),array('class'=>'form-control','id'=>'endereco_numero','placeholder'=>'Nº'))}}
            </div>
            <div class="col-md-3">
              {{ Form::label('endereco_complemento', 'Complemento') }}
              {{Form::text('endereco_complemento',(isset($entidade->endereco_complemento)?$entidade->endereco_complemento:''),array('class'=>'form-control','id'=>'endereco_complemento','placeholder'=>'Complemento'))}}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">

            <div class="col-md-4">
              {{ Form::label('endereco_bairro', 'Complemento') }}
              {{Form::text('endereco_bairro',(isset($entidade->endereco_bairro)?$entidade->endereco_bairro:''),array('class'=>'form-control','id'=>'endereco_bairro','placeholder'=>'Bairro'))}}
            </div>
            <div class="col-md-4">
              {{ Form::label('fk_uf', 'UF') }}
              {{Form::select('fk_uf',$listaEstados,(isset($entidade->fk_uf)?$entidade->fk_uf:null),array('class'=>'select2_demo_1 form-control','id'=>'fk_uf'))}}
            </div>
            <div class="col-md-4">
              {{ Form::label('fk_cidade', 'Cidade') }}
              {{Form::select('fk_cidade',array('1'=>'1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fk_cidade'))}}
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

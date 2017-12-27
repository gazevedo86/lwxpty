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
              <label  for="cep">CEP<span class="text-danger">*</span></label>
              {{Form::text('cep',(isset($pessoa->cep)? $pessoa->cep : ''),array('class'=>'form-control','id'=>'cep','placeholder'=>'CEP'))}}
            </div>
            <div class="col-sm-3">
              <label  for="logradouro">Logradouro<span class="text-danger">*</span></label>
              {{Form::text('logradouro',(isset($pessoa->logradouro)?$pessoa->logradouro:''),array('class'=>'form-control','id'=>'logradouro','placeholder'=>'Logradouro'))}}
            </div>
            <div class="col-sm-3">
              <label  for="numero_endereco">Nº <span class="text-danger">*</span></label>
              {{Form::text('numero_endereco',(isset($pessoa->numero_endereco)?$pessoa->numero_endereco:''),array('class'=>'form-control','id'=>'numero_endereco','placeholder'=>'Nº'))}}
            </div>
            <div class="col-sm-3">
              <label  for="complemento">Comp.</label>
              {{Form::text('complemento',(isset($pessoa->complemento)?$pessoa->complemento:''),array('class'=>'form-control','id'=>'complemento','placeholder'=>'Complemento'))}}
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4">
              <label  for="bairro">Bairro <span class="text-danger">*</span></label>
              {{Form::text('bairro',(isset($pessoa->bairro)?$pessoa->bairro:''),array('class'=>'form-control','id'=>'bairro','placeholder'=>'Bairro'))}}
            </div>
            <div class="col-sm-4">
              <label  for="cidade">Cidade <span class="text-danger">*</span></label>
              {{Form::text('cidade',(isset($pessoa->cidade)?$pessoa->cidade:''),array('class'=>'form-control','id'=>'cidade','placeholder'=>'cidade'))}}

            </div>
            <div class="col-sm-4">
              <label  for="uf">Estado <span class="text-danger">*</span></label>
              {{Form::text('uf',(isset($pessoa->uf)?$pessoa->uf:''),array('class'=>'form-control','id'=>'uf','placeholder'=>'uf'))}}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
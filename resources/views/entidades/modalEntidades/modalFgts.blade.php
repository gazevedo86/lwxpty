<div class="modal inmodal" id="modalFgts" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content animated fadeIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <i class="fa fa-clock-o modal-icon"></i>
        <h4 class="modal-title">FGTS</h4>
        <small>Informe os dados abaixo</small>
      </div>
      {{Form::open(array('url'=>'cadNovaEntidade', 'name'=>'form','class'=>'form-horizontal','method'=>'post'))}}
      <div class="modal-body">
        <div class="form-group">
          {{ Form::label('codigo_entidade','Código') }}
          {{ Form::number('codigo_entidade','',array('class'=>'form-control','placeholder'=>'Entidade','id'=>'codigo_entidade')) }}
        </div>
        <div class="form-group">
          {{ Form::label('nome_entidade','Entidade') }}
          {{ Form::text('nome_entidade','',array('class'=>'form-control','placeholder'=>'Entidade','id'=>'nome_entidade')) }}
        </div>
        <div class="form-group">
          {{ Form::label('tipo','Tipo') }}
          {{ Form::select('tipo',array('1'=>'CNPJ','2'=>'CEI','3'=>'CPF'),'',array('class'=>'select2_demo_1 form-control','nome_entidade')) }}
        </div>
        <div class="form-group">
          {{ Form::label('numero','Número') }}
          {{ Form::text('numero','',array('class'=>'form-control','placeholder'=>'numero','id'=>'numero')) }}


        </div>
      </div>
      <div class="modal-footer">
        {{Form::button('Fechar',array('class'=>'btn btn-info','name'=>'fechar','data-dismiss'=>"modal" ))}}
        {{Form::submit('Inserir',array('class'=>'btn btn-primary','name'=>'salvar'))}}
      </div>
      {{Form::close()}}
    </div>
  </div>
</div>

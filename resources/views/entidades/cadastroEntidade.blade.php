@extends('layouts.app')

@section('title', 'Main page')

@section('content')
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Entidades <small>Busca</small></h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
          <a class="close-link">
            <i class="fa fa-times"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        {{Form::open(array('url'=>'cadEntidade', 'name'=>'form','class'=>'form-horizontal'))}}

        <div class="form-group">
          <label class="col-sm-2 control-label">Busca por Entidades</label>
          <div class="col-sm-8">
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                {{Form::submit('Buscar',array('class'=>'btn btn-primary','name'=>'salvar'))}}
                {{Form::button('Inserir',array('class'=>'btn btn-info','name'=>'inserir','data-target'=>"#myModal4", 'data-toggle'=>"modal" ))}}
              </span>
            </div>
          </div>
        </div>
        {{Form::close()}}
      </div>
    </div>
  </div>

  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
      <div class="col-lg-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
            <h5>Hover Table  </h5>
            <div class="ibox-tools">
              <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
              </a>
              <a class="close-link">
                <i class="fa fa-times"></i>
              </a>
            </div>
          </div>
          <div class="ibox-content">
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Data</th>
                  <th>User</th>
                  <th>Value</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($retornaEntidade as $entidade)
                  <tr>
                    <td>{{$entidade->id}}</td>
                    <td>{{$entidade->codigo_entidade}}</td>
                    <td>{{ $entidade->nome_entidade }}</td>
                    <td class="text-navy">
                      <a href="{{ url("/adminEntidade/{$entidade->id}") }}"> <button class="btn btn-primary dim btn-sm"  type="button"><i class="fa fa-check"></i></button> </a>
                      <button class="btn btn-danger dim btn-sm" type="button"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content animated fadeIn">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <i class="fa fa-clock-o modal-icon"></i>
          <h4 class="modal-title">Inserir nova entidade</h4>
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

  @push('scripts')
    <script>
    $(".select2_demo_2").select2();
  </script>

@endpush

@endsection

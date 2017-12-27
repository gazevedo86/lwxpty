@extends('layouts.app')

@section('title', 'Main page')

@section('content')

  <div class="row">
  <div class="col-lg-12">

      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>Menu</h5>
              <div class="ibox-tools">
                  <a class="collapse-link">
                      <i class="fa fa-chevron-up"></i>
                  </a>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-wrench"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                      <li><a href="#">Config option 1</a>
                      </li>
                      <li><a href="#">Config option 2</a>
                      </li>
                  </ul>
                  <a class="close-link">
                      <i class="fa fa-times"></i>
                  </a>
              </div>
          </div>
          <div class="ibox-content">

            <div class="row ">
              <div class="col-md-12">

                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerAssinaturas" data-toggle="container">ASSINATURAS</button>
                </div>

                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerCalculo" data-toggle="container">CALCULOS</button>
                </div>

                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block  btn-info" data-target="#containerEndereco" data-toggle="container">ENDEREÇOS</button>
                </div>

                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerFerias" data-toggle="container">FÉRIAS</button>
                </div>

              </div>
            </div>
            <div class="row ">
              <div class="col-md-12">
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerFgts" data-toggle="container">FGTS</button>
                </div>
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerFolhaComplementar" data-toggle="container">FOLHA COMPLEMENTAR</button>
                </div>
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerLicencaPremium" data-toggle="container">LICENÇA PREMIUM</button>
                </div>
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerMensagens" data-toggle="container">MENSAGENS</button>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-md-12">
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerOpcoesGerais" data-toggle="container">OPÇÕES GERAIS</button>
                </div>
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerPrevidencia" data-toggle="container">PREVIDÊNCIA</button>
                </div>
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerRais" data-toggle="container">RAIS</button>
                </div>
                <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block btn-info" data-target="#container13Salario" data-toggle="container">13º SALÁRIO</button>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-md-12">
                <div class="form-group col-md-4 col-md-offset-4">
                  <button type="button" class="btn btn-block btn-info" data-target="#containerOutros" data-toggle="container">OUTROS</button>
                </div>


              </div>
            </div>



          </div>
      </div>
    </div>
  </div>







  {{ Form::open(array('url' => "/insereConfiguracao/{id}", 'method'=>'post')) }}
  <div class="row ">
      <div id="container13salario" style="display:none">
        @include('entidades.containerEntidades.container13Salario')
      </div>
      <div id="containerAssinatura" style="display:none">
        @include('entidades.containerEntidades.containerAssinatura')
      </div>
      <div id="containerCalculo" style="display:none">
        @include('entidades.containerEntidades.containerCalculo')
      </div>
      <div id="containerEndereco" style="display:none">
        @include('entidades.containerEntidades.containerEndereco')
      </div>
      <div id="containerFerias" style="display:none">
        @include('entidades.containerEntidades.containerFerias')
      </div>
      <div id="containerFgts" style="display:none">
        @include('entidades.containerEntidades.containerFgts')
      </div>
      <div id="containerFolhaComplementar" style="display:none">
        @include('entidades.containerEntidades.containerFolhaComplementar')
      </div>
      <div id="containerLicencaPremium" style="display:none">
        @include('entidades.containerEntidades.containerLicencaPremium')
      </div>
      <div id="containerMensagens" style="display:none">
        @include('entidades.containerEntidades.containerMensagens')
      </div>
      <div id="containerOpcoesGerais" style="display:none">
        @include('entidades.containerEntidades.containerOpcoesGerais')
      </div>
      <div id="containerPrevidencia" style="display:none">
        @include('entidades.containerEntidades.containerPrevidencia')
      </div>
      <div id="containerRais" style="display:none">
        @include('entidades.containerEntidades.containerRais')
      </div>
      <div id="containerOutros">
        @include('entidades.containerEntidades.containerOutros')
      </div>
      <div class="hr-line-dashed"></div>
        <div class="ibox-content">
        <button class="btn btn-white" type="submit">Cancel</button>
        {{Form::submit('Salvar',array('class'=>'btn btn-primary','name'=>'salvar'))}}
      </div>

      {{ Form::close() }}

  </div>

@endsection

@extends('layouts.app')

@section('title', 'Main page')

@section('content')
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

          <div id="container13salario">
            @include('entidades.containerEntidades.container13Salario')
          </div>
          <div id="containerAssinatura">
            @include('entidades.containerEntidades.containerAssinatura')
          </div>
          <div id="containerCalculo">
            @include('entidades.containerEntidades.containerCalculo')
          </div>
          <div id="containerEndereco">
            @include('entidades.containerEntidades.containerEndereco')
          </div>
          <div id="containerFerias">
            @include('entidades.containerEntidades.containerFerias')
          </div>
          <div id="containerFgts">
            @include('entidades.containerEntidades.containerFgts')
          </div>
          <div id="containerFolhaComplementar">
            @include('entidades.containerEntidades.containerFolhaComplementar')
          </div>
          <div id="containerLicencaPremium">
            @include('entidades.containerEntidades.containerLicencaPremium')
          </div>
          <div id="containerMensagens">
            @include('entidades.containerEntidades.containerMensagens')
          </div>
          <div id="containerOpcoesGerais">
            @include('entidades.containerEntidades.containerOpcoesGerais')
          </div>
          <div id="containerPrevidencia">
            @include('entidades.containerEntidades.containerPrevidencia')
          </div>
          <div id="containerRais">
            @include('entidades.containerEntidades.containerRais')
          </div>


  @endsection

@extends('layouts.app')

@section('title', 'Main page')

@section('content')
  <div class="row ">
    <div class="col-md-12">

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalAssinaturas" data-toggle="modal">ASSINATURAS</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalCalculo" data-toggle="modal">CALCULOS</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block  btn-info" data-target="#modalEndereco" data-toggle="modal">ENDEREÇOS</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalFerias" data-toggle="modal">FÉRIAS</button>
      </div>

    </div>
  </div>
  <div class="row ">
    <div class="col-md-12">

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalFgts" data-toggle="modal">FGTS</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalFolhaComplementar" data-toggle="modal">FOLHA COMPLEMENTAR</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalLicencaPremium" data-toggle="modal">LICENÇA PREMIUM</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalMensagens" data-toggle="modal">MENSAGENS</button>
      </div>

    </div>
  </div>
  <div class="row ">
    <div class="col-md-12">
      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalOpcoesGerais" data-toggle="modal">OPÇÕES GERAIS</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalPrevidencia" data-toggle="modal">PREVIDÊNCIA</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modalRais" data-toggle="modal">RAIS</button>
      </div>

      <div class="form-group col-md-3">
        <button type="button" class="btn btn-block btn-info" data-target="#modal13Salario" data-toggle="modal">13º SALÁRIO</button>
      </div>
    </div>
  </div>
@include('entidades.modalEntidades.modal13Salario')
@include('entidades.modalEntidades.modalAssinatura')
@include('entidades.modalEntidades.modalCalculo')
@include('entidades.modalEntidades.modalEndereco')
@include('entidades.modalEntidades.modalFerias')
@include('entidades.modalEntidades.modalFgts')
@include('entidades.modalEntidades.modalFolhaComplementar')
@include('entidades.modalEntidades.modalLicencaPremium')
@include('entidades.modalEntidades.modalMensagens')
@include('entidades.modalEntidades.modalOpcoesGerais')
@include('entidades.modalEntidades.modalPrevidencia')
@include('entidades.modalEntidades.modalRais')


@endsection

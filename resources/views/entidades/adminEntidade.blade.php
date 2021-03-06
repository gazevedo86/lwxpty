@extends('layouts.app')

@section('title', 'Main page')

@section('content')
  @php
  echo '<pre>';
  print_r($listaEstados);
  echo '</pre>';
  @endphp
  @foreach ($entidades as $entidade)

  @endforeach

  <div class="row">
    <div class="col-lg-12">

      <div class="ibox float-e-margins" id="menuConfiguracoes">
        <div class="ibox-title">
          <button type="button" style="display:none" class="btn btn-sm btn-info" id="menuVoltar" data-toggle="container">VOLTAR</button>


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
              {{-- <div class="form-group col-md-3">
                <button type="button" class="btn btn-block btn-info" data-target="#containerFgts" data-toggle="container">FGTS</button>
              </div> --}}
              <div class="form-group col-md-3">
                <button type="button" class="btn btn-block btn-info" data-target="#containerOutrasInformacoes" data-toggle="container">OUTRAS INFORMAÇÕES</button>
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
                <button type="button" class="btn btn-block btn-info" data-target="#container13salario" data-toggle="container">13º SALÁRIO</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" id="conteinerConfiguracoes">
    <div id="container13salario" style="display:none">
      @include('entidades.containerEntidades.container13Salario')
    </div>
    <div id="containerAssinaturas" style="display:none">
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
    {{-- <div id="containerFgts" style="display:none">
      @include('entidades.containerEntidades.containerFgts')
    </div> --}}
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
    <div id="containerPrevidencia" style="display:none" >
      @include('entidades.containerEntidades.containerPrevidencia')
    </div>
    <div id="containerRais" style="display:none">
      @include('entidades.containerEntidades.containerRais')
    </div>
    <div id="containerOutrasInformacoes" style="display:none">
      @include('entidades.containerEntidades.containerOutros')
    </div>


  </div>

@endsection

@push('scripts')
  <script>

  $(function(){
    $('#fk_uf').change(function(){
      var idEstado = $(this).val();
      $.ajax({
            type: 'GET',
            url: '/ajaxListaMunicipio',
            data: {'id':idEstado},
            success: function (data) {
                alert(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });
  });
  // $('#fk_uf').change(function(){
  //   alert('asdas');
  //   var idEstado = $(this).val();
  //   //var data = 'idEstado='+idEstado;
  //
  //   $.ajax({
  //     method: 'POST', // Type of response and matches what we said in the route
  //     url: '/ajaxListaMunicipio', // This is the url we gave in the route
  //     data: {'id' : idEstado } // a JSON object to send back
  //     success: function(response){ // What to do if we succeed
  //       alert(response);
  //     }
  //
  //   });
  // });

</script>
@endpush

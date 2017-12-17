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
        <form method="get" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">Busca por paciente</label>
            <div class="col-sm-8">
              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn"> <button type="button" class="btn btn-primary">Buscar</button>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal4">Inserir</button> </span>
                </div>
              </div>
            </div>
          </form>
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
                  <tr>
                    <td>1</td>
                    <td><span class="pie">0.52,1.041</span></td>
                    <td>Samantha</td>
                    <td class="text-navy"> <button class="btn btn-primary dim btn-sm"  type="button"><i class="fa fa-check"></i></button><button class="btn btn-danger dim btn-sm" type="button"><i class="fa fa-trash"></i></button></td>
                  </tr><tr>
                    <td>1</td>
                    <td><span class="pie">0.52,1.041</span></td>
                    <td>Samantha</td>
                    <td class="text-navy"> <button class="btn btn-primary dim btn-sm"  type="button"><i class="fa fa-check"></i></button><button class="btn btn-danger dim btn-sm" type="button"><i class="fa fa-trash"></i></button></td>
                  </tr><tr>
                    <td>1</td>
                    <td><span class="pie">0.52,1.041</span></td>
                    <td>Samantha</td>
                    <td class="text-navy"> <button class="btn btn-primary dim btn-sm"  type="button"><i class="fa fa-check"></i></button><button class="btn btn-danger dim btn-sm" type="button"><i class="fa fa-trash"></i></button></td>
                  </tr>
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
          <form>
            <div class="modal-body">
              <div class="form-group">
                <label for="nome_entidade">Nome da entidade</label>
                <input type="text" class="form-control" placeholder="Entidade">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  @endsection

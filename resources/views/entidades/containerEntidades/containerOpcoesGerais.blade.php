<div class="row" >
  <div class="col-lg-7">

    <!-- INICIO DO BLOCO DE CONFIGURAÇÃO 1   -->
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Evento teto para descontos de convenios (base de calculo)</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-sm-3">
            {{ Form::select('opcoes_gerais_evento_teto_desconto_convenio',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'opcoes_gerais_evento_teto_desconto_convenio'))}}
          </div>
          <div class="col-sm-9">
            {{Form::text('opcoes_gerais_evento_teto_desconto_convenio','',array('class'=>'form-control','id'=>'opcoes_gerais_evento_teto_desconto_convenio'))}}
          </div>
        </div>
      </div>
    </div>
    <!-- FIM DO BLOCO DE CONFIGURAÇÃO 1   -->
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Exclusao de convenio - Ordem</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-10 ">
                Valor
              </div>
              <div class="col-md-2">
                <div class="switch">
                  <div class="onoffswitch">
                    {{ Form::checkbox('opcoes_gerais_exclusao_de_convenio_valor','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_exclusao_de_convenio_valor')) }}
                    <label class="onoffswitch-label" for="opcoes_gerais_exclusao_de_convenio_valor">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="hr-line-dashed"></div>

          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-10 ">
                Data de contrato
              </div>
              <div class="col-md-2">
                <div class="switch">
                  <div class="onoffswitch">
                    {{ Form::checkbox('opcoes_gerais_exclusao_de_convenio_data_contrato','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_exclusao_de_convenio_data_contrato')) }}
                    <label class="onoffswitch-label" for="opcoes_gerais_exclusao_de_convenio_data_contrato">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="hr-line-dashed"></div>

          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-10 ">
                Evento
              </div>
              <div class="col-md-2">
                <div class="switch">
                  <div class="onoffswitch">
                    {{ Form::checkbox('opcoes_gerais_exclusao_de_convenio_evento','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_exclusao_de_convenio_evento')) }}
                    <label class="onoffswitch-label" for="opcoes_gerais_exclusao_de_convenio_evento">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="hr-line-dashed"></div>

          </div>
        </div>
      </div>
    </div>
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>tipo de exclusão</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-10">
            {{ Form::label('opcoes_gerais_tipo_exclusao','Tipo de exclusão') }}
            {{Form::select('opcoes_gerais_tipo_exclusao',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'opcoes_gerais_tipo_exclusao'))}}
          </div>
        </div>
      </div>
    </div>

    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Ordem do evento</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-6">
            {{ Form::label('opcoes_gerais_ordem_evento','Ordem evento') }}
            {{ Form::text('opcoes_gerais_ordem_evento','',array('class'=>'form-control','id'=>'opcoes_gerais_ordem_evento')) }}
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="col-lg-5">
    <div class="ibox float-e-margins">
      <div class="ibox-title">

        <h5>Opções</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-md-10 ">
            Controle diario de horas extras?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_controle_horas_extras','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_controle_horas_extras')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_controle_horas_extras">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Renovar opção de adiantamento 13º em janeiro pelo vinculo?
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_renovar_adiantamento_13_janeiro','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_renovar_adiantamento_13_janeiro')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_renovar_adiantamento_13_janeiro">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            (Rateio) Informar unidade orçamentaria alternativa
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_rateio_informar_unidade_orcamentaria','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_rateio_informar_unidade_orcamentaria')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_rateio_informar_unidade_orcamentaria">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Controlar vagas de acordo com o cargo
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_controlar_vagas_cargo','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_controlar_vagas_cargo')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_controlar_vagas_cargo">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Inserir vários PDF de admissão
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_inserir_varios_pdf','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_inserir_varios_pdf')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_inserir_varios_pdf">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Relacionar ativadade com o cargo
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_relacionar_atividade_cargo','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_relacionar_atividade_cargo')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_relacionar_atividade_cargo">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Filtrar salários do plano de cargos
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_filtrar_salarios_plano_cargos','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_filtrar_salarios_plano_cargos')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_filtrar_salarios_plano_cargos">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Expandir capacidade do organograma
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_expandir_capacidade_organograma','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_expandir_capacidade_organograma')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_expandir_capacidade_organograma">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="row">
          <div class="col-md-10 ">
            Grade substituição automática
          </div>
          <div class="col-md-2">
            <div class="switch">
              <div class="onoffswitch">
                {{ Form::checkbox('opcoes_gerais_grade_substituicao_automatica','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_grade_substituicao_automatica')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_grade_substituicao_automatica">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="hr-line-dashed"></div>
      </div>
    </div>
  </div>

</div>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Evento para importação de emprestimos FEBRABAN</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-sm-3">
            {{Form::select('opcoes_gerais_febraban',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'rais_atividade_economica'))}}
          </div>
          <div class="col-sm-9">
            {{Form::text('opcoes_gerais_descricao_febraban','',array('class'=>'form-control','id'=>'descricao_rais_atividade_economica'))}}
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

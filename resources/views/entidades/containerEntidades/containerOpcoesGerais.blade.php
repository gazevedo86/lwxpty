@foreach ($entidades as $entidade)
@endforeach

{{ Form::open(array('url' => "/insereConfiguracao/$entidade->id_entidade/area/opcoesGerais", 'method'=>'post')) }}
<div class="row" >
  <div class="col-md-7">
    <!-- INICIO DO BLOCO DE CONFIGURAÇÃO 1   -->
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Evento teto para descontos de convenios (base de calculo)</h5>
      </div>
      <div class="ibox-content">
        <div class="row">
          <div class="col-sm-3">
            {{ Form::select('opcoes_gerais_evento_teto',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'opcoes_gerais_evento_teto'))}}
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
        <fieldset>
            <p>Inline radios</p>
            <div class="radio radio-info radio-inline">
                {{ Form::radio('opcoes_gerais_ordem','Valor', array('id'=>'opcoes_gerais_ordem1')) }}
                {{ Form::label('opcoes_gerais_ordem1','Valor') }}
            </div>
            <div class="radio radio-info radio-inline">
              {{ Form::radio('opcoes_gerais_ordem','data_contrato', array('id'=>'opcoes_gerais_ordem2')) }}
              {{ Form::label('opcoes_gerais_ordem2','Data do contrato') }}
            </div>
            <div class="radio radio-info radio-inline">
              {{ Form::radio('opcoes_gerais_ordem','evento', array('id'=>'opcoes_gerais_ordem3')) }}
              {{ Form::label('opcoes_gerais_ordem3','Evento') }}
            </div>
        </fieldset>
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
  <div class="col-md-5">
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
                {{ Form::checkbox('opcoes_gerais_controle_diario','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_controle_diario')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_controle_diario">
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
                {{ Form::checkbox('opcoes_gerais_renovar_13','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_renovar_13')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_renovar_13">
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
                {{ Form::checkbox('opcoes_gerais_informar_unidade_orcamentaria','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_informar_unidade_orcamentaria')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_informar_unidade_orcamentaria">
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
                {{ Form::checkbox('opcoes_gerais_controlar_vagas','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_controlar_vagas')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_controlar_vagas">
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
                {{ Form::checkbox('opcoes_gerais_inserir_pdf','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_inserir_pdf')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_inserir_pdf">
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
                {{ Form::checkbox('opcoes_gerais_relacionar_atividade','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_relacionar_atividade')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_relacionar_atividade">
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
                {{ Form::checkbox('opcoes_gerais_filtrar_salarios','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_filtrar_salarios')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_filtrar_salarios">
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
                {{ Form::checkbox('opcoes_gerais_expandir_capacidade','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_expandir_capacidade')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_expandir_capacidade">
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
                {{ Form::checkbox('opcoes_gerais_grade_automatica','',true,array('class'=>'onoffswitch-checkbox','id'=>'opcoes_gerais_grade_automatica')) }}
                <label class="onoffswitch-label" for="opcoes_gerais_grade_automatica">
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
            {{Form::select('fk_febraban_eventos',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fk_febraban_eventos'))}}
          </div>
        </div>
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
          <div class="col-md-2">
            {{ Form::label('opcoes_gerais_faltas_injustificadas','Faltas injustificadas') }}
            {{ Form::text('opcoes_gerais_faltas_injustificadas','',array('class'=>'touchspin1','id'=>'opcoes_gerais_faltas_injustificadas')) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('opcoes_gerais_faltas_justificadas','Faltas justificadas') }}
            {{ Form::text('opcoes_gerais_faltas_justificadas','',array('class'=>'touchspin1','id'=>'opcoes_gerais_faltas_justificadas')) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('opcoes_gerais_faltas_abonadas','Faltas abonadas') }}
            {{ Form::text('opcoes_gerais_faltas_abonadas','',array('class'=>'touchspin1','id'=>'opcoes_gerais_faltas_abonadas')) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('opcoes_gerais_suspensao','Suspensão') }}
            {{ Form::text('opcoes_gerais_suspensao','',array('class'=>'touchspin1','id'=>'opcoes_gerais_suspensao')) }}
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

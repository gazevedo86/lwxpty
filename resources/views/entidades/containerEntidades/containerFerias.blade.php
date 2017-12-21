<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>Tipo de pagamento de férias</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-md-3 ">
              {{ Form::label('tipo_pagamento_ferias_recibo_ferias','Recibo de férias') }}
            </div>
            <div class="col-md-1">
              <div class="switch">
                <div class="onoffswitch">
                  {{ Form::checkbox('tipo_pagamento_ferias_recibo_ferias','',true,array('class'=>'onoffswitch-checkbox','id'=>'tipo_pagamento_ferias_recibo_ferias')) }}
                  <label class="onoffswitch-label" for="tipo_pagamento_ferias_recibo_ferias">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              {{ Form::label('tipo_pagamento_ferias_folha_mensal_terco_apenas','Folha mensal 1/3 apenas') }}
            </div>
            <div class="col-md-1">
              <div class="switch">
                <div class="onoffswitch">
                  {{ Form::checkbox('tipo_pagamento_ferias_folha_mensal_terco_apenas','',true,array('class'=>'onoffswitch-checkbox','id'=>'tipo_pagamento_ferias_folha_mensal_terco_apenas')) }}
                  <label class="onoffswitch-label" for="tipo_pagamento_ferias_folha_mensal_terco_apenas">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-3 ">
              {{ Form::label('tipo_pagamento_ferias_folha_mensal_adiantamento','Folha mensal c/ adiantamento') }}
            </div>
            <div class="col-md-1">
              <div class="switch">
                <div class="onoffswitch">
                  {{ Form::checkbox('tipo_pagamento_ferias_folha_mensal_adiantamento','',true,array('class'=>'onoffswitch-checkbox','id'=>'tipo_pagamento_ferias_folha_mensal_adiantamento')) }}
                  <label class="onoffswitch-label" for="tipo_pagamento_ferias_folha_mensal_adiantamento">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

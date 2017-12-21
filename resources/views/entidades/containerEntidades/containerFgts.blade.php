<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="ibox-title">
        <h5>FGTS</h5>
      </div>
      <div class="ibox-content">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              {{ Form::label('fgts_codigo_pagamento_gps', 'Código de pagamento GPS') }}
              {{Form::select('fgts_codigo_pagamento_gps',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fgts_codigo_pagamento_gps'))}}
            </div>

            <div class="col-sm-9">
              {{ Form::label('descricao_fgts_codigo_pagamento_gps', '&nbsp;') }}
              {{Form::text('descricao_fgts_codigo_pagamento_gps','',array('class'=>'form-control','id'=>'descricao_fgts_codigo_pagamento_gps'))}}
            </div>

          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-sm-3">
              {{ Form::label('fgts_codigo_recolhimento_sefip', 'Código de recolhimento SEFIP') }}
              {{Form::select('fgts_codigo_recolhimento_sefip',array('1'=>'codigo1'),null,array('class'=>'select2_demo_1 form-control','id'=>'fgts_codigo_recolhimento_sefip'))}}
            </div>

            <div class="col-sm-9">
              {{ Form::label('descricao_fgts_codigo_recolhimento_sefip', '&nbsp;') }}
              {{Form::text('descricao_fgts_codigo_recolhimento_sefip','',array('class'=>'form-control','id'=>'descricao_fgts_codigo_recolhimento_sefip'))}}
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

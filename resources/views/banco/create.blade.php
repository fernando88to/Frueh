@extends("layouts.base")

@section("titulo","Bancos")

@section("conteudo")

    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Banco - Cadastro</h3>
            </div>

            <div class="widget-content">
                {!! Form::open(array('action' => 'BancoController@store')) !!}

                <!--<form class="form-horizontal" id="edit-profile"
                       method="POST">-->

                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="control-group">
                        <label for="firstname" class="control-label">Nome</label>
                        <div class="controls">
                            {!! Form::text('nome',null,['class'=>'span6']) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="ativo" class="control-label">Ativo</label>
                        <div class="controls">
                            <input type="checkbox" value="0" id="ativo" name="ativo" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="endereco" class="control-label">Endereço</label>
                        <div class="controls">
                            <input type="text" value="" id="endereco" name="endereco" class="span6">
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="codigo_febraban" class="control-label">Código Febrabam</label>
                        <div class="controls">
                            <input type="text" value="" id="codigo_febraban" name="codigo_febraban" class="span6">
                        </div>
                    </div>


                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit" name="salvar_btn">Salvar</button>
                        <button class="btn" type="submit" name="cancelar_btn">Cancel</button>
                    </div>
                    {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
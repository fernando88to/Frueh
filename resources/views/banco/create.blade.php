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
                <form class="form-horizontal" id="edit-profile"
                      action="{{action("BancoController@store")}}" method="POST">

                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="control-group">
                        <label for="firstname" class="control-label">Nome</label>
                        <div class="controls">
                            <input type="text" value="{{$bancoInstance->getNome()}}" id="nome"
                                   name="nome" class="span6">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="ativo" class="control-label">Ativo</label>
                        <div class="controls">
                            <input type="checkbox" value="" id="ativo" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="endereco" class="control-label">Endereço</label>
                        <div class="controls">
                            <input type="text" value="" id="endereco" class="span6">
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="codigoFebrabam" class="control-label">Código Febrabam</label>
                        <div class="controls">
                            <input type="text" value="" id="codigoFebrabam" class="span6">
                        </div>
                    </div>


                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit" name="salvar_btn">Salvar</button>
                        <button class="btn" type="submit" name="cancelar_btn">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
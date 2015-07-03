@extends("layouts.base")

@section("titulo","Bancos")

@section("conteudo")

    <div class="span12">
        <div class="widget">
            <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Your Account</h3>
            </div>

            <div class="widget-content">
                <form class="form-horizontal" id="edit-profile">

                    <div class="control-group">
                        <label for="firstname" class="control-label">Nome</label>
                        <div class="controls">
                            <input type="text" value="" id="nome" class="span6">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="ativo" class="control-label">Ativo</label>
                        <div class="controls">
                            <input type="checkbox" value="" id="ativo" class="span6">
                        </div>
                    </div>


                    <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
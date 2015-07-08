@extends("layouts.base")

@section("titulo","Bancos")

@section("conteudo")

    <div class="span12">
        <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Banco  - Lista</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th> Nome </th>
                        <th> Situação</th>
                        <th class="td-actions"> </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bancosList as $banco)
                        <tr>
                            <td> {{$banco->getNome()}}</td>
                            <td> {{$banco->isAtivo() ==true ? 'Ativado' : 'Desativado'}} </td>
                            <td class="td-actions">
                                <a href="javascript:;" class="btn btn-small btn-success">
                                    <i class="btn-icon-only icon-ok"> </i>
                                </a>
                                <a href="javascript:;" class="btn btn-danger btn-small">
                                    <i class="btn-icon-only icon-remove"> </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>
            <!-- /widget-content -->
        </div>
    </div>
@endsection
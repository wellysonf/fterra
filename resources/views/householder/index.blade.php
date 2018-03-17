@extends('adminlte::page')

@section('title', 'Fundação Terra')

@section('content_header')
    <h1>Listagem de Chefes de família</h1>
@stop

@section('content')
    <div class="row">
        <div class="container">
            <a href="{{route('familia.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</a>
            <br>
        </div>
    </div>
    <br>
    <table class="table table-bordered" id="listagem_inicial">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Profissão</th>
                <th>Escolaridade</th>
                <th>Cidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($householders as $householder)
            <tr>
                <td>{{ $householder->nome }}</td>
                <td>{{ \Carbon\Carbon::parse($householder->nascimento)->format('d/m/Y') }}</td>
                <td>{{ $householder->profissao }}</td>
                <td>{{ $householder->escolaridade }}</td>
                <td>{{ $householder->cidade }}</td>
                <td><a href="{{ route('familia.show', $householder) }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('js')
<script>
$(document).ready( function () {
    $('#listagem_inicial').DataTable({
        language: {
            processing:     "Processando...",
            search:         "Buscar&nbsp;:",
            lengthMenu:     "Mostrando _MENU_ registros por pagina",
            info:           "Exibindo do registro _START_ até _END_ de _TOTAL_ total de registros",
            infoEmpty:      "Exibindo do registro 0 até 0 de 0 total de registros",
            infoFiltered:   "(Filtrado de _MAX_ registros totais)",
            infoPostFix:    "",
            loadingRecords: "Carregando...",
            zeroRecords:    "Nada achado - desculpe",
            emptyTable:     "Tabela ainda não preenchida",
            paginate: {
                first:      "Primeiro",
                previous:   "Anterior",
                next:       "Proximo",
                last:       "Ultimo"
            },
            aria: {
                sortAscending:  ": Ordenar de forma Crescente",
                sortDescending: ": Ordenar de forma Decrescente"
            }
        }
    });
} );
</script>
@stop
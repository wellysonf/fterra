@extends('adminlte::page')

@section('title', 'Fundação Terra')

@section('content_header')
    <h1>Listagem de Chefes de família</h1>
@stop

@section('content')
    <table id="listagem_familias"  class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Profissão</th>
                <th>Escolaridade</th>
                <th>Cidade</th>
            </tr>
        </thead>
    </table>
@stop

@section('adminlte_js')
<script>
    $(function() {
        $('#listagem_familias').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('api_datatable') !!}'
        });
    });
    </script>
@stop
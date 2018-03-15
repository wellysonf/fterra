@extends('adminlte::page')

@section('title', 'Fundação Terra')

@section('content_header')
    <h1>Listagem de Chefes de família</h1>
@stop

@section('content')
    <div class="row">
        <div class="container">
            <a href="{{route('familia.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar</a>
        </div>
    </div>
    <table class="table table-bordered">
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
                <td>{{ $householder->nascimento }}</td>
                <td>{{ $householder->profissao }}</td>
                <td>{{ $householder->escolaridade }}</td>
                <td>{{ $householder->cidade }}</td>
                <td><a href="{{ route('familia.show', $householder) }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $householders->links() }}
@stop
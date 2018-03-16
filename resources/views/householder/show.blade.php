@extends('adminlte::page')

@section('title', 'Fundação Terra')

@section('content_header')
    <h1>{{ $householder->id }} - {{ $householder->nome }}</h1>
    <h3><a href="{{route('familia.edit',$householder->id)}}" class="btn btn-warning">Editar</a></h3>
@stop

@section('content')
    
    <p><span class='titulo_campo'>Nome: </span>{{ $householder->nome }}</p>
    <p><span class='titulo_campo'>Nascimento: </span>{{ $householder->nascimento }}</p>
    <p><span class='titulo_campo'>Rg: </span>{{ $householder->rg }}</p>
    <p><span class='titulo_campo'>Cpf: </span>{{ $householder->cpf }}</p>
    <p><span class='titulo_campo'>Escolaridade: </span>{{ $householder->escolaridade }}</p>
    <p><span class='titulo_campo'>Profissao: </span>{{ $householder->profissao }}</p>
    <p><span class='titulo_campo'>Conjuge: </span>{{ $householder->conjuge }}</p>
    <p><span class='titulo_campo'>Pai: </span>{{ $householder->pai }}</p>
    <p><span class='titulo_campo'>Mae: </span>{{ $householder->mae }}</p>
    <p><span class='titulo_campo'>Endereco: </span>{{ $householder->endereco }}</p>
    <p><span class='titulo_campo'>Endereco_Num: </span>{{ $householder->endereco_num }}</p>
    <p><span class='titulo_campo'>Endereco_Complemento: </span>{{ $householder->endereco_complemento }}</p>
    <p><span class='titulo_campo'>Bairro: </span>{{ $householder->bairro }}</p>
    <p><span class='titulo_campo'>Cidade: </span>{{ $householder->cidade }}</p>
    <p><span class='titulo_campo'>Cep: </span>{{ $householder->cep }}</p>
    <p><span class='titulo_campo'>Uf: </span>{{ $householder->uf }}</p>
    <p><span class='titulo_campo'>Tel1: </span>{{ $householder->tel1 }}</p>
    <p><span class='titulo_campo'>Tel2: </span>{{ $householder->tel2 }}</p>
    <p><span class='titulo_campo'>Qtd_Moradores: </span>{{ $householder->qtd_moradores }}</p>
    <p><span class='titulo_campo'>Qtd_Criancas: </span>{{ $householder->qtd_criancas }}</p>
    <p><span class='titulo_campo'>Qtd_Estudantes: </span>{{ $householder->qtd_estudantes }}</p>
    <p><span class='titulo_campo'>Qtd_Trabalhadores: </span>{{ $householder->qtd_trabalhadores }}</p>
    <p><span class='titulo_campo'>Renda_Familiar: </span>{{ $householder->renda_familiar }}</p>
    <p><span class='titulo_campo'>Renda_Per_Capita: </span>{{ $householder->renda_per_capita }}</p>
    <p><span class='titulo_campo'>Obs: </span>{{ $householder->obs }}</p>

    <div class="row">
            <div class="container">
                <div class="col-md-8">
                    <h4>Listagem de membros da familía</h4>
                </div>
                <div class="col-md-4">
                    <a href="{{route('familia.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Adicionar Membro</a>
                </div>
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
           
        </tbody>
    </table>
@stop
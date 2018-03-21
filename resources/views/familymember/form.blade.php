@extends('adminlte::page')

@section('title', 'Fundação Terra')

@section('content_header')
    <h1>Cadastro de Membro da família</h1>
@stop

@section('content')
    @if($mode === 'create')
        <form action="{{ route('membro.store') }}" method="post" class="form-inline" id="form_chefe">
            <input type="hidden" name="householder_id" value="{{ $householder }}">
    @elseif (($mode === 'show')or($mode === 'edit'))
        <form action="{{ route('membro.update',$familymember) }}" method="post" class="form-inline" id="form_chefe">
        {{ method_field('PUT') }}
    @endif
        {{ csrf_field() }}
        <div class='form-group'><label for='nome'>Nome: </label><input type='text' class='form-control  has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}' name='nome' value='{{ $familymember->nome or old('nome') }}'></div>
        <div class='form-group'><label for='nascimento'>Data de Nascimento: </label><input type='date' class='form-control  has-feedback {{ $errors->has('nascimento') ? 'has-error' : '' }}' name='nascimento' value='{{ $familymember->nascimento or old('nascimento') }}'></div>
        <div class='form-group'><label for='cpf'>CPF: </label><input type='text' class='form-control  has-feedback {{ $errors->has('cpf') ? 'has-error' : '' }}' name='cpf' value='{{ $familymember->cpf or old('cpf') }}'></div>
        <div class='form-group'><label for='parentesco'>Parentesco </label><input type='text' class='form-control  has-feedback {{ $errors->has('parentesco') ? 'has-error' : '' }}' name='parentesco' value='{{ $familymember->parentesco or old('parentesco') }}'></div>
        <div class='form-group'><label for='profissao'>Profissão </label><input type='text' class='form-control  has-feedback {{ $errors->has('profissao') ? 'has-error' : '' }}' name='profissao' value='{{ $familymember->profissao or old('profissao') }}'></div>
        <div class="form-group"><label for="escolaridade">ESCOLARIDADE: </label>
            <select name="escolaridade" id="escolaridade" class="form-control" >
                <option value='Fundamental Incompleto' @if((old('escolaridade') == 'Fundamental Incompleto')or((isset($familymember))and($familymember->escolaridade == 'Fundamental Incompleto'))) selected   @endif>Fundamental Incompleto</option>
                <option value='Fundamental Completo' @if((old('escolaridade') == 'Fundamental Completo')or((isset($familymember))and($familymember->escolaridade == 'Fundamental Completo'))) selected   @endif>Fundamental Completo</option>
                <option value='Médio Incompleto' @if((old('escolaridade') == 'Médio Incompleto')or((isset($familymember))and($familymember->escolaridade == 'Médio Incompleto'))) selected   @endif>Médio Incompleto</option>
                <option value='Médio Completo' @if((old('escolaridade') == 'Médio Completo')or((isset($familymember))and($familymember->escolaridade == 'Médio Completo'))) selected   @endif>Médio Completo</option>
                <option value='Superior Incompleto' @if((old('escolaridade') == 'Superior Incompleto')or((isset($familymember))and($familymember->escolaridade == 'Superior Incompleto'))) selected   @endif>Superior Incompleto</option>
                <option value='Superior Completo' @if((old('escolaridade') == 'Superior Completo')or((isset($familymember))and($familymember->escolaridade == 'Superior Completo'))) selected   @endif>Superior Completo</option>
                <option value='Pós-graduação (Lato senso) Incompleto' @if((old('escolaridade') == 'Pós-graduação (Lato senso) Incompleto')or((isset($familymember))and($familymember->escolaridade == 'Pós-graduação (Lato senso) Incompleto'))) selected   @endif>Pós-graduação (Lato senso) Incompleto</option>
                <option value='Pós-graduação (Lato senso) Completo' @if((old('escolaridade') == 'Pós-graduação (Lato senso) Completo')or((isset($familymember))and($familymember->escolaridade == 'Pós-graduação (Lato senso) Completo'))) selected   @endif>Pós-graduação (Lato senso) Completo</option>
                <option value='Pós-graduação (Stricto sensu, nível mestrado) Incompleto' @if((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível mestrado) Incompleto')or((isset($familymember))and($familymember->escolaridade == 'Pós-graduação (Stricto sensu, nível mestrado) Incompleto'))) selected   @endif>Pós-graduação (Stricto sensu, nível mestrado) Incompleto</option>
                <option value='Pós-graduação (Stricto sensu, nível mestrado) Completo' @if((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível mestrado) Completo')or((isset($familymember))and($familymember->escolaridade == 'Pós-graduação (Stricto sensu, nível mestrado) Completo'))) selected   @endif>Pós-graduação (Stricto sensu, nível mestrado) Completo</option>
                <option value='Pós-graduação (Stricto sensu, nível doutor) Incompleto' @if((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível doutor) Incompleto')or((isset($familymember))and($familymember->escolaridade == 'Pós-graduação (Stricto sensu, nível doutor) Incompleto'))) selected   @endif>Pós-graduação (Stricto sensu, nível doutor) Incompleto</option>
                <option value='Pós-graduação (Stricto sensu, nível doutor) Completo' @if((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível doutor) Completo')or((isset($familymember))and($familymember->escolaridade == 'Pós-graduação (Stricto sensu, nível doutor) Completo'))) selected   @endif>Pós-graduação (Stricto sensu, nível doutor) Completo</option>
             </select>
        </div>
        <div class='form-group'><label for='renda'>Renda </label><input type='text' class='form-control  has-feedback {{ $errors->has('renda') ? 'has-error' : '' }}' name='renda' value='{{ $familymember->renda or old('renda') }}'></div>
        <br>
        <br>

    @if($mode === 'create')
        <input type="submit" value="Adicionar Membro da Familia" class="btn btn-primary">
    @elseif (($mode === 'show')or($mode === 'edit'))
        <input type="submit" value="Editar Membro da Familia" class="btn btn-primary">
    @endif  
        </form>

@stop
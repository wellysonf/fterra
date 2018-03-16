@extends('adminlte::page')

@section('title', 'Fundação Terra')

@section('content_header')
    <h1>Cadastro de Chefe de família</h1>
@stop

@section('content')

<form action="{{ route('familia.store') }}" method="post">
    {{ csrf_field() }}
    <div class='form-group'><label for='nome'>Nome do (a) Chefe da Família: </label><input type='text' class='form-control  has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}' name='nome' value='{{ $householder->nome or old('nome') }}'></div>
    <div class='form-group'><label for='nascimento'>Data de Nasc: </label><input type='date' class='form-control  has-feedback {{ $errors->has('nascimento') ? 'has-error' : '' }}' name='nascimento' value='{{ $householder->nascimento or old('nascimento') }}'></div>
    <div class='form-group'><label for='rg'>RG: </label><input type='text' class='form-control  has-feedback {{ $errors->has('rg') ? 'has-error' : '' }}' name='rg' value='{{ $householder->rg or old('rg') }}'></div>
    <div class='form-group'><label for='cpf'>CPF: </label><input type='text' class='form-control  has-feedback {{ $errors->has('cpf') ? 'has-error' : '' }}' name='cpf' value='{{ $householder->cpf or old('cpf') }}'></div>
    <div class="form-group"><label for="escolaridade">ESCOLARIDADE: </label>
        <select name="escolaridade" id="escolaridade" class="form-control" >
                <option value='Fundamental Incompleto'  {{ ((old('escolaridade') == 'Fundamental Incompleto' || $householder->escolaridade =='Fundamental Incompleto' ) ? 'selected':'') }}>Fundamental Incompleto</option>
                <option value='Fundamental Completo'  {{ ((old('escolaridade') == 'Fundamental Completo' || $householder->escolaridade =='Fundamental Completo' ) ? 'selected':'') }}>Fundamental Completo</option>
                <option value='Médio Incompleto'  {{ ((old('escolaridade') == 'Médio Incompleto' || $householder->escolaridade =='Médio Incompleto' ) ? 'selected':'') }}>Médio Incompleto</option>
                <option value='Médio Completo'  {{ ((old('escolaridade') == 'Médio Completo' || $householder->escolaridade =='Médio Completo' ) ? 'selected':'') }}>Médio Completo</option>
                <option value='Superior Incompleto'  {{ ((old('escolaridade') == 'Superior Incompleto' || $householder->escolaridade =='Superior Incompleto' ) ? 'selected':'') }}>Superior Incompleto</option>
                <option value='Superior Completo'  {{ ((old('escolaridade') == 'Superior Completo' || $householder->escolaridade =='Superior Completo' ) ? 'selected':'') }}>Superior Completo</option>
                <option value='Pós-graduação (Lato senso) Incompleto'  {{ ((old('escolaridade') == 'Pós-graduação (Lato senso) Incompleto' || $householder->escolaridade =='Pós-graduação (Lato senso) Incompleto' ) ? 'selected':'') }}>Pós-graduação (Lato senso) Incompleto</option>
                <option value='Pós-graduação (Lato senso) Completo'  {{ ((old('escolaridade') == 'Pós-graduação (Lato senso) Completo' || $householder->escolaridade =='Pós-graduação (Lato senso) Completo' ) ? 'selected':'') }}>Pós-graduação (Lato senso) Completo</option>
                <option value='Pós-graduação (Stricto sensu, nível mestrado) Incompleto'  {{ ((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível mestrado) Incompleto' || $householder->escolaridade =='Pós-graduação (Stricto sensu, nível mestrado) Incompleto' ) ? 'selected':'') }}>Pós-graduação (Stricto sensu, nível mestrado) Incompleto</option>
                <option value='Pós-graduação (Stricto sensu, nível mestrado) Completo'  {{ ((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível mestrado) Completo' || $householder->escolaridade =='Pós-graduação (Stricto sensu, nível mestrado) Completo' ) ? 'selected':'') }}>Pós-graduação (Stricto sensu, nível mestrado) Completo</option>
                <option value='Pós-graduação (Stricto sensu, nível doutor) Incompleto'  {{ ((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível doutor) Incompleto' || $householder->escolaridade =='Pós-graduação (Stricto sensu, nível doutor) Incompleto' ) ? 'selected':'') }}>Pós-graduação (Stricto sensu, nível doutor) Incompleto</option>
                <option value='Pós-graduação (Stricto sensu, nível doutor) Completo'  {{ ((old('escolaridade') == 'Pós-graduação (Stricto sensu, nível doutor) Completo' || $householder->escolaridade =='Pós-graduação (Stricto sensu, nível doutor) Completo' ) ? 'selected':'') }}>Pós-graduação (Stricto sensu, nível doutor) Completo</option>
                
        </select>
    </div>
    <div class='form-group'><label for='profissao'>PROFISSÃO: </label><input type='text' class='form-control  has-feedback {{ $errors->has('profissao') ? 'has-error' : '' }}' name='profissao' value='{{ $householder->profissao or old('profissao') }}'></div>
    <div class='form-group'><label for='conjuge'>CÔNJUGE: </label><input type='text' class='form-control  has-feedback {{ $errors->has('conjuge') ? 'has-error' : '' }}' name='conjuge' value='{{ $householder->conjuge or old('conjuge') }}'></div>
    <div class='form-group'><label for='pai'>NOME DO PAI: </label><input type='text' class='form-control  has-feedback {{ $errors->has('pai') ? 'has-error' : '' }}' name='pai' value='{{ $householder->pai or old('pai') }}'></div>
    <div class='form-group'><label for='mae'>NOME DO MÃE: </label><input type='text' class='form-control  has-feedback {{ $errors->has('mae') ? 'has-error' : '' }}' name='mae' value='{{ $householder->mae or old('mae') }}'></div>
    <div class='form-group'><label for='endereco'>ENDEREÇO: </label><input type='text' class='form-control  has-feedback {{ $errors->has('endereco') ? 'has-error' : '' }}' name='endereco' value='{{ $householder->endereco or old('endereco') }}'></div>
    <div class='form-group'><label for='endereco_num'>NÚMERO: </label><input type='text' class='form-control  has-feedback {{ $errors->has('endereco_num') ? 'has-error' : '' }}' name='endereco_num' value='{{ $householder->endereco_num or old('endereco_num') }}'></div>
    <div class='form-group'><label for='endereco_complemento'>COMPLEMENTO: </label><input type='text' class='form-control  has-feedback {{ $errors->has('endereco_complemento') ? 'has-error' : '' }}' name='endereco_complemento' value='{{ $householder->endereco_complemento or old('endereco_complemento') }}'></div>
    <div class='form-group'><label for='bairro'>BAIRRO: </label><input type='text' class='form-control  has-feedback {{ $errors->has('bairro') ? 'has-error' : '' }}' name='bairro' value='{{ $householder->bairro or old('bairro') }}'></div>
    <div class='form-group'><label for='cidade'>CIDADE: </label><input type='text' class='form-control  has-feedback {{ $errors->has('cidade') ? 'has-error' : '' }}' name='cidade' value='{{ $householder->cidade or old('cidade') }}'></div>
    <div class='form-group'><label for='cep'>CEP: </label><input type='text' class='form-control  has-feedback {{ $errors->has('cep') ? 'has-error' : '' }}' name='cep' value='{{ $householder->cep or old('cep') }}'></div>
    <div class='form-group'><label for='uf'>UF: </label><input type='text' class='form-control  has-feedback {{ $errors->has('uf') ? 'has-error' : '' }}' name='uf' value='{{ $householder->uf or old('uf') }}'></div>
    <div class='form-group'><label for='tel1'>TELEFONE 1: </label><input type='text' class='form-control  has-feedback {{ $errors->has('tel1') ? 'has-error' : '' }}' name='tel1' value='{{ $householder->tel1 or old('tel1') }}'></div>
    <div class='form-group'><label for='tel2'>TELEFONE 2: </label><input type='text' class='form-control  has-feedback {{ $errors->has('tel2') ? 'has-error' : '' }}' name='tel2' value='{{ $householder->tel2 or old('tel2') }}'></div>
    <div class='form-group'><label for='qtd_moradores'>QUANTIDADE DE MORADORES </label><input type='text' class='form-control  has-feedback {{ $errors->has('qtd_moradores') ? 'has-error' : '' }}' name='qtd_moradores' value='{{ $householder->qtd_moradores or old('qtd_moradores') }}'></div>
    <div class='form-group'><label for='qtd_criancas'>QUANTIDADE DE CRIANÇAS </label><input type='text' class='form-control  has-feedback {{ $errors->has('qtd_criancas') ? 'has-error' : '' }}' name='qtd_criancas' value='{{ $householder->qtd_criancas or old('qtd_criancas') }}'></div>
    <div class='form-group'><label for='qtd_estudantes'>QUANTIDADE DE ESTUDANTES </label><input type='text' class='form-control  has-feedback {{ $errors->has('qtd_estudantes') ? 'has-error' : '' }}' name='qtd_estudantes' value='{{ $householder->qtd_estudantes or old('qtd_estudantes') }}'></div>
    <div class='form-group'><label for='qtd_trabalhadores'>QUANTIDADE DE TRABALHADORES </label><input type='text' class='form-control  has-feedback {{ $errors->has('qtd_trabalhadores') ? 'has-error' : '' }}' name='qtd_trabalhadores' value='{{ $householder->qtd_trabalhadores or old('qtd_trabalhadores') }}'></div>
    <div class='form-group'><label for='renda_familiar'>RENDA FAMILIAR </label><input type='text' class='form-control  has-feedback {{ $errors->has('renda_familiar') ? 'has-error' : '' }}' name='renda_familiar' value='{{ $householder->renda_familiar or old('renda_familiar') }}'></div>
    <div class='form-group'><label for='renda_per_capita'>RENDA PER CAPITA </label><input type='text' class='form-control  has-feedback {{ $errors->has('renda_per_capita') ? 'has-error' : '' }}' name='renda_per_capita' value='{{ $householder->renda_per_capita or old('renda_per_capita') }}'></div>
    <div class='form-group'><label for='obs'>OBSERVAÇÕES: </label><input type='text' class='form-control  has-feedback {{ $errors->has('obs') ? 'has-error' : '' }}' name='obs' value='{{ $householder->obs or old('obs') }}'></div>   
    <input type="submit" value="Adicionar" class="btn btn-primary">
</form>

@stop
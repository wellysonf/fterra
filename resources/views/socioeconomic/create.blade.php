@extends('adminlte::page')

@section('title', 'Fundação Terra')

@section('content_header')
    <h1>Cadastro de Relatório Socioeconômico</h1>
@stop

@section('content')
    @if($mode === 'create')
        <form action="{{ route('cadsocio.store') }}" method="post" class="form-inline" id="form_chefe">
            <input type="hidden" name="householder_id" value="{{ $householder }}">
    @elseif (($mode === 'show')or($mode === 'edit'))
        <form action="{{ route('cadsocio.update',$househouder) }}" method="post" class="form-inline" id="form_chefe">
        {{ method_field('PUT') }}
    @endif
        {{ csrf_field() }}
        <div class='form-group'><label for='beneficiario'>É Beneficiado por Programa do Governo </label><input type='text' class='form-control  has-feedback {{ $errors->has('beneficiario') ? 'has-error' : '' }}' name='beneficiario' value='{{ $householder->beneficiario or old('beneficiario') }}'></div>
        <div class='form-group'><label for='programas'>Qual Programa ou Quais Programas: </label><input type='text' class='form-control  has-feedback {{ $errors->has('programas') ? 'has-error' : '' }}' name='programas' value='{{ $householder->programas or old('programas') }}'></div>
        <div class='form-group'><label for='beneficiario_fterra'>É ou já foi beneficiada pela Fundação Terra: </label><input type='text' class='form-control  has-feedback {{ $errors->has('beneficiario_fterra') ? 'has-error' : '' }}' name='beneficiario_fterra' value='{{ $householder->beneficiario_fterra or old('beneficiario_fterra') }}'></div>
        <div class='form-group'><label for='beneficiario_fterra_desc'>Em que? </label><input type='text' class='form-control  has-feedback {{ $errors->has('beneficiario_fterra_desc') ? 'has-error' : '' }}' name='beneficiario_fterra_desc' value='{{ $householder->beneficiario_fterra_desc or old('beneficiario_fterra_desc') }}'></div>
        <div class='form-group'><label for='moradia'>Moradia: </label><input type='text' list="moradia" class='form-control  has-feedback {{ $errors->has('moradia') ? 'has-error' : '' }}' name='moradia' value='{{ $householder->moradia or old('moradia') }}'></div>
        <div class='form-group'><label for='tipo_domicilio'>Tipo de Domicílio: </label><input type='text' list="tipodomicilio" class='form-control  has-feedback {{ $errors->has('tipo_domicilio') ? 'has-error' : '' }}' name='tipo_domicilio' value='{{ $householder->tipo_domicilio or old('tipo_domicilio') }}'></div>
        <div class='form-group'><label for='qtd_comodos'>Quantidade de Cômodos: </label><input type='text' class='form-control  has-feedback {{ $errors->has('qtd_comodos') ? 'has-error' : '' }}' name='qtd_comodos' value='{{ $householder->qtd_comodos or old('qtd_comodos') }}'></div>
        <div class='form-group'><label for='obs_moradia'>OBS: </label><input type='text' class='form-control  has-feedback {{ $errors->has('obs_moradia') ? 'has-error' : '' }}' name='obs_moradia' value='{{ $householder->obs_moradia or old('obs_moradia') }}'></div>
        <div class='form-group'><label for='material_moradia'>Material predominante na construção deste domicílio: </label><input type='text' list="moradiamaterial" class='form-control  has-feedback {{ $errors->has('material_moradia') ? 'has-error' : '' }}' name='material_moradia' value='{{ $householder->material_moradia or old('material_moradia') }}'></div>
        <div class='form-group'><label for='material_moradia_cobertura'>Material predominante na cobertura deste domicílio: </label><input type='text' list="moradiamaterial" class='form-control  has-feedback {{ $errors->has('material_moradia_cobertura') ? 'has-error' : '' }}' name='material_moradia_cobertura' value='{{ $householder->material_moradia_cobertura or old('material_moradia_cobertura') }}'></div>
        <div class='form-group'><label for='agua_moradia'>Condição de água deste domicílio: </label><input type='text' list="moradiaagua" class='form-control  has-feedback {{ $errors->has('agua_moradia') ? 'has-error' : '' }}' name='agua_moradia' value='{{ $householder->agua_moradia or old('agua_moradia') }}'></div>
        <div class='form-group'><label for='iluminacao_moradia'>Forma de iluminação deste domicílio: </label><input type='text' list="moradialuz" class='form-control  has-feedback {{ $errors->has('iluminacao_moradia') ? 'has-error' : '' }}' name='iluminacao_moradia' value='{{ $householder->iluminacao_moradia or old('iluminacao_moradia') }}'></div>
        <div class='form-group'><label for='preparacao_alimentos'>Forma de Preparação de alimentos: </label><input type='text' list="moradiaalimentos" class='form-control  has-feedback {{ $errors->has('preparacao_alimentos') ? 'has-error' : '' }}' name='preparacao_alimentos' value='{{ $householder->preparacao_alimentos or old('preparacao_alimentos') }}'></div>
        <div class='form-group'><label for='banheiro'>Existência de banheiro neste domicílio: </label><input type='text' list="moradiabanheiro" class='form-control  has-feedback {{ $errors->has('banheiro') ? 'has-error' : '' }}' name='banheiro' value='{{ $householder->banheiro or old('banheiro') }}'></div>
        <div class='form-group'><label for='destino_dejetos'>Destino dos dejetos: </label><input type='text' list="moradiabanheirodestino" class='form-control  has-feedback {{ $errors->has('destino_dejetos') ? 'has-error' : '' }}' name='destino_dejetos' value='{{ $householder->destino_dejetos or old('destino_dejetos') }}'></div>
        <div class='form-group'><label for='equipamentos_banheiro'>Equipamentos no banheiro: </label><input type='text' class='form-control  has-feedback {{ $errors->has('equipamentos_banheiro') ? 'has-error' : '' }}' name='equipamentos_banheiro' value='{{ $householder->equipamentos_banheiro or old('equipamentos_banheiro') }}'></div>
        <div class='form-group'><label for='eletrodomesticos'>Existência de eletrodomésticos neste domicílio: </label><input type='text' class='form-control  has-feedback {{ $errors->has('eletrodomesticos') ? 'has-error' : '' }}' name='eletrodomesticos' value='{{ $householder->eletrodomesticos or old('eletrodomesticos') }}'></div>
        <div class='form-group'><label for='destino_lixo'>Destino do lixo Caseiro: </label><input type='text' class='form-control  has-feedback {{ $errors->has('destino_lixo') ? 'has-error' : '' }}' name='destino_lixo' value='{{ $householder->destino_lixo or old('destino_lixo') }}'></div>
        <div class='form-group'><label for='uso_substancia'>Existe caso de uso de substância psicoativa na família? </label><input type='text' class='form-control  has-feedback {{ $errors->has('uso_substancia') ? 'has-error' : '' }}' name='uso_substancia' value='{{ $householder->uso_substancia or old('uso_substancia') }}'></div>
        <div class='form-group'><label for='curso_desejado'>Qual curso profissionalizante você gostaria de fazer? </label><input type='text' class='form-control  has-feedback {{ $errors->has('curso_desejado') ? 'has-error' : '' }}' name='curso_desejado' value='{{ $householder->curso_desejado or old('curso_desejado') }}'></div>

        <br>
        <br>
        
        <datalist id="moradiabanheirodestino">
            <option value='Fossa'>
            <option value='Galeria'>
            <option value='Céu aberto'>
            <option value='Outro (especificar)'>                        
        </datalist>
        <datalist id="moradiabanheiro">
            <option value='Individual dentro de casa'>
            <option value='Coletivo dentro de casa'>
            <option value='Coletivo fora de casa'>
            <option value='Não possui'>
            <option value='Outro meio (especificar)'>                        
        </datalist>
        <datalist id="moradiaalimentos">
            <option value='Fogão a gás'>
            <option value='Lenha'>
            <option value='Carvão'>
            <option value='Pó de serra'>
            <option value='Outro(especificar)'>                        
        </datalist>
        <datalist id="moradialuz">
            <option value='Elétrica'>
            <option value='Óleo, querosene ou gás de botijão'>
            <option value='Outra (especificar)'>                        
        </datalist>
        <datalist id="moradiaagua">
            <option value='Encanada'>
            <option value='Poço'>
            <option value='Barragem'>
            <option value='Outra condição (especificar)'>                        
        </datalist>
        <datalist id="moradiamaterial">
            <option value='Lona/plástico'>
            <option value='Telha de cerâmica'>
            <option value='Telha brasilite/amianto'>                    
        </datalist>
        <datalist id="moradiamaterial">
            <option value='Lona ou Plástico'>
            <option value='Alvenaria'>
            <option value='Madeira aproveitada'>
            <option value='Taipa'>                        
        </datalist>
        <datalist id="tipodomicilio">
            <option value='Casa'>
            <option value='Quarto'>
            <option value='Outro(especificar)'>            
        </datalist>
        <datalist id="moradia">
            <option value='Própria'>
            <option value='Alugada'>
            <option value='Cedida'>
            <option value='Fundação Terra'>
            <option value='Outros'>            
        </datalist>
    @if($mode === 'create')
        <input type="submit" value="Adicionar Relatório Socioeconômico" class="btn btn-primary">
    @elseif (($mode === 'show')or($mode === 'edit'))
        <input type="submit" value="Editar Relatório Socioeconômico" class="btn btn-primary">
    @endif  
        </form>

@stop
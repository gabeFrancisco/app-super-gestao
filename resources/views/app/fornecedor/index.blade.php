<h3>Fornecedor</h3>
<style>
    p{
        margin: 2px;
    }
</style>
{{-- This is a comment! --}}

@php
    // if(){
    
    // } elseif(){
    
    // }else{
    
    // }
@endphp

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados
@endif --}}

{{-- @dd($fornecedores) --}}

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
    <p>Iteração: {{ $loop->iteration }}</p>
        <p>Indice: {{ $indice }}</p>
        <p>Fornecedor: {{ $fornecedor['nome'] }}</p>
        <p>Status: {{ $fornecedor['status'] }}</p>
        <p>CNPJ: {{ $fornecedor['cnpj'] ?? '' }}</p>
        <p>Telefone: <i>{{ $fornecedor['ddd'] ?? '' }}</i> {{ $fornecedor['telefone'] ?? '' }}</p>
        @switch($fornecedor['ddd'])
            @case(51)
                <p>Rio Grande do Sul</p>
            @break

            @case(47)
                <p>Santa Catarina</p>
            @break

            @case(01)
                <p>US!!!</p>
            @break

            @default
                <p>DDD não informado</p>
        @endswitch
        <br>
        <hr>
        @empty
            <p>Não existem fornecedores cadastrados!</p>
    @endforelse
    {{-- @isset($fornecedores[0]['cnpj'])
        <p>CNPJ: {{ $fornecedores[0]['cnpj'] }}</p>
        @empty($fornecedores[0]['cnpj'])
            <p>Vazio!</p>
        @endempty
    @endisset --}}


@endisset

<br>

{{-- @if ($fornecedores[0]['status'] == 'N')
    <i>Fornecedor inativo!</i>
@else
    <i>Fornecedor ativo</i>
@endif --}}
{{-- 
@unless ($fornecedores[0]['status'] == 'S')
    <i>Fornecedor inativo!</i>
@endunless --}}

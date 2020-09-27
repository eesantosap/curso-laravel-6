@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

    <h1>Exibindo Produtos</h1>

    <a href="{{ route('produtos.create') }}">Cadastrar</a>

    {{-- comentáriodentrodoblade --}}

    @if($teste === 123)
        <p>Confirmado! É verdadeiro</p>
        @elseif (@teste == 123)
            <p>É igual a 123</p>
    @else
        <p>É diferente</p>
    @endif

<!-- Condicional invertida -->
    @unless($teste === '123')
        <p>Confirmado! É falso</p>
    @else
        <p>É Verdade</p>
    @endunless

<!-- Se a variável existe -->

    @isset($teste2)
        <p>{{ $teste2 }}</p>
    @else
        <p>Esta variávelNÃO existe</p>
    @endisset

<!-- Se a variável está vazio -->

    @empty($teste3)
        <p>Esta variável está vazia</p>
    @else
        <p>Esta variável NÃO está vazia</p>
    @endempty

<!-- verifica se o usuário está ou não autenticado -->

    @auth
        <p>Está Autenticado</p>
    @else
        <p>NÃO Está Autenticado</p>
    @endauth

<!-- verifica se o usuário está ou não autenticado inverso do auth  -->

    @guest
        <p>NÃO Está Autenticado</p>
    @else
        <p>NÃO Está Autenticado</p>
    @endguest

<!-- Escolha -->

    @switch($teste4) 
        @case(1)
            Igual 1
            @break
        @case(2)
            Igual 2
            @break
        @case(3)
            Igual 3
            @break
        @case(4)
            Igual 4
            @break
        @default
            Default
    @endswitch


@endsection
@extends('admin.layouts.app')

@section('title', 'Loop - Produtos')

@section('content')

    <h1>Testando Loop</h1>

    @component('admin.components.card')
        @slot('title')
            <h3>Titulo do Card</h3>
        @endslot
            Texto do CARD
    @endcomponent


    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>



    <!-- Impressão forçada (não segura) -->
    {!! $teste !!}


    <!-- Impressão segura -->
    {{ $teste }}


    <!-- Loop com foreach -->

    @if(@isset($produtos))
        @foreach ($produtos as $produto)
            <p class="@if ($loop->last) last @endif">{{ $produto }}</p>
        @endforeach
    @endif


    <!-- Loop com forelse -->

    @forelse ($livros as $livro)
        <p class="@if ($loop->first) last @endif">{{ $livro }}</p>
    @empty
        <p>Não existem livros cadastrados</p>
    @endforelse

    @forelse ($listas as $lista)
        <p>{{ $lista }}</p>
    @empty
        <p>Não existem nada cadastrada nesta lista</p>
    @endforelse
@endsection


<!-- Formatação específica para esta página -->

@push('styles')
    <style>
        .last{
            background: red;
            color: beige;
            font-size: large;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#999';
    </script>
@endpush



    </body>
</html>
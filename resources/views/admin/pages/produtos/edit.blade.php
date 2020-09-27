@extends('admin.layouts.app')

@section('content')

    <h1>Editar Produto {{ $id }} </h1>
    
    <form action="{{ route('produtos.update', $id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="descricao" placeholder="Descrição">
        <input type="submit" value="ENVIAR">
    </form>
@endsection
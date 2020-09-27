@extends('admin.layouts.app')

@section('content')

    <h1>Cadastrar Novo Produto</h1>
    
    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Nome: <input type="text" name="nome" placeholder="Nome"></p>
        <p>Descrição: <input type="text" name="descricao" placeholder="Descrição"></p>
        <p><input type="file" name="fotos"></p>
        <button type="submit">ENVIAR</button>
    </form>
@endsection
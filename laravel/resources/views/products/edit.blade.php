@extends('layout')

@section('title', 'Editar Produto')

@section('content')
    <h1>Editar Produto</h1>

    <form action="/produtos/{{ $product->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" placeholder="Nome do Produto" required>
        <input type="text" name="description" value="{{ $product->description }}" placeholder="Descrição" required>
        <input type="number" name="price" value="{{ $product->price }}" placeholder="Preço" required>
        <button type="submit">Salvar Alterações</button>
    </form>

    <a href="{{ route('home') }}" class="back-link">Voltar para a Home</a>
@endsection

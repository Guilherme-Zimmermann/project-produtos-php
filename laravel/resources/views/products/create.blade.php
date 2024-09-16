@extends('layout')

@section('title', 'Cadastrar Produto')

@section('content')
    <h1>Cadastrar Produto</h1>

    <form action="/produtos" method="POST" class="form-create">
        @csrf
        <input type="text" name="name" placeholder="Nome do Produto" required>
        <input type="text" name="description" placeholder="Descrição" required>
        <input type="number" name="price" placeholder="Preço" required>
        <button type="submit">Enviar</button>
    </form>

    <a href="{{ route('home') }}" class="back-link">Voltar para a Home</a>
@endsection

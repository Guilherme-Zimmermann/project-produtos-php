@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="home-content">
        <h1>Bem-vindo</h1>

        <ul class="home-links">
            <li><a href="{{ route('produtos.index') }}">Listagem de Produtos</a></li>
            <li><a href="{{ route('produtos.create') }}">Cadastro de Produtos</a></li>
        </ul>
    </div>
@endsection

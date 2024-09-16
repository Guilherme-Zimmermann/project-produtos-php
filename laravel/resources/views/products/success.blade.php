@extends('layout')

@section('title', 'Sucesso')

@section('content')
    <div class="success-message">
        <h2>REQUISIÇÃO REALIZADA COM SUCESSO</h2>
    </div>
    <a href="/produtos" class="back-link">Voltar para a lista de produtos</a>
    <a href="{{ route('home') }}" class="back-link">Voltar para a Home</a>
@endsection

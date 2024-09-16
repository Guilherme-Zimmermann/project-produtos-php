@extends('layout')

@section('title', 'Lista de Produtos')

@section('content')
    <h1>Lista de Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="/produtos/edita/{{ $product->id }}">
                        <button class="action-button">Editar</button>
                    </a>
                    <form action="/produtos/{{ $product->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-button delete">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('home') }}" class="back-link">Voltar para a Home</a>
@endsection

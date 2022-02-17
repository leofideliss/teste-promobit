@extends('templates.templateDefault')

@section('content')
<div class="container d-flex flex-column justify-content-center h-75 w-100 mt-4">
    @if (session('message'))
        <div class="alert alert-info" style="display: block">
            {{ session('message') }}
        </div>
    @endif
    <div class="row justify-content-between">
        <div class="col-4">
            <h2 style="">Lista de Produtos</h2>
        </div>
        <div class="col-4 text-right">
            <a class="btn btn-primary" href="{{ route('products.create') }}"> Novo Produto </a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qtd.</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>

                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name_prod }}</td>
                    <td>{{ $product->qtd }}</td>
                    <td>{{ $product->price }}</td>

                    <td>
                        <a href="{{ route('products.edit', $product->id) }}"> <img src="{{ asset('images/edit.png') }}"
                                alt="" width="15px"></a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button style="border: none; background-color: transparent;cursor: pointer"> <img
                                    src="{{ asset('images/delete.png') }}" alt="" width="15px"></button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
    </div>
@endsection

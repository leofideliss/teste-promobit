@extends('templates.templateDefault')

@section('content')
<div class="container d-flex flex-column justify-content-center h-75 w-100 mt-4">
@if (count($products))
<div class="row">
    <div class="col-4">
        <h2 style="">Lista de Produtos</h2>
    </div>
</div>
<table class="table text-center">
    <thead>
        <tr>
            <th>#</th>

            <th>Produto</th>
            <th>Detalhes</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <td>{{$key}}</td>
            <td>{{ $product->name_prod }}</td>
            <td><a href="{{route('products.show',$product->id)}}">Visualizar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $products->links() !!}
</div>
@else
<div class="alert alert-danger">
    <h4>Nenhum registro encontrado.</h4>
</div>
@endif
</div>
@endsection
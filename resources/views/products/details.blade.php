@extends('templates.templateDefault')

@section('content')
<div class="container d-flex flex-column justify-content-center h-75 w-100 mt-4">
    <table class="table table-bordered">
        <tr>
            <th>Código</th>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <th>Produto</th>
            <td>{{ $product->name_prod }}</td>
        </tr>
        <tr>
            <th>Quantidade</th>
            <td>{{ $product->qtd }}</td>
        </tr>
        <tr>
            <th>Preço</th>
            <td>{{ $product->price }}</td>
        </tr>
        <tr>
            <th>Tags</th>
            <td>@foreach ($product->tags as $key => $item)
                {{$item->name_tag}} @if ($key == count($product->tags) - 1)
                    .
                @else
                    -
                @endif
            @endforeach</td>
        </tr>
    </table>
<div class="text-center">
    <a class="btn btn-primary" href="{{route('products.itens')}}"> Voltar </a>
</div>
</div>

@endsection

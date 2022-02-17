@extends('templates.templateDefault')

@section('content')
<div class="container h-100 mt-2">
    @foreach ($tags as $tag)
        <p>{{ "# $tag->name_tag" }}</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Código do produto</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Numero de Visistas</th>
                </tr>
            </thead>
            @foreach ($tag->products as $item)
            <tr>
                <th>{{$item->id}}</th>
                <th>{{$item->name_prod}}</th>
                <th>{{$item->qtd}}</th>
                <th>{{$item->price}}</th>
                <th>{{$item->visits}}</th>
            </tr>
            @endforeach
        </table>
    @endforeach
</div>

@endsection

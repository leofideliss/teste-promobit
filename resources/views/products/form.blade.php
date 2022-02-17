@extends('templates.templateDefault')

@section('content')
<div class="container d-flex flex-column justify-content-center h-75 w-100 mt-4">
@if ($errors->any())
    <div class="">
      
            @foreach ($errors->all() as $error)
               <span class="text-danger">{{$error}} </span>
            @endforeach
     
    </div>
@endif
    @if (isset($product))
        <form class="container-fluid" method="POST" action="{{ route('products.update', $product->id) }}">
            @method('PUT')
        @else
            <form class="container-fluid" method="POST" action="{{ route('products.store') }}">
    @endif

    @csrf
    <h4>
        @if (isset($product))
        Alterar @else Cadastrar
        @endif Produto
    </h4>
    <div class="form-group">
        <label for="name_prod">Produto *</label>
        <input type="text" class="form-control" id="name_prod" name="name_prod" placeholder="Nome do Produto"
            value="{{ $product->name_prod ?? '' }}">
    </div>
    <div class="form-group">
        <label for="qtd">Quantidade *</label>
        <input type="number" class="form-control" id="qtd" name="qtd" placeholder="Quantidade do Produto" 
            value="{{ $product->qtd ?? 1 }}">
    </div>
    <div class="form-group">
        <label for="price">Preço *</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Valor do Produto"
            value="{{ $product->price ?? '' }}">
    </div>
    <div class="form-group">
        <p>Tags *</p>


        @if (isset($tags_prod))
            @php
                $i = 0;
            @endphp

            @foreach ($tags_all as $tag)
                @if ($i < count($tags_prod) && $tags_prod[$i]->id == $tag->id)
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}" checked>
                    <label for="scales">{{ $tag->name_tag }}</label>
                    @php
                        $i++;
                    @endphp
                @else
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                    <label for="scales">{{ $tag->name_tag }}</label>
                @endif
            @endforeach
        @else
            @if (count($tags_all))
                @foreach ($tags_all as $tag)
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
                    <label for="scales">{{ $tag->name_tag }}</label>
                @endforeach

            @else
                <p>Cadastre pelo menos uma Tag  <a class="" href="{{ route('tags.create')}}"> - Clique aqui </a></p>
            @endif

        @endif

    </div>

    <button type="submit" class="btn btn-primary">
        @if (isset($product))
        Atualizar @else Enviar
        @endif
    </button>
    </form>
</div>
@endsection

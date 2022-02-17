@extends('templates.templateDefault')

@section('content')
<div class="container d-flex flex-column justify-content-center h-75 w-100 mt-4">
    @if ($errors->any())
        <div class="">

            @foreach ($errors->all() as $error)
                <span class="text-danger">{{ $error }} </span>
            @endforeach

        </div>
    @endif
    @if (isset($tag))
        <form class="container-fluid" action="{{ route('tags.update', $tag->id) }}" method="POST">
            @method("PUT")
        @else
            <form class="container-fluid" action="{{ route('tags.store') }}" method="POST">
    @endif

    @csrf

    <h4>
        @if (isset($tag))
        Alterar @else Cadastrar
        @endif Tag
    </h4>
    <div class="form-group">
        <label for="name_tag">Tag</label>
        <input type="text" class="form-control" id="name_tag" name="name_tag" placeholder="Nome da Tag"
            value="{{ $tag->name_tag ?? '' }}">
    </div>

    <button type="submit" class="btn btn-primary">
        @if (isset($tag))
        Atualizar @else Enviar
        @endif
    </button>
    </form>
</div>
@endsection

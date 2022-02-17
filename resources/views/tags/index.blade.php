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
            <h2 style="">Lista de Tags</h2>
        </div>
        <div class="col-4 text-right">
            <a class="btn btn-primary" href="{{ route('tags.create')}}"> Nova Tag </a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name_tag }}</td>
                    <td>
                        <a href="{{ route('tags.edit', $tag->id) }}"> <img src="{{ asset('images/edit.png') }}" alt=""
                                width="15px"></a>
                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button style="border: none; background-color: transparent; cursor:pointer"> <img
                                    src="{{ asset('images/delete.png') }}" alt="" width="15px"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $tags->links() !!}
    </div>
    </div>
@endsection

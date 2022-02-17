@php
use Illuminate\Support\Facades\Auth;
if (Auth::check() === false) {
header("Location: /");
exit();
}
@endphp
<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('js/jquery-3.6.0.min.js')}}">
    <title>Teste Promobit</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('products.index')}}">Produtos </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('tags.index')}}">Tags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('products.itens')}}">Lista de Itens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('tags.itens')}}">Relatório</a>
                    </li>
                </ul>
            </div>
            <a href="{{route('logout')}}" class="btn btn-light">Sair</a>
        </nav>
    </header>

    {{-- <section class="container d-flex flex-column justify-content-center h-75 w-100 mt-4"> --}}
        @yield('content')
    {{-- </section> --}}


    {{-- <footer  class="footer navbar-fixed-bottom">
        <span class="text-primary"> Teste Promobit - 17/02/2022</span>
    </footer> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
                liEl=document.querySelectorAll('.nav-link');

                for (var i=0; i < liEl.length; i++) {
                    if (liEl[i].href==document.URL) {
                        console.log(liEl[i]);
                        console.log(document.URL);
                        liEl[i].className +=' active';
                        var parent=liEl[i].parentNode;
                        parent.style.display="block";
                    }
                }

            }

        );

        
    </script>
</body>

</html>
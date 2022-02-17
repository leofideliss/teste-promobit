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
    <title>Login</title>

</head>


<body>
    <div class="container d-flex flex-column justify-content-center h-100 w-100 mt-4 col-4">
        <div style="border: 1px solid #dcdcdc;padding:20px">

            <h5 class="">Login</h5>

            <form action="{{ route('login.do') }}" method="POST">
                @csrf



                <div class="form-group mt-3">
                    <label for="login"> Seu usuário</label>
                    <input type="text" name="login" class="form-control" id="login" placeholder="Ex: joão">

                </div>

                <div class="form-group mt-3">
                    <label for="password">Sua senha</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Ex: 1234">
                </div>
                @if ($errors->all())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger mt-1" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @endif
                <button type="submit" class="btn btn-primary mt-3">Entrar</button>

        </div>
        
   
        </form>
    </div>

    </div>


</body>

</html>
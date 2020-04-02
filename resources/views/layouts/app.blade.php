<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap4-harbor.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/main.css')}}">


    <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
</head>
<body class="bg-root">

<nav class="navbar navbar-expand-lg  bg-info navbar-dark text-white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand display-2" href="/">Contable</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-white ml-3">

                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{route('almacen.index')}}">Almacen</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{route('articulo.index')}}">Articulo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('unidad.index')}}">Unidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('transaccionArticulo.index')}}">Transacciones</a>
                </li>
            </ul>
            {{--   <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>--}}
        </div>
    </div>

</nav>
<main class="py-4 ">
    <div class="container">
        @yield('content')
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>

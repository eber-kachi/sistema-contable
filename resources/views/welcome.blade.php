<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Harbor - Bootstrap Theme</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('css/bootstrap4-harbor.min.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">

</head>
<body>

<div class="bg-info navbar-dark text-white ">
    <div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav align-items-center">
                    <a href="index.html" class="pl-md-0 p-3 text-light display-fix">Contable</a>
                    <a href="{{route('articulo.index')}}" class="p-3 text-decoration-none text-light">Articulos</a>
{{--                    <a href="form.html" class="p-3 text-decoration-none text-light">Form example</a>--}}
                </div>
            </div>
        </nav>

    </div>
</div>


<div class="jumbotron bg-info jumbotron-harbor text-white mb-0 radius-0">
    <div class="container">

        <h1 class="display-1 text-light">Contable</h1>
        <span class="lead"></span>

   {{--     <div class="mt-4">
            <a href="#!" class="btn btn-success btn-pill btn-wide btn-lg my-2 mr-2"><span></span>
            </a>

            <a href="#!"
               class="btn btn-primary btn-pill btn-wide btn-lg my-2">
                <span>Another Button</span>
            </a>
        </div>--}}

    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>


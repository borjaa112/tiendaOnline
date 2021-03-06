<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Link CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Link JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- Script para agregar productos al carro --}}
    <script src="{{asset("js/carrito/store-inicio.js")}}" defer></script>

    <!-- Iconos Online -->
    <script src="https://kit.fontawesome.com/75b8de379c.js" crossorigin="anonymous"></script>

    <!-- Link CSS locales-->
    <link rel="stylesheet" href="{{URL::asset('css/navFooter.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/catalogo.css')}}">

    <title>@yield('titulo')</title>{{-- Titulo de catalogo --}}
</head>
<body>
    @include('partials.nav'){{-- Se incluirá el nav de partials/nav.blade.php --}}
    @yield('cuerpo')
    @include('partials.footer'){{-- Se incluirá el nav de partials/nav.blade.php --}}
</body>
</html>

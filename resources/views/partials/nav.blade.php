<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Librería de FA -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/inicio.css')}}">
    <title>Nav</title>
</head>

<body>
    <nav>
        <div class="bordes">
            <div class="ordenar1">
                <div class="logoPagina">
                    <img src="img/logo-pccomponentes.svg">
                </div>

                <form action="">
                    <input type="text" name="Buscador" id="buscadorNav" placeholder="Busca en PcComponentes...">
                    <img src="img/icon/lupa.png" alt="">
                </form>
            </div>

            <div class="ordenar2">
                <ul class="estilos">
                    <a href=".">
                        <li>
                            <img src="img/icon/perfil.png" alt="">
                            <p>Mi Cuenta</p>
                        </li>
                    </a>

                    <a href=".">
                        <li>
                            <img src="img/icon/carrito.png" alt="">
                            <p>Mi Carrito</p>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>

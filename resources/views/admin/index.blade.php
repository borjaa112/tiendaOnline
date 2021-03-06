@extends('admin')
@section('titulo', 'Dashboard - Inicio')
@section('cuerpo')
    {{-- <a href="{{ route('gestionar') }}">Gestion de productos<a>
         <a href="{{ route('gestionar-user') }}">Gestion de usuarios<a>
         <a href="">Gestion de stock y ventas<a> --}}
    <section class="mt-5" role="main">
        <article>
            <div class="container">
                <h1 class="display-3">Bienvenido/a</h1>
                <p>Aquí contarás con las opciones necesarias para ver y editar tanto usuarios como productos que están en la
                    base de datos.</p>
            </div>
        </article>
    </section>

    <main>
        <article class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h2>Gestión de Stock</h2>
                    <p>Sección donde están las opciones para editar productos y ver que categorias e imagen tienen. </p>
                    <p>
                        <a class="btn btn-primary" href="{{ route('gestionar') }}" role="button">Acceder</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Gestionar Usuarios</h2>
                    <p>Sección donde están las opciones para editar usuarios y ver que información e imagen tienen. </p>
                    <p>
                        <a class="btn btn-primary" href="{{ route('gestionar-user') }}" role="button">Acceder</a>
                    </p>
                </div>
                {{-- <div class="col-md-4 mb-5">
                    <h2>Gestión de stock y ventas</h2>
                    <p>En está sección no se que poner porque no se que va xd. </p>
                    <p>
                        <a class="btn btn-primary" href="{{ route('gestionar-user') }}" role="button">Acceder</a>
                    </p>
                </div> --}}
                <div class="col-md-4 mb-5">
                    <h2>Crear Categorias</h2>
                    <p>Sección donde está el formulario para crear una nueva categoria. </p>
                    <p>
                        <a class="btn btn-primary" href="{{ route('categorias.create') }}" role="button">Acceder</a>
                    </p>
                </div>
                <div class="col-md-4 mb-5">
                    <h2>Crear Producto</h2>
                    <p>Sección donde está el formulario para crear un nuevo producto. </p>
                    <p>
                        <a class="btn btn-primary" href="{{ route('catalogo.create') }}" role="button">Acceder</a>
                    </p>
                </div>
                <hr>
        </article>
        </div>
    </main>
@endsection

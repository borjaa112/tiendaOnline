@extends('storeaddress')
@section('titulo', 'Crear Dirección')
@section('cuerpo')
    {{-- <form action="/api/direccion" method="POST">
        @csrf
        @method('post')
        <input type="text" name="userId" value="{{$usuario}}" hidden>
            <input type=text" name="calle" id="calle" placeholder="calle">
            <input type=text" name="patio" id="patio" placeholder="patio">
            <input type=text" name="puerta" id="puerta" placeholder="puerta">
            <input type=text" name="numero" id="numero" placeholder="numero">
            <input type=text" name="cod_postal" id="cod_postal" placeholder="cod_postal">
            <input type=text" name="ciudad" id="ciudad" placeholder="ciudad">
            <input type=text" name="provincia" id="provincia" placeholder="provincia">
            <input type=text" name="pais" id="pais" placeholder="pais">
            <button type="submit" id="enviar">
    </form> --}}
    <section class="margenTop mb-5">
        <article>
            <div class="container py-5 register-form bg-dark bg-gradient text-light">
                <div class="form">
                    <div class="note">
                        <h1 class="p-3 text-center text-light">Nueva Dirección</h1>
                    </div>
                    <form action="/api/direccion"  method="POST" enctype="multipart/form-data" id="subirAddress">
                        @csrf
                        @method('post')
                        <input type="text" class="form-control" name="userId" value="{{ $usuario }}" hidden>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                        <label class="form-label" for="calle">Calle</label>
                                        <input type="text" name="calle" id="calle" placeholder="Calle" class="form-control">
                                        <p id="hid-calle" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                        <label class="form-label" for="patio">Patio</label>
                                        <input type="number" name="patio" id="patio" placeholder="Patio" class="form-control">
                                        <p id="hid-patio" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="puerta">Puerta</label>
                                        <input type="text" name="puerta" id="puerta" placeholder="Puerta" value="{{old('puerta')}}" class="form-control">
                                        <p id="hid-puerta" style="font-size: 11px; color: red;"></p>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="numero">Numero</label>
                                        <input type="number" name="numero" id="numero" placeholder="Numero" value="{{old('puerta')}}" class="form-control">
                                        <p id="hid-numero" style="font-size: 11px; color: red;"></p>

                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="cod_postal">Codigo Postal</label>
                                        <input type="number" name="cod_postal" id="cod_postal" placeholder="Codigo Postal" value="{{old('puerta')}}"  class="form-control">
                                        <p id="hid-cp" style="font-size: 11px; color: red;"></p>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="ciudad">Ciudad</label>
                                        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" value="{{old('puerta')}}" class="form-control">
                                        <p id="hid-ciudad" style="font-size: 11px; color: red;"></p>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="provincia">Provincia</label>
                                        <input type="text" name="provincia" id="provincia" placeholder="Provincia" value="{{old('puerta')}}" class="form-control">
                                        <p id="hid-provincia" style="font-size: 11px; color: red;"></p>

                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="pais">Pais</label>
                                        <input type="text" name="pais" id="pais" placeholder="Pais" value="{{old('puerta')}}" class="form-control">
                                        <p id="hid-pais" style="font-size: 11px; color: red;"></p>

                                    </div>
                                </div>
                            </div>
                            <div class="row mx-5 mt-5">
                                <button type="submit" id="enviar" value="{{old('puerta')}}" class="btn btn-primary  mt-4">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>
@endsection('cuerpo')

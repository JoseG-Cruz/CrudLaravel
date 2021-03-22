@extends('layouts.base')

<div class="container">
    <div class="row">
        <div class="col-md-7 mt-5">
        <!--Mensaje flash -->
        @if(session('usuarioGuardado'))
        <div class="alert">
            {{ session('usuarioGuardado') }}
        </div>
        @endif

        <!--Validación de errores -->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


            <div class="card">
            <form action="{{ url ('/save')}}" method="POST">
            @csrf
                    <div class="card">AGREGAR USUARIO</div>

                    <div class="card-body">
                        <div class="row">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form">
                        </div>

                        <div class="row">
                            <label for="" class="col-2">Email</label>
                            <input type="text" name="email" class="form">
                        </div>

                        <div class="row ">
                            <button type="submit" class="btn">Guardar</button>

                        </div>



                    </div>

                </form>


            </div>

        </div>

    </div>

<a class="btn btn-light btn-xs mt-5" href="{{ url ('/')}}"> volver</a>


</div>

@extends('layouts.base')

<div class="container">
    <div class="row">
        <div class="col">
        <!--Mensaje flash -->
        @if(session('usuarioModificado'))
        <div class="alert">
            {{ session('usuarioModificado') }}
        </div>
        @endif

        <!--Validación de errores -->
        @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


            <div class="card">
            <form action="{{ route('edit', $usuario->id) }}" method="POST">
            @csrf @method('PATCH')
                    <div class="card">MODIFICAR USUARIO</div>

                    <div class="card-body">
                        <div class="row ">
                            <label for="" class="col">Nombre</label>
                            <input type="text" name="nombre"
                        class="form" value="{{ $usuario->nombre }}">
                        </div>

                        <div class="row">
                            <label for="" class="col">Email</label>
                            <input type="text" name="email"
                             class="form" value="{{ $usuario->email }}">
                        </div>

                        <div class="row">
                            <button type="submit" class="btn">Modificar</button>

                        </div>



                    </div>

                </form>


            </div>

        </div>

    </div>

<a class="btn " href="{{ url ('/')}}">volver</a>


</div>

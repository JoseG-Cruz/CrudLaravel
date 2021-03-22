@extends('layouts.base')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2 class="text">Administración de usuarios</h2>
            <a class="btn" href="{{ url('/form') }}">Agregar usuario</a>
            <!--Mensaje flash -->
            @if(session('usuarioEliminado'))
            <div class="alert">
            {{ session('usuarioEliminado')}}
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->email }}</td>
                        <td>

                        <a href="{{ route ('editform', $user->id) }}" class="btn">
                            <i class="fas fa-pencil-alt "></i>
                        </a>


                        <form action="{{ route('delete', $user->id)}}" method="POST">
                            @csrf @method('DELETE')

                            <button type="submit" onclick="return confirm('¿Desea eliminar este usuario?');" class="btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        
                        </form>



                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
            {{ $users->links() }}

        </div>
    </div>
</div>
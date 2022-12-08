@extends('layouts.app')

@section('content')





<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Usuarios
        </h1>
        <main class="container">
        @include('partials.alerts')
        @yield('content')
        </main>



        <a class="btn btn-sm btn-success float-right" href="{{ route('admin.users.create') }}" role="button">Crear Usuario</a>

        <a class="btn btn-sm btn-success float-right" style="margin-right: 8px;" href="/blog" role="button">Mantenimiento de Foro</a>
    </div>
</div>


<div class="px-20 py-20">

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col" colspan="2">Accion</th>
    </tr>
  </thead>
  <tbody>

    @foreach($users as $user)
    <tr>  
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td style="width: 50px;">
          <a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user->id) }}" role="button">Editar</a>
          
      </td> 

      <td>
          <form id="delete-user-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" >
                    @csrf
                    @method("DELETE")
               <button type="submit" class="btn btn-sm btn-danger" 
                    onclick="return confirm('Esta seguro de que quiere eliminar el Usuario: {{$user->id}}'); event.preventDefault();" 
                    
                   
                    >
            Borrar
          </button>
            </form>
      </td>

      
    </tr>
    @endforeach


  </tbody>
</table>

    {{ $users->links() }}


</div>






@endsection
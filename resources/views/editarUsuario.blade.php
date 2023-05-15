@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Editar Usuarios:</h2>

<div class="card-body">
    
                    <form method="POST" id="formularioRegisCurso" action="RegistroChat.php">
                        @csrf

                </div>
               
                <div > 


   
      <p class="card-text">
      <div class="table-responsive">  
        <table class="">
            <thead>
            <td class="col-md-1 ">id</td>
              <td class="col-md-3 ">Nombre</td>
              <td class="col-md-3 ">Email</td>
              <td class="col-md-1 ">Rol</td>
              <td class="col-md-2 ">Cuenta creada</td>
              <td class="col-md-2 ">Ultima modificacion</td>
            </thead>
            <tbody class="table">
              @foreach ($datos as $item)
              <tr>
              <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->rol}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                 
              </tr>
              @endforeach
            </tbody>

        </table>

      </p>
      




                </div> <br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modificar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>




                
@endsection

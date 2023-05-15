@extends('layouts.app')

@section('content')
<div><br>
<h2 class="text-100 text-center">Panel Administrador:</h2>

<div class="card-body">
    
                    <form id="formularioRegisCurso" action="editarUsuario">
                        @csrf

                        <div class="row text-center" >
                        <div class="col-md-6 form-group ">
                           
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modificar Usuarios') }}
                                </button>
                            </div>
                            </form>
                            
                            <div class="col-md-5 form-group ">
                            <form action="editarChatBot">
                                <button type="submit" class="btn btn-primary" action="editarChatBot">
                                    {{ __('Modificar ChatBot') }}
                                </button>
                            </div>
                            </div>
                        <br>
                        
                </div>
                <br>


                       
                    </form>

                </div>
                </div>
@endsection

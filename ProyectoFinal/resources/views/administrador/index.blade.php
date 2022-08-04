
@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
    <div style="text-align: center" class="alert alert-success" role="alert">

    {{Session::get('mensaje')}}
    

    </div>

@endif



<a href="{{url('administrador/create')}}" class="btn btn-success"> Registrar nuevo libro </a>
<br>
<br>
<table class="table table-dark table-striped" style="text-align:center;vertical-align:middle;border-color:white; border:2px">

    <thead class="thead-dark" style="text-align:center;vertical-align:middle;border-collapse:collapse">
        <tr>

            
            <th>Titulo</th>
            <th>Isbn</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Año de publicacion</th>
            <th>Cantidad de ejemplares</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($administradores as $administrador)
    
        <tr>
            <td>{{$administrador->Titulo}}</td>
            <td>{{$administrador->Isbn}}</td>
            <td>{{$administrador->Autor}}</td>
            <td>{{$administrador->Editorial}}</td>
            <td>{{$administrador->Año}}</td>
            <td>{{$administrador->Ejemplares}}</td>
            <td>{{$administrador->Precio}}</td>

            <td>
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$administrador->Imagen}}" width="150" alt="">
                
            
            </td>

            <td>{{$administrador->Descripcion}}</td>
            <td>
                
                <a href="{{url('/administrador/'.$administrador->id.'/edit')}}" class="btn btn-warning" style="margin-bottom: 15px">
                    Editar
                </a>
                
                <form action="{{ url('/administrador/'.$administrador->id)}}" class="d-inline" class="btn btn-danger" method="POST">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-danger d-inline"  onclick="return confirm('¿Esta seguro que desea borrar el libro?')"
                value="Borrar" >
                </form>
                </td>

                
        </tr>
        
            
        @endforeach
    </tbody>

</table>
<div class="row">
    <div class="col-12 d-flex pt-5 justify-content-center">
{!!$administradores->links()!!}
    </div>
</div>
</div>

@endsection
@extends('layouts.app')
@section('content')
<div class="container">



<table class="table table-dark table-striped" style="text-align:center;vertical-align:middle;border-color:white; border:2px">

    <thead class="thead-dark" style="text-align:center;vertical-align:middle;border-collapse:collapse">
        <tr>

            
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($clientes as $cliente)
    
        <tr>
            <td>{{$cliente->Nombre}}</td>
            <td>{{$cliente->Apellido}}</td>
            <td>{{$cliente->Correo}}</td>

            <td>
                
                <a class="btn btn-success">
                    Enviar correo
                </a>

                
                
        </tr>
        
            
        @endforeach
    </tbody>

</table>
<div class="row">
    <div class="col-12 d-flex pt-5 justify-content-center">
{!!$clientes->links()!!}
    </div>
</div>
</div>

@endsection
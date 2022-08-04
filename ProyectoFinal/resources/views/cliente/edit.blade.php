@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente-editar</title>
</head>
<body>
    @section('content')
<div class="container">


<form action="{{url('/cliente/'.$cliente->id)}}" method="POST" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}

@include('cliente.form',['modo'=>'Editar']);

</form>

</div>
@endsection
</body>
</html>

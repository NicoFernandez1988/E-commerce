@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente-crear</title>
</head>
<body>
    @section('content')
<div class="container">

<form action="{{url('/cliente')}}" method="POST">  
    @csrf
    @include('cliente.form',['modo'=>'Registrar']);
   

    </form>

</div>
@endsection
</body>
</html>

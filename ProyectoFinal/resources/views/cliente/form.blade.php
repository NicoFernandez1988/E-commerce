
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> {{$modo}} cliente </h1>



 @if(count($errors)>0)

    

    <div class="alert alert-danger" role="alert">
<ul>
        @foreach ($errors->all() as $error)
       <li> {{$error}} </li>
        @endforeach
</ul>
    </div>

      

 @endif

 
<div class="form-group">
 <input type="text" class="form-control" name="Nombre" autocomplete="off" value="{{isset($cliente->Nombre)?$cliente->Nombre:old('Nombre')}}" id="Nombre" placeholder="Nombre">
 <br>
</div>

<div class="form-group">
 <input type="text" class="form-control" name="Apellido" autocomplete="off" value="{{isset($cliente->Apellido)?$cliente->Apellido:old('Apellido')}}" id="Apellido" placeholder="Apellido">
 <br>
</div>

<div class="form-group">
 <input type="email" class="form-control" name="Correo" autocomplete="off" value="{{isset($cliente->Correo)?$cliente->Nombre:old('Correo')}}" id="Correo" placeholder="Correo">
 <br>
</div>

 <div class="form-group">
 <input type="password" class="form-control" name="Contraseña" autocomplete="off" value="{{isset($cliente->Contraseña)?$cliente->Contraseña:old('Contraseña')}}" id="Contraseña" placeholder="Contraseña">
 <br>
</div>

 

 <input class="btn btn-success" type="submit" value="{{$modo}} datos">

 <a class="btn btn-primary" href="{{url('administrador/')}}"> Volver </a>
<br>
</body>
</html>


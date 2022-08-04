<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> {{$modo}} libro </h1>



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
 <input type="text" class="form-control" name="Titulo" autocomplete="off" value="{{isset($administrador->Titulo)?$administrador->Titulo:old('Titulo')}}" id="Titulo" placeholder="Titulo">
 <br>
</div>

<div class="form-group">
 <input type="number" class="form-control" name="Isbn" autocomplete="off" value="{{isset($administrador->Isbn)?$administrador->Isbn:old('Isbn')}}" id="Isbn" placeholder="Isbn">
 <br>
</div>

<div class="form-group">
 <input type="text" class="form-control" name="Autor" autocomplete="off" value="{{isset($administrador->Autor)?$administrador->Autor:old('Autor')}}" id="Autor" placeholder="Autor">
 <br>
</div>

 <div class="form-group">
 <input type="text" class="form-control" name="Editorial" autocomplete="off" value="{{isset($administrador->Editorial)?$administrador->Editorial:old('Editorial')}}" id="Editorial" placeholder="Editorial">
 <br>
</div>

 <div class="form-group">
 <input type="number" class="form-control" name="Año" autocomplete="off" value="{{isset($administrador->Año)?$administrador->Año:old('Año')}}" id="Año" placeholder="Año de publicacion">
 <br>
</div>

 <div class="form-group">
 <input type="number" class="form-control" name="Ejemplares" autocomplete="off" value="{{isset($administrador->Ejemplares)?$administrador->Ejemplares:old('Ejemplares')}}" id="Ejemplares" placeholder="Ejemplares disponibles">
 <br>
</div>

 <div class="form-group">
 <input type="number" class="form-control" step="any" name="Precio" autocomplete="off" value="{{isset($administrador->Precio)?$administrador->Precio:old('Precio')}}" id="Precio" placeholder="Precio" step="0.001">
 <br>
</div>

<div class="form-group">
 <label for="Imagen"> Imagen del libro</label>
 <br>
 @if (isset($administrador->Imagen))
     
 <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$administrador->Imagen}}" alt="" width="150">

 @endif
 <input type="file" class="form-control" name="Imagen" value="" id="Imagen" placeholder="Imagen del libro">
 <br>
</div>

<div class="form-group">
 <input type="text" class="form-control" name="Descripcion" autocomplete="off" value="{{isset($administrador->Descripcion)?$administrador->Descripcion:old('Descripcion')}}" id="Descripcion" placeholder="Descripcion del libro">
 <br>
</div>

 <input class="btn btn-success" type="submit" value="{{$modo}} datos">

 <a class="btn btn-primary" href="{{url('administrador/')}}"> Volver </a>
<br>
</body>
</html>

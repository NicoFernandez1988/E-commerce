
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="css/estilos.css">
	

</head>  
<body>
 <form class="formulario" style="margin-top: 60px" action="{{url('/cliente')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Registrate</h1>

    @if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
       <ul>
           @foreach ($errors->all() as $error)
               <li> {{$error}} </li>
           @endforeach
       </ul>
   </div>

    @endif




     <div class="contenedor">
     
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Nombre" name="Nombre" autocomplete="off" value="{{isset($cliente->Nombre)?$cliente->Nombre:old('Nombre')}}" id="Nombre">
            
            </div>
   
            <div class="input-contenedor">
               <i class="fas fa-user icon"></i>
               <input type="text" placeholder="Apellido"  name="Apellido" autocomplete="off" value="{{isset($cliente->Apellido)?$cliente->Apellido:old('Apellido')}}" id="Apellido">
               
               </div>
            
            <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" placeholder="Correo Electronico" name="Correo" autocomplete="off" value="{{isset($cliente->Correo)?$cliente->Correo:old('Correo')}}" id="Correo">
            
            </div>
            
            <div class="input-contenedor">
           <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" name="Contraseña" autocomplete="off" value="{{isset($cliente->Contraseña)?$cliente->Contraseña:old('Contraseña')}}" id="Contraseña">
            
         
         </div>
         <input type="submit" value="Registrate" class="button" href="{{ url('index2/') }}">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="{{ url('logueo/') }}">Iniciar Sesion</a></p>
         <a class="link2" href="{{ url('welcome/') }}">Volver al inicio</a>
     </div>
    </form>
</body>
</html>
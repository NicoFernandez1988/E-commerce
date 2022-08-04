

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
    <form class="formulario">
    
    <h1>Iniciar sesion</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="off" >
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
         
         </div>
         <input type="submit" value="Iniciar sesion" class="button" href="{{ url('index2/') }}">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="{{ url('registro/') }}">Registrate </a></p>
		 <a class="link2" href="{{ url('welcome/') }}">Volver al inicio</a>
        
     </div>
    </form>
</body>
</html>



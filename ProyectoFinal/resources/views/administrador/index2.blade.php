<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script type="text/javascript" src="js/scripts2.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Booktools-Tienda</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles2.css" rel="stylesheet" />  
        <link href="css/estilo.css" rel="stylesheet" />
        <script src="js/functions.js"></script>
     
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5" >
                
                <a class="navbar-brand inicio"   href="{{ url('welcome/') }}" >Booktools-Inicio</a>
              
                <!-- Barra de busqueda-->
                <nav class="navbar navbar-light bg-light float-right" >
                    <div class="container-fluid"   >
                      <form class="d-flex">
                        <input name="buscar" class="form-control me-2" type="search" placeholder="Titulo..." autocomplete="off" aria-label="Search" style="width: 80%">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                      </form>
                    </div>
                  </nav>

                <!-- Carrito de compras-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse carrito" id="navbarSupportedContent" style="margin-left: 17%">
                    
                    <form class="d-flex carrito" >
                        <button class="btn btn-outline-dark botonComprar" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Comprar
                            <span class="badge bg-dark text-white ms-1 rounded-pill" type="number" id="contador"  readonly>0</span>
                        </button>
                    </form>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header  >
            <h1 class="display-4 fw-bolder text-center text-white titulo ">¡Bienvenidos a nuestra tienda!</h1>
            
            <div class=" slider" >
                
                <ul>
                    
                    <li><img src="https://static01.nyt.com/images/2019/09/15/multimedia/15Librerias-ESPANOL/15Librerias-ESPANOL-superJumbo.jpg" alt=""></li>
                    <li><img src="https://static.eldiario.es/clip/4afede85-69c5-4bb8-93b2-905188d1936e_16-9-discover-aspect-ratio_default_1018632.jpg" alt=""></li>
                    <li><img src="https://estaticos-cdn.elperiodico.com/clip/316350f8-6dde-4bd9-9586-dab755d3d3cf_alta-libre-aspect-ratio_default_0.jpg" alt=""></li>
                    <li><img src="https://estaticos-cdn.elperiodico.com/clip/c4a37385-4964-40f0-b0d0-d3e8c43f3fda_alta-libre-aspect-ratio_default_0.jpg" alt=""></li>
                </ul>
                <div class="text-center text-white div1">
                    <h1 class="display-4 fw-bolder">Bienvenidos a la tienda!!!</h1>
                    <p  class="lead fw-normal text-white-50 mb-0 parrafo1" id="descripcion">Solo por hoy, hasta 6 cuotas sin interes con todas las tarjetas!!!</p>
                </div>
            </div>

            
        </header>
        <!-- Seccion para sumar al carro:
            <div class="container">
            <span id="contador">0</span>
            <button class="boton agregar">Agregar</button>
        </div>-->

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    


                    @foreach ($administradores as $administrador)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h4 class="fw-bolder">{{$administrador->Titulo}}</h4>
                                </div>
                            </div>
                            <!-- Product image-->
                            <div class="doc" >
                            <img class="card-img-top img-thumbnail img-fluid" width="150" src="{{asset('storage').'/'.$administrador->Imagen}}" alt="..." />
                            </div>
                            <!-- Product details-->
                            <div class="card-body p-4" class="btn btn-outline-dark mt-auto">
                                <div class="text-center" class="btn btn-outline-dark mt-auto">
                                    <p class="fw-bolder">Autor: {{$administrador->Autor}}</p>
                                    <p class="fw-bolder">Editorial: {{$administrador->Editorial}}</p>
                                    <p class="fw-bolder">Ejemplares: {{$administrador->Ejemplares}}</p>
                                    <h4 class="fw-bolder btn btn-success"> Precio $ {{$administrador->Precio}}</h4>
                                    
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div  class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" id="button" class="ui-state-default ui-corner-all" >Ver descripcion</a></div>
                                <br>
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto boton agregar" href="#">Agregar al carro</a></div>
                                
                            </div>
                        </div>
                        
                    </div>
                  
                    @endforeach

                    <div class="row">
                        <div class="col-12 d-flex pt-5 justify-content-center">
                    {!!$administradores->links()!!}
                        </div>
                    </div>
                   
                   
        </section>
        <!-- Footer-->
        <footer class="py-5" >
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bookloots -todos los derechos reservados- 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
  
    </body>
  
</html>
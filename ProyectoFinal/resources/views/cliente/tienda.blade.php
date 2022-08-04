<!DOCTYPE html>
<html lang="en">
    <head>
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
    </head>
    <body style="background: linear-gradient(to right, rgb(26, 209, 200), rgb(14, 84, 212))">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Booktools</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <form class="d-flex" style="margin-left: 87%">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carro
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                    @foreach ($administradores as $administrador)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$administrador->Titulo}}</h5>
                                    <!-- Product price-->
                                    {{$administrador->Precio}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $120.00 - $280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts2.js"></script>
    </body>
</html>
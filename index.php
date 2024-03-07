<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css"> -->

    <title>Hello, world!</title>
    <?php
        wp_head()
    ?>
</head>

<body>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container mw-100">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- fin menu -->

    <!-- blog -->
    <div class="container">
        <h2 class="my-5 text-center text-primary">Mi Blog Personal</h2>
        <hr>
        <div class="row">
            <div class="col-lg-9">
                <div class="card mb-5" style="border: 0px">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <a href="single.html">
                            <h2 class="card-title">Titulo de la entrada</h2>
                        </a>
                        <p class="small mt-1 mb-0">Fecha: 06-03-2024</p>
                        <p class="small mb-0">Autor: adhentux</p>
                        <p class="small">Categorias: <a href="#">Animales</a>/<a href="#">Comida</a> Etiquetas: <a
                                href="#">Azul</a>/<a href="#">Verde</a></p>
                        <img class="img-fluid mb-3" src="https://via.placeholder.com/1200x360">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="single.html" class="btn btn-primary">Mas Info</a>
                    </div>
                </div>

                <div class="card mb-5" style="border: 0px">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <a href="single.html">
                            <h2 class="card-title">Titulo de la entrada</h2>
                        </a>
                        <p class="small mt-1 mb-0">Fecha: 06-03-2024</p>
                        <p class="small mb-0">Autor: adhentux</p>
                        <p class="small">Categorias: <a href="#">Animales</a>/<a href="#">Comida</a> Etiquetas: <a
                                href="#">Azul</a>/<a href="#">Verde</a></p>
                        <img class="img-fluid mb-3" src="https://via.placeholder.com/1200x360">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="single.html" class="btn btn-primary">Mas Info</a>
                    </div>
                </div>


                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#">anterior</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="card-body">
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="https://via.placeholder.com/360x600" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
    <!-- fin blog -->

    <footer class="container-fluid py-4 text-center text-light bg-dark fixed-bottom">
        <h5>
            footer
        </h5>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->

    <?php 
        wp_footer()
    ?>
</body>

</html>
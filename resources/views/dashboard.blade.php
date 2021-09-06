<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Página web de la copa chavos-rucos country 2021">
        <meta name="author" content="Creative Tim">
        <title>TORNEO CHAVOS-RUCOS</title>
        <!-- Favicon -->
        <link rel="icon" href="../../assets/img/LOGO.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <script> src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js" </script>
    </head>
    <body>
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Carts -->
            <div class="header pb-8 bg-default" style="background:#34944e">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center">
                        <div class="col-xl-3" style="text-align:center">
                            <img src="../../assets/img/ing.png" style="height:100px; margin-top:5%">
                        </div>
                        <div class="col-xl-6" style="margin-top:5%">
                            <h1 class="display-3 text-white" style="text-align:center">COPA CHAVOS-RUCOS</h1>
                            <h2 class="text-white" style="text-align:center"> COUNTRY CLUB LAS HUERTAS </h2>
                            <h2 class="text-white" style="text-align:center"> XXXIX ANIVERSARIO</h2>
                          <!--  <img src="https://www.tenvinilo.com/vinilos-decorativos/img/preview/vinilo-infantil-pelota-futbol-color-1399.png" width="100" height="100" id="pelota" style="margin-left:auto; margin-right:auto"> -->
                        </div>
                        <div class="col-xl-3" style="text-align:center">
                            <img src="../../assets/img/LOGO.png" style="height:100px; margin-top:5%">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Page content  -->
            <div class="container-fluid mt--6" style="background:#b8c2ff" >
            <div class="header-body">
                        <div class="col-xl-12"  >
                            <h1 class="display-3 text-white" style="text-align:center">CALENDARIO</h1>
                        </div>
                <!-- Card stats -->
                <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Jornada 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Jornada 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Jornada 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Jornada 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Jornada 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Jornada 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Jornada 7</a>
                    </li>
                </ul>
                </div>
                <div class="card shadow" style="background:#b8c2ff">
                <div class="card-body">
                        <div class="tab-content" style="background:#b8c2ff" id="myTabContent">
                            <div class="tab-pane fade show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                            <div class="row">
                            <div class="col-xl-3">
                                    <div class="card card-stats bg-danger">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h4 class="card-title text-uppercase text-white mb-0">Amigos Country - 1</h3>
                                                    <h4 class="card-title text-uppercase text-white mb-0">VS </h3>
                                                    <h4 class="card-title text-uppercase text-white mb-0">Atlético Fénix - 0</h3>
                                                    <span class="h6 font-weight-bold text-yellow text-justify mb-0">Finalizado:</span>
                                                    <span class="h6 font-weight-bold text-yellow text-justify mb-0">Pierde Atlético Fénix por infracción al reglamento</span>
                                                    <button class="btn btn-icon btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i class="fas fa-images"></i></span>
                                                        <a class="h5 font-weight-bold text-white mb-0" href="https://drive.google.com/drive/folders/1piW45UgXZg5RPpG3l7DavY3IuDCg0nUn?usp=sharing" target="_blank">Ver galería</a>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats bg-danger"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="card-title text-white text-uppercase mb-0">Tenisticos FC - 6</h4>
                                                    <h4 class="card-title text-white text-uppercase mb-0">VS </h4>
                                                    <h4 class="card-title text-white text-uppercase mb-0">Vodka JRS - 3</h4>
                                                    <span class="h6 text-yellow font-weight-bold mb-0">Finalizado</span>
                                                    <button class="btn btn-icon btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i class="fas fa-images"></i></span>
                                                        <a class="h5 font-weight-bold text-white mb-0" href="https://drive.google.com/drive/folders/1KPuZPE0rgl80iwEI139w17CkTFAZRYSn?usp=sharing" target="_blank">Ver galería</a>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats bg-danger">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="card-title text-white text-uppercase mb-0">Sel. Guadalupe - 2</h3>
                                                    <h4 class="card-title text-white text-uppercase mb-0">VS </h3>
                                                    <h4 class="card-title text-white text-uppercase mb-0">Ing. Prado FC - 3</h3>
                                                    <span class="h6 text-yellow font-weight-bold mb-0">Finalizado</span>
                                                    <button class="btn btn-icon btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i class="fas fa-images"></i></span>
                                                        <a class="h5 font-weight-bold text-white mb-0" href="https://drive.google.com/drive/folders/1kB9JjfJqVMWF4vp5F7P14Vgs09Aa34tD?usp=sharing" target="_blank">Ver galería</a>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats bg-danger">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-white text-uppercase mb-0">DESCANSA</h3>
                                                    <h3 class="card-title text-white text-uppercase mb-0">Natación FC</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats bg-danger" >
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h4 class="card-title text-uppercase text-white mb-0">Natación FC - 1</h4>
                                                    <h4 class="card-title text-uppercase text-white mb-0">VS </h4>
                                                    <h4 class="card-title text-uppercase text-white mb-0">Ing. Prado FC - 3</h4>
                                                    <span class="h6 text-yellow font-weight-bold mb-0">Finalizado</span>
                                                    <button class="btn btn-icon btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i class="fas fa-images"></i></span>
                                                        <a class="h5 font-weight-bold text-white mb-0" href="https://drive.google.com/drive/folders/1qroTvdBX5qB3gKC-RxowM1vP6pLSghp8?usp=sharing" target="_blank">Ver galería</a>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats bg-danger">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="card-title text-uppercase text-white mb-0">Tenisticos FC - 1</h4>
                                                    <h4 class="card-title text-uppercase text-white mb-0">VS </h4>
                                                    <h4 class="card-title text-uppercase text-white mb-0">Sel. Guadalupe - 2</h4>
                                                    <span class="h6 text-yellow font-weight-bold mb-0">Finalizado</span>
                                                    <button class="btn btn-icon btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i class="fas fa-images"></i></span>
                                                        <a class="h5 font-weight-bold text-white mb-0" href="https://drive.google.com/drive/folders/1YP0wE2mNhfrDph_PfA6CIELU_Yn0mPsF?usp=sharing" target="_blank">Ver galería</a>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats bg-danger">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h4 class="card-title text-uppercase text-white mb-0">Vodka Jrs. - 0</h4>
                                                    <h4 class="card-title text-uppercase text-white mb-0">VS </h4>
                                                    <h4 class="card-title text-uppercase text-white mb-0">Atlético Fénix - 1</h4>
                                                    <span class="h6 text-yellow font-weight-bold mb-0">Finalizado</span>
                                                    <button class="btn btn-icon btn-primary" type="button">
                                                        <span class="btn-inner--icon"><i class="fas fa-images"></i></span>
                                                        <a class="h5 font-weight-bold text-white mb-0" href="https://drive.google.com/drive/folders/1xzViN-MhMlqU2ouaWOQrGwsTd6VT4oRz?usp=sharing" target="_blank">Ver galería</a>
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats bg-danger">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase  text-white mb-0">DESCANSA</h3>
                                                    <h3 class="card-title text-uppercase text-white mb-0">Amigos Country</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-yellow rounded-circle shadow" style="background:#b0021f">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Amigos Country</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Sel. Guadalupe</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 18 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Tenisticos FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Natación FC</h3>
                                                    <span class="h6 font-weight-bold mb-0">Domingo 19 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Vodka Jrs.</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Ing. Prado FC</h3>
                                                    <span class="h6 font-weight-bold mb-0">Domingo 19 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">10:30 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">DESCANSA</h3>
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Vodka Jrs.</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Sel. Guadalupe</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 25 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Ing. Prado FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 25 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">10:30 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Amigos Country</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Natación FC</h3>
                                                    <span class="h6 font-weight-bold mb-0">Domingo 26 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">DESCANSA</h3>
                                                    <h3 class="card-title text-uppercase mb-0">Tenisticos FC</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Sel. Guadalupe</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 2 de octubre 2021</span>
                                                    <p class="h5 font-weight-bold mb-0">9:00 am</p>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Tenisticos FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Amigos Country</h3>
                                                    <span class="h6 font-weight-bold mb-0">Domingo 3 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Vodka Jrs.</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Natación FC</h3>
                                                    <span class="h6 font-weight-bold mb-0">Domingo 3 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">10:30 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">DESCANSA</h3>
                                                    <h3 class="card-title text-uppercase mb-0">Ing. Prado FC</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-icons-text-7" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Tenisticos FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Ing. Prado FC</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 9 de octubre 2021</span>
                                                    <p class="h5 font-weight-bold mb-0">9:00 am</p>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Vodka Jrs.</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Amigos Country</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 9 de octubre 2021</span>
                                                    <p class="h5 font-weight-bold mb-0">10:30 am</p>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Natación FC</h3>
                                                    <span class="h6 font-weight-bold mb-0">Domingo 10 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">DESCANSA</h3>
                                                    <h3 class="card-title text-uppercase mb-0">Sel. Guadalupe</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            
                        <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Tenisticos FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 11 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Natación FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Sel. Guadalupe</h3>
                                                    <span class="h6 font-weight-bold mb-0">Sábado 11 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">10:30 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Amigos Country</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Ing. Prado FC</h3>
                                                    <span class="h6 font-weight-bold mb-0">Domingo 12 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">DESCANSA</h3>
                                                    <h3 class="card-title text-uppercase mb-0">Vodka Jrs.</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-xl-12">
                        <h1 class="display-3 text-default" style="text-align:center">ESTADÍSTICAS</h1>
                    </div>
                </div>
                <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tab-general" role="tab" aria-controls="tabs-icons-text-1" aria-selected="false">Tabla general</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tab-gols" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Goleadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#ofensiva" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Ofensiva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#defensiva" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Defensiva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#expulsiones" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Sancionados</a>
                    </li>
                </ul>
                </div>

                <div class="card shadow" style="background:#b8c2ff">
                <div class="card-body">
                    <div class="tab-content" style="background:#b8c2ff" id="myTabContent">
                        
                        <div class="tab-pane fade show active" id="tab-general" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h1 class="display-3 text-default" style="text-align:center">TABLA DE POSICIONES</h1>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div>
                                <table class="table align-items-center" style="background:#bae3c5">
                                    <thead class="bg-default text-white">
                                        <tr>
                                            <th scope="col" style="width:2px">Pos</th>
                                            <th scope="col">Equipo</th>
                                            <th scope="col" style="width:2px">PJ</th>
                                            <th scope="col" style="width:2px">PTS</th>
                                            <th scope="col" style="width:2px">GF</th>
                                            <th scope="col" style="width:2px">GC</th>
                                            <th scope="col" style="width:2px">DG</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                    <tr>
                                            <td class="budget">
                                                1
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/ing.png">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Ing. Prado FC</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                            <td>
                                                <span class="status">6 pts</span>
                                            </td>
                                            <td>
                                                <span class="status">6</span>
                                            </td>
                                            <td>
                                                <span class="status">3</span>
                                            </td>
                                            <td>
                                                <span class="status">+3</span>
                                            </td>
                                         </tr>
                                        <tr>
                                            <td class="budget">
                                                2
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/tenis.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Tenisticos FC</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                            <td>
                                                <span class="status">3 pts</span>
                                            </td>
                                            <td>
                                                <span class="status">7</span>
                                            </td>
                                            <td>
                                                <span class="status">5</span>
                                            </td>
                                            <td>
                                                <span class="status">+2</span>
                                            </td>
                                         </tr>
                                        <tr>
                                            <td class="budget">
                                                3
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/amigos.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Amigos Country</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">3 pts</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">0</span>
                                            </td>
                                            <td>
                                                <span class="status">+1</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="budget">
                                                4
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/sel.png">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Sel. Guadalupe</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                            <td>
                                                <span class="status">3 pts</span>
                                            </td>
                                            <td>
                                                <span class="status">4</span>
                                            </td>
                                            <td>
                                                <span class="status">4</span>
                                            </td>
                                            <td>
                                                <span class="status">0</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                5
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/fenix.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Atlético Fénix</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                            <td>
                                                <span class="status">3 pts</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">0</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                6
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/natacion.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Natación FC</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">0 pts</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">3</span>
                                            </td>
                                            <td>
                                                <span class="status">-2</span>
                                            </td>
                                         </tr>
                                        <tr>
                                            <td class="budget">
                                                7
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/índice.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Vodka Juniors</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                            <td>
                                                <span class="status">0 pts</span>
                                            </td>
                                            <td>
                                                <span class="status">3</span>
                                            </td>
                                            <td>
                                                <span class="status">7</span>
                                            </td>
                                            <td>
                                                <span class="status">-4</span>
                                            </td>
                                         </tr>
                                </table>
                                </div>
                            </div>
                        </div>  
                        <div class="tab-pane fade" id="tab-gols" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                                <div class="col-xl-12">
                                    <h1 class="display-3 text-default" style="text-align:center">TABLA DE GOLEADORES</h1>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div>
                                <table class="table align-items-center" style="background:#bae3c5">
                                    <thead class="bg-default text-white">
                                        <tr>
                                            <th scope="col" >Pos</th>
                                            <th scope="col" >Jugador</th>
                                            <th scope="col" >Equipo</th>
                                            <th scope="col" >G</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="budget">
                                                1
                                            </td>
                                            <td>
                                                <span class="status">Ricardo Palmerin</span>
                                            </td>
                                            <td>
                                                <span class="status">TENISTICOS FC</span>
                                            </td>
                                            <td>
                                                <span class="status">3</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                2
                                            </td>
                                            <td>
                                                <span class="status">Juan Heredia</span>
                                            </td>
                                            <td>
                                                <span class="status">TENISTICOS FC</span>
                                            </td>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                2
                                            </td>
                                            <td>
                                                <span class="status">Francisco Garibay</span>
                                            </td>
                                            <td>
                                                <span class="status">TENISTICOS FC</span>
                                            </td>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                2
                                            </td>
                                            <td>
                                                <span class="status">Arturo Herreros</span>
                                            </td>
                                            <td>
                                                <span class="status">VODKA JRS.</span>
                                            </td>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                2
                                            </td>
                                            <td>
                                                <span class="status">Gregorio Ruiz</span>
                                            </td>
                                            <td>
                                                <span class="status">SEL. GUADALUPE</span>
                                            </td>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                2
                                            </td>
                                            <td>
                                                <span class="status">Daniel Aguilar</span>
                                            </td>
                                            <td>
                                                <span class="status">ING. PRADO FC</span>
                                            </td>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Alexis Herreros</span>
                                            </td>
                                            <td>
                                                <span class="status">VODKA JRS.</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Gerardo Color</span>
                                            </td>
                                            <td>
                                                <span class="status">TENISTICOS FC</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Valentín Cervantes</span>
                                            </td>
                                            <td>
                                                <span class="status">ING. PRADO FC</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">José Rodríguez</span>
                                            </td>
                                            <td>
                                                <span class="status">ING. PRADO FC</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Oscar Tovar</span>
                                            </td>
                                            <td>
                                                <span class="status">SEL. GUADALUPE</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Vladimir Vázquez</span>
                                            </td>
                                            <td>
                                                <span class="status">ING. PRADO FC</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Hugo Aguilera</span>
                                            </td>
                                            <td>
                                                <span class="status">ING. PRADO FC</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Joel Calderón</span>
                                            </td>
                                            <td>
                                                <span class="status">NATACIÓN FC</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Alain Infante</span>
                                            </td>
                                            <td>
                                                <span class="status">ATLÉTICO FÉNIX</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">Octavio Sánchez</span>
                                            </td>
                                            <td>
                                                <span class="status">SEL. GUADALUPE</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                </table>
                                </div>
                            </div>
                        </div> 


                        <div class="tab-pane fade" id="ofensiva" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                                <div class="col-xl-12">
                                    <h1 class="display-3 text-default" style="text-align:center">MEJOR OFENSIVA</h1>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div>
                                <table class="table align-items-center" style="background:#bae3c5">
                                    <thead class="bg-default text-white">
                                        <tr>
                                            <th scope="col" >Po</th>
                                            <th scope="col" >Equipo</th>
                                            <th scope="col" >GF</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="budget">
                                                1
                                            </td>
                                            <td>
                                                <span class="status">TENISTICOS FC</span>
                                            </td>
                                            <td>
                                                <span class="status">7</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                2
                                            </td>
                                            <td>
                                                <span class="status">ING. PRADO FC</span>
                                            </td>
                                            <td>
                                                <span class="status">6</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">SEL. GUADALUPE</span>
                                            </td>
                                            <td>
                                                <span class="status">4</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                4
                                            </td>
                                            <td>
                                                <span class="status">VODKA JRS.</span>
                                            </td>
                                            <td>
                                                <span class="status">3</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                5
                                            </td>
                                            <td>
                                                <span class="status">NATACIÓN FC</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                6
                                            </td>
                                            <td>
                                                <span class="status">AMIGOS COUNTRY</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                7
                                            </td>
                                            <td>
                                                <span class="status">ATLÉTICO FÉNIX</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                </table>
                                </div>
                            </div>
                        </div> 

                        <div class="tab-pane fade" id="expulsiones" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                                <div class="col-xl-12">
                                    <h1 class="display-3 text-default" style="text-align:center">SANCIONADOS</h1>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div>
                                <table class="table align-items-center" style="background:#bae3c5">
                                    <thead class="bg-default text-white">
                                        <tr>
                                            <th scope="col" >Jornada</th>
                                            <th scope="col" >Jugador</th>
                                            <th scope="col" >Equipo</th>
                                            <th scope="col" >Fechas</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">Rodolfo Isai Aguilar</span>
                                            </td>
                                            <td>
                                                <span class="status">Atlético Fénix</span>
                                            </td>
                                            <td>
                                                <span class="status">Sin suspensión para jornada 2 por doble amarilla</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                            <td>
                                                <span class="status">Jorge Humberto Fernández</span>
                                            </td>
                                            <td>
                                                <span class="status">Sel.Guadalupe</span>
                                            </td>
                                            <td>
                                                <span class="status"></span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <span class="status">2</span>
                                            </td>
                                            <td>
                                                <span class="status">Sergio Gaona</span>
                                            </td>
                                            <td>
                                                <span class="status">Vodka Jrs.</span>
                                            </td>
                                            <td>
                                                <span class="status">Sin suspensión para jornada 2 por doble amarilla</span>
                                            </td>
                                         </tr>
                                </table>
                                </div>
                            </div>
                        </div> 


                        <div class="tab-pane fade" id="defensiva" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="row">
                                <div class="col-xl-12">
                                    <h1 class="display-3 text-default" style="text-align:center">MEJOR DEFENSIVA</h1>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div>
                                <table class="table align-items-center" style="background:#bae3c5">
                                    <thead class="bg-default text-white">
                                        <tr>
                                            <th scope="col" >Pos</th>
                                            <th scope="col" >Equipo</th>
                                            <th scope="col" >GC</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="budget">
                                                1
                                            </td>
                                            <td>
                                                <span class="status">AMIGOS COUNTRY</span>
                                            </td>
                                            <td>
                                                <span class="status">0</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                2
                                            </td>
                                            <td>
                                                <span class="status">ATLÉTICO FÉNIX</span>
                                            </td>
                                            <td>
                                                <span class="status">1</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                3
                                            </td>
                                            <td>
                                                <span class="status">NATACIÓN FC</span>
                                            </td>
                                            <td>
                                                <span class="status">3</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                4
                                            </td>
                                            <td>
                                                <span class="status">ING. PRADO FC</span>
                                            </td>
                                            <td>
                                                <span class="status">3</span>
                                            </td>
                                        </tr>
                                         <tr>
                                         <td class="budget">
                                                5
                                            </td>
                                            <td>
                                                <span class="status">SEL. GUADALUPE</span>
                                            </td>
                                            <td>
                                                <span class="status">4</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                6
                                            </td>
                                            <td>
                                                <span class="status">TENISTICOS FC</span>
                                            </td>
                                            <td>
                                                <span class="status">5</span>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td class="budget">
                                                7
                                            </td>
                                            <td>
                                                <span class="status">VODKA JRS.</span>
                                            </td>
                                            <td>
                                                <span class="status">7</span>
                                            </td>
                                         </tr>
                                </table>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
<!-- Carousel wrapper -->


            </div>    
            
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
        <!-- Optional JS -->
        <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
        <!-- Argon JS -->
        <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
        </body>
</html>

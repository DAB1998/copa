<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>TORNEO CHAVOS-RUCOS</title>
        <!-- Favicon -->
        <link rel="icon" href="../../assets/img/LOGO.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
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
                        </div>
                        <div class="col-xl-3" style="text-align:center">
                            <img src="../../assets/img/LOGO.png" style="height:100px; margin-top:5%">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
            <!-- Page content -->
            <div class="container-fluid mt--6" style="background:#b8c2ff" >
            <div class="header-body">
                        <div class="col-xl-12"  >
                            <h1 class="display-3 text-white" style="text-align:center">CALENDARIO</h1>
                        </div>
                <!-- Card stats -->
                <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Jornada 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Jornada 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Jornada 3</a>
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
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                            <div class="row">
                            <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Amigos Country</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                    <span class="h5 font-weight-bold mb-0">Sabado 28 de agosto 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <h3 class="card-title text-uppercase mb-0">Vodka JRS</h3>
                                                    <span class="h5 font-weight-bold mb-0">Sabado 28 de agosto 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">11:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <h3 class="card-title text-uppercase mb-0">Sel. Guadalupe</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Ing. Prado FC</h3>
                                                    <span class="h5 font-weight-bold mb-0">Domingo 29 de agosto 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <h3 class="card-title text-uppercase mb-0">Natación FC</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Natación FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Ing. Prado FC</h3>
                                                    <span class="h5 font-weight-bold mb-0">Sabado 4 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <h3 class="card-title text-uppercase mb-0">Sel. Guadalupe</h3>
                                                    <span class="h5 font-weight-bold mb-0">Domingo 5 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                    <span class="h5 font-weight-bold mb-0">Domingo 5 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">11:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <h3 class="card-title text-uppercase mb-0">Amigos Country</h3>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Sabado 18 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Domingo 19 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Domingo 19 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">11:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Sabado 25 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Sábado 25 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">11:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Domingo 26 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Sabado 2 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Domingo 3 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Domingo 3 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">11:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Sabado 9 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Sabado 9 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Domingo 10 de octubre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <i class="ni ni-trophy"></i>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            
                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="card card-stats"  style="background:#bae3c5">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                                    <h3 class="card-title text-uppercase mb-0">Tenisticos FC</h3>
                                                    <h3 class="card-title text-uppercase mb-0">VS </h3>
                                                    <h3 class="card-title text-uppercase mb-0">Atlético Fénix</h3>
                                                    <span class="h5 font-weight-bold mb-0">Sabado 11 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Sabado 11 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">11:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <span class="h5 font-weight-bold mb-0">Domingo 12 de septiembre 2021</span>
                                                    <span class="h5 font-weight-bold mb-0">9:00 am</span>
                                                </div>
                                                <div class="col-auto">
                                                <div class="icon icon-shape  text-white rounded-circle shadow" style="background:#34944e">
                                                    <i class="ni ni-trophy"></i>
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
                                                    <i class="ni ni-trophy"></i>
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
                <h1 class="display-3 text-default" style="text-align:center">TABLA DE POSICIONES</h1>
            </div>
                <div class="table-responsive">
                            <div>
                                <table class="table align-items-center" style="background:#bae3c5">
                                    <thead class="bg-default text-white">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Posición</th>
                                            <th scope="col" class="sort" data-sort="budget">Equipo</th>
                                            <th scope="col" class="sort" data-sort="status">Puntos</th>
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
                                                        <img alt="Image placeholder" src="../../assets/img/índice.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Vodka Juniors</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">0 pts</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                2
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
                                                <span class="status">0 pts</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                3
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
                                                <span class="status">0 pts</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                4
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
                                                <span class="status">0 pts</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                5
                                            </td>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <a href="#" class="avatar rounded-circle mr-3">
                                                        <img alt="Image placeholder" src="../../assets/img/sel.png">
                                                    </a>
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-sm">Selección de Guadalupe</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td>
                                                <span class="status">0 pts</span>
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
                                                <span class="status">0 pts</span>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td class="budget">
                                                7
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
                                                <span class="status">0 pts</span>
                                            </td>
                                         </tr>
                                </table>
                            </div>  
            <!-- Footer -->
            </div>
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
        <script>
            var c1=document.getElementById("chartPersonas").getContext("2d");
            var myChart= new Chart(c1, {
                type:"line",
                data:{
                    labels:['col1','col2','col3', 'col4'],
                    datasets:[{
                        data:[10,9,15,35,12],
                        backgroundColor: '#c12839',
                        borderColor: '#c12839',
                    }]
                }
            });

            var c2=document.getElementById("chartPuertas").getContext("2d");
            var myChart= new Chart(c2, {
                type:"bar",
                data:{
                    labels:['col1','col2','col3', 'col4'],
                    datasets:[{
                        data:[10,9,15,35,12],
                        backgroundColor: 'rgb(247, 169, 79)',
                    }]
                }
            });
        </script>
        <script>
            function exportTableToExcel(tableID, filename = ''){
                var downloadLink;
                var dataType = 'application/vnd.ms-excel';
                var tableSelect = document.getElementById(tableID);
                var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
                
                // Specify file name
                filename = filename?filename+'.xls':'excel_data.xls';
                
                // Create download link element
                downloadLink = document.createElement("a");
                
                document.body.appendChild(downloadLink);
                
                if(navigator.msSaveOrOpenBlob){
                    var blob = new Blob(['ufeff', tableHTML], {
                        type: dataType
                    });
                    navigator.msSaveOrOpenBlob( blob, filename);
                }else{
                    // Create a link to the file
                    downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                
                    // Setting the file name
                    downloadLink.download = filename;
                    
                    //triggering the function
                    downloadLink.click();
                }
            }
        </script>
</html>

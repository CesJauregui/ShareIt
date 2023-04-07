<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>ShareIt | Publicación</title>
</head>

<body>
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.navigation')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-solid">
                            <div class="card-body pb-0">
                                <h3>Repositorio</h3>
                                <div class="row d-flex align-items-stretch">
                                    @foreach ($showRepositorios as $repositorio)
                                    @if (Auth::user()->name == $repositorio->user_publicacion)
                                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                        <div class="card bg-light">
                                            <div class="card-header text-muted border-bottom-0">


                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="lead"><b>Autor: {{$repositorio->user_publicacion}}</b></h2>
                                                        <p class="text-muted text-sm"><b>Publicación: </b> {{$repositorio->desc_publicacion}}</p>
                                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                                            <li class="small"><span class="fa-li"><i class="fas fa-share"></i></span> Publicado el {{date('H:i:s', strtotime($repositorio->created_at))}}</li>
                                                            <!--<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="text-right">
                                                    <a href="#" class="btn btn-sm bg-teal">
                                                        <i class="fas fa-comments">Ver publicación</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-info">
                                <!--<div class="widget-user-image">
                  <img class="img-circle elevation-2" height="300px" src="storage/o1PbjQXMfQtjxpTtI02Cr0Lp45WfkHBzXk3osWj8.jpg" alt="User Avatar">
                </div>-->
                                <!-- /.widget-user-image -->
                                <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
                                <h5 class="widget-user-desc">Estudiante</h5>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="{{url('publicaciones')}}" class="nav-link">
                                            Publicaciones
                                            <!--<span class="float-right badge bg-primary">31</span>-->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('debates')}}" class="nav-link">
                                            Debates
                                            <!--<span class="float-right badge bg-info"></span>-->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('repositorio',$repositorio->id)}}" class="nav-link">
                                            Mi Repositorio
                                            <!--<span class="float-right badge bg-success">12</span>-->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Contactos
                                            <!--<span class="float-right badge bg-danger">842</span>-->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class="mt-5 text-muted">Archivos o proyectos</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                            </li>
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                            </li>
                        </ul>
                        <div class="text-center mt-5 mb-3">
                            <a href="#" class="btn btn-sm btn-primary">Agregar archivo</a>
                        </div>
                        <h3 class="text-primary"><i class="fas fa-share"></i> ShareIt</h3>
                        <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        <br>
                        <!--<div class="text-muted">
                        <p class="text-sm">Client Company
                        <b class="d-block">Deveint Inc</b>
                        </p>
                        <p class="text-sm">Project Leader
                        < b class="d-block">Tony Chicken</b>
                        </p>
                        </div>-->

                    </div>
                </div>
            </section>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2021 <a href="">ShareIt</a>.</strong> Todos los derechos reservados.
            </footer>
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('js/demo.js') }}"></script>
        <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
</body>

</html>
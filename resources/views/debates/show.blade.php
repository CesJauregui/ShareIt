@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.navigation')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block">
                                    <img class="img-circle" src="/storage/o1PbjQXMfQtjxpTtI02Cr0Lp45WfkHBzXk3osWj8.jpg">
                                    <span class="username"><a href="#">{{$debate->user}}</a></span>
                                    <span class="description">Compartido el {{date('d-m-Y', strtotime($debate->created_at))}}</span>
                                </div>
                                <!-- /.user-block -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <h3>{{$debate->topic_name}}</h3>
                                <!-- post text -->
                                <p>{{$debate->desc_debate}}</p>
                                <!-- Attachment -->
                                @if($debate->file_path=='')
                                @else
                                <img src="/storage/{{$debate->file_path}}" class="rounded mx-auto d-block" width="300">
                                @endif

                                <!-- /.attachment-block -->

                                <!-- Social sharing buttons -->
                                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                                <span class="float-right text-muted">45 likes - {{$countComentarios}} comentarios</span>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer card-comments">
                                @foreach ($debateCome as $debat)
                                <div class="card-comment">
                                    <!-- User image -->
                                    <img class="img-circle img-sm" src="/storage/users-avatar/avatar.png">
                                    <div class="comment-text">
                                        <span class="username">
                                            {{$debat->user_debate}}
                                            <span class="text-muted float-right">{{date('H:i', strtotime($debat->created_at))}}</span>
                                        </span><!-- /.username -->
                                        {{$debat->contenido}}
                                    </div>
                                    <!-- /.comment-text -->
                                </div>
                                <!-- /.card-comment -->
                                @endforeach
                            </div>

                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <form action="{{route('comentarios.store',$debate->id)}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="debate_id" value="{{$debate->id}}">
                                    <input type="hidden" name="userComentario" value="{{ Auth::user()->name }}">
                                    <img class="img-fluid img-circle img-sm" src="/storage/users-avatar/avatar.png">
                                    <!-- .img-push is used to add margin to elements next to floating images -->
                                    <div class="img-push">
                                        <input type="text" class="form-control form-control-sm" name="comentario" placeholder="Enviar un comentario">
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </div>
                    <div class="col-md-4">

                        <!-- Default box -->
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
                                        <input type="text" hidden name="iddebate" value="{{$debate->id}}">
                                        <a href="{{url('debates')}}" class="nav-link">
                                            Debates
                                            <!--<span class="float-right badge bg-info"></span>-->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('repositorio',$debate->id)}}" class="nav-link">
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
                        <!-- /.card -->
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
                            <a href="#" class="btn btn-sm btn-info">Agregar archivo</a>
                        </div>
                        <h3 class="text-primary"><i class="fas fa-share"></i> ShareIt</h3>
                        <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                        <br>
                        <!--<div class="text-muted">
                <p class="text-sm">Client Company
                  <b class="d-block">Deveint Inc</b>
                </p>
                <p class="text-sm">Project Leader
                  <b class="d-block">Tony Chicken</b>
                </p>
              </div>-->


                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2021 <a href="">ShareIt</a>.</strong> Todos los derechos reservados.
        </footer>
    </div>
    @endsection

@extends('layouts.app')

@section('content')
      <!-- Main content -->
          <div class="col-md-8">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Inicia un debate -
                  <small> ¡Comparte tu opinión de un tema con otros usuarios!</small>
                </h3>
              </div>
              <!-- /.card-header -->
              <form action="{{route('debates.store')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="card-body pad">
                  <div class="mb-3">
                    <input type="text" hidden value="{{ Auth::user()->name }}" name="user_debat">
                    <div class="form-group">
                      <label for="inputName">Tema de debate</label>
                      <input type="text" id="inputName" name="topic_n" class="form-control" placeholder="Escriba un tema de debate..." required>
                    </div>
                    <div class="form-group">
                      <label for="inputDescription">Su opinión</label>
                      <textarea id="inputDescription" name="debat" class="form-control" rows="4" style="margin-top: 0px; margin-bottom: 0px; height: 114px; resize:none" required>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4"><button type="submit" class="btn btn-block btn-info btn-md swalDefaultSuccess">Publicar debate</button></div>
                    <div class="col-sm-3"><input type="file" id="file" name="file_p" class="btn btn-block btn-info btn-sm"></div>
                    <div class="col-sm-2" id="preview"></div>
                    <div class="col-sm-1">
                      <div id="btnEliminar" style="display:none" class="btn btn-info" onclick="LimpiarImg()"><i class="fas fa-trash"></i></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Lo último</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Mis debates</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    @foreach ($debates as $debate)
                    @if (Auth::user()->name != $debate->user)
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="storage/o1PbjQXMfQtjxpTtI02Cr0Lp45WfkHBzXk3osWj8.jpg">
                        <span class="username">
                          <a href="">{{ $debate->user }}</a>
                          <!--<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>-->
                        </span>
                        <span class="description">Compartido el {{date('d-m-Y', strtotime($debate->created_at))}}</span>
                      </div>
                      <!-- /.user-block -->
                      <h3>{{$debate->topic_name}}</h3>
                      <p>{{$debate->desc_debate}}}</p>
                      @if($debate->file_path=='')
                      @else
                      <img src="/storage/{{$debate->file_path}}" class="rounded mx-auto d-block" width="300">
                      @endif
                      <p>
                        <a href="{{route('debates.show', $debate->id)}}" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Ver debate</a>
                      </p>
                    </div>
                    @endif
                    @endforeach
                    <!-- /.post -->
                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      @foreach ($showDebates as $showDebate)
                      @if (Auth::user()->name == $showDebate->user)
                      <div class="time-label">
                        <span class="bg-info">
                          {{date('d-m-Y', strtotime($showDebate->created_at))}}
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> {{date('H:i:s', strtotime($showDebate->created_at))}}</span>
                          <h3 class="timeline-header"> <strong>{{$showDebate->topic_name}}</strong></h3>
                          <div class="timeline-body">
                            {{$showDebate->desc_debate}}
                          </div>
                          @if($showDebate->file_path=='')
                          @else
                          <img src="/storage/{{$showDebate->file_path}}" class="rounded mx-auto d-block" width="300">
                          @endif
                          <div class="timeline-footer">
                            <a href="{{ route('debates.show', $showDebate->id)}}" class="btn btn-primary btn-sm">Leer Más</a>
                            <!--<a href="#" class="btn btn-danger btn-sm">Eliminar</a>-->
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      @endif
                      @endforeach
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col-->
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
                    <input type="text" hidden name="iddebate" value="{{$showDebate->id}}">
                    <a href="{{url('debates')}}" class="nav-link">
                      Debates
                      <!--<span class="float-right badge bg-info"></span>-->
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('repositorio',$showDebate->id)}}" class="nav-link">
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
              <!-- /.card -->
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
                  <b class="d-block">Tony Chicken</b>
                </p>
              </div>-->
          </div>
          <!-- ./row -->
    
      <!-- /.content -->
   
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2021 <a href="./">ShareIt</a>.</strong> Todos los derechos resevados.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  @endsection
  <!-- ./wrapper -->
  

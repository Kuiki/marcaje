@include('layouts.header')

  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Marcajes
          <small>Creamerito</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Intranet</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
            <!-- DOCUMENTOS -->
            <div class="col-md-4">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion-ios-time"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Hora Actual</span>
                        <span class="info-box-number" id="timeReal" style="font-size: 30px;"></span>

                        <div class="progress">
                        <div class="progress-bar" style="width: 40%"></div>
                        </div>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Últimos Documentos Subidos</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                            <th>Fecha</th>
                            <th>Archivo</th>
                            <th>Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td>25/07/2019</td>
                            <td>iPhone 6 Plus</td>
                            <td><span class="label label-danger">Sin Verificar</span></td>
                            </tr>
                            <tr>
                            <td>26/07/2019</td>
                            <td>Samsung Smart</td>
                            <td><span class="label label-danger">Sin verificar</span></td>
                            <td>
                                <div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                            </td>
                            </tr>

                            <tr>
                            <td>27/07/2019</td>
                            <td>Call of Duty IV</td>
                            <td><span class="label label-success">Verificado</span></td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <button type="button" class="btn btn-sm btn-info btn-flat pull-left" data-toggle="modal" data-target="#modal-default">
                                Nuevo Archivo
                        </button>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver Todos</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
            <!-- NUEVO REGISTRO -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Realizar Marcaje</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row d-flex flex-column-reverse">
                        <div class="col-md-7">

                        <form method="POST" action="{{ ($url > 0) ? route('registros.edit', ['register' => $url ]) : route('registros.add')}}">
                            @csrf
                            @if ($url > 0)
                                @method('PUT')
                            @endif
                            <!-- Date -->
                            <div class="form-group">
                                <label>Fecha:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                    </div>
                                <input readonly type="text" class="form-control pull-right" value="{{ now()->format('d-m-y') }}">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <div class="form-group">
                                <label>Estado de Incidencia</label>
                                <select name="incidence" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    @foreach ($incidents as $incidence)
                                        <option value="{{ $incidence->id }}">{{ $incidence->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Notas</label>
                                <textarea name="note" class="form-control" rows="3" placeholder="Escribe aquí ..."></textarea>
                            </div>


                            @if($url > 0)
                                <button type="submit" class="btn btn-danger btn-lg">Finalizar Hora</button>
                            @else
                                <button type="submit" class="btn btn-success btn-lg">Registrar Hora</button>
                            @endif

                        </form>
                        </div>
                        <div class="col-md-5 text-center" id="image" style="padding-top:50px;">
                                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user2-160x160.jpg" alt="User profile picture">
                                <h3 class="profile-username ">Soporte Creamerito <br><small class="label label-warning" style="font-size:12px">Programador</small></h3>
                        </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- REGISTROS -->
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Historial de Marcajes</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha Entrada</th>
                                    <th>Hora</th>
                                    <th>Nota de Entrada</th>
                                    <th>Incidencia Entrada</th>
                                    <th>Fecha Salida</th>
                                    <th>Hora</th>
                                    <th>Nota de Salida</th>
                                    <th>Incidencia Salida</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $register)
                                    <tr>
                                        <td><b>{{ date("d / m / Y", strtotime($register->entryDate)) }}</b></td>
                                        <td>{{ date("H : i : s", strtotime($register->entryDate)) }}</td>
                                        <td>{{ $register->entryNote }} </td>
                                        <td>{{ $register->incidence_entry->name }}</td>
                                        @if(isset($register->departureDate))
                                        <td><b>{{ date("d / m / Y", strtotime($register->departureDate)) }}</b></td>
                                        <td>{{ date("H : i : s", strtotime($register->departureDate)) }}</td>
                                        <td>{{ $register->departureNote }}</td>
                                        <td>{{ $register->incidence_departure->name }}</td>
                                        @else
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>



        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->

  @extends('layouts.modal')

  @section('title-modal')
      Subir Documento
  @endsection

  @section('content-modal')

<form id="modal-form" role="form" method="POST" action="{{ route('documento.add' )}}" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="form-group">
            <label for="exampleInputFile">Archivo</label>
            <input type="file" id="exampleInputFile" name="name">

            <p class="help-block">Los archivos subidos serán verificados por el administrador.</p>
            </div>
        </div>
        <!-- /.box-body -->
    </form>

  @endsection

@include('layouts.footer')

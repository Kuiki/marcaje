<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
      @media only screen and (max-width: 900px) {
        .flex-column-reverse {
            -webkit-box-orient: vertical!important;
            -webkit-box-direction: reverse!important;
            -ms-flex-direction: column-reverse!important;
            flex-direction: column-reverse!important;
        }
        .d-flex {
            display: -webkit-box!important;
            display: -ms-flexbox!important;
            display: flex!important;
        }

        #image{
            padding-top: 0px !important;
        }
    }


  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <!-- The message -->
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Mis datos</a>
                  </div>
                  <div class="pull-right">

                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
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
                            <th>Order ID</th>
                            <th>Item</th>
                            <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                            <td>iPhone 6 Plus</td>
                            <td><span class="label label-danger">Delivered</span></td>
                            </tr>
                            <tr>
                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                            <td>Samsung Smart TV</td>
                            <td><span class="label label-info">Processing</span></td>
                            <td>
                                <div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                            </td>
                            </tr>

                            <tr>
                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                            <td>Call of Duty IV</td>
                            <td><span class="label label-success">Shipped</span></td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Nuevo Archivo</a>
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
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive">
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
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

<script>
        horaActual();
        $(function () {
          //$('#example1').DataTable()
          $('#example1').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
          })
        });

        function horaActual(){
            var time = new Date();
            var hour = time.getHours();
            var minutes = time.getMinutes();
            var seconds = time.getSeconds();
            if(hour < 10){
                hour = "0"+hour;
            }
            if(minutes < 10){
                minutes = "0"+minutes;
            }
            if(seconds < 10){
                seconds = "0"+seconds;
            }
            //console.log(hour+":"+minutes+":"+seconds);
            $("#timeReal").text(hour+" : "+minutes+" : "+seconds);
        }

        setInterval(horaActual,1000);

</script>
</body>
</html>

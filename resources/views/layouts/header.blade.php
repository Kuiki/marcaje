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

    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }

  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">

        <div class="navbar-header" style="width:100%">
          <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                  </button>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu" style="float:right">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{$user->name}} {{$user->surname}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
  
                    <p>
                      {{$user->name}} {{$user->surname}} - Web Developer
                      <small>Miembro desde {{ date (" d - M - Y", strtotime($user->created_at)) }}</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#modal-user">Mis datos</a>
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
        </div>
        <!-- Navbar Right Menu -->
        
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  
  @extends('layouts.modal-user')

  @section('title-modal-user')
    Datos de usuario
  @endsection

  @section('content-modal-user')
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="InputEmail1" value="{{$user->name}}" readonly>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="Inputpassword" value="{{$user->email}}" readonly>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Contraseña</label>
        <input type="password" class="form-control" id="Inputpassword" value="{{$user->password}}" readonly>
      </div>
    </div>
    <!-- /.box-body -->

  </form>

  @endsection
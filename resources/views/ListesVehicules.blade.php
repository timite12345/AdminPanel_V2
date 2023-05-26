<!DOCTYPE html>
<html lang="en">
<head>
<x-app-layout>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ivoire Secours</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Navbar -->

  <body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-1">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header"></li>
          <li class="nav-item">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Pages
              </p>
            </a>
               <li class="nav-item">
                <a href="{{ url('auth/register') }}" class="nav-link">
                  <i class="fa fa-user-plus"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('ListesHopitals') }}" class="nav-link">
                  <i class="fa fa-medkit"></i>
                  <p>Ajouter Hopital</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('Accueil') }}" class="nav-link">
                  <i class="fa fa-ambulance"></i>
                  <p> Gérer Missions</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url('ListesChauffeur') }}" class="nav-link">
                  <i class="fa fa-user"></i>
                  <p> Gérer Chauffeurs </p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{ url('ListesFactures') }}" class="nav-link">
                  <i class="fa fa-edit"></i>
                  <p> Gérer Factures </p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{ url('ListesVehicules') }}" class="nav-link">
                  <i class="fa fa-car-side"></i>
                  <p> Gérer Parc </p>
                </a>
              </li>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        {{--  Pour mettre espace entre le nav bar et le corps du dashboard  --}}

    </div>
    <!-- /.content-header -->

<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-ambulance"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ambulances</span>
                <span class="info-box-number">
                  {{ DB::table('vehicules')->count()  }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-hospital"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Hopitaux</span>
                <span class="info-box-number">{{ DB::table('hopitals')->count()  }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Chauffeurs</span>
                <span class="info-box-number">{{ DB::table('chauffeurs')->count()  }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-ambulance"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mission effectuées</span>
                <span class="info-box-number">{{ DB::table('missions')->count()  }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
    <!-- Main content -->

<div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
             <p class="bg-white-700 font-semibold text-lg text-gray-800 leading-tight">
            Listes des Véhicules
            <a href="{{ url('AjouterHopital') }}" role="button" class="bg-blue-400 hover:bg-blue-700 text-white
            font-bold py-1 px-2 rounded float-right">Ajouter Véhicule</a>
        </p>
            <table class="table-fixed">
              <thead>
                <tr>
                  <th class="px-4 py-2">Id</th>
                  <th class="px-4 py-2">Immatriculation</th>
                  <th class="px-4 py-2">estLibre</th>

                </tr>
              </thead>
              <tbody>
                @foreach($vehicules as $vehicule)
                  <tr>
                    <td class="select-none px-4 py-3">{{ $vehicule->id}}</td>
                    <td class="select-none px-4 py-3">{{ $vehicule->immatriculation }}</td>
                    <td class="select-none px-4 py-3">{{ $vehicule->estLibre}}</td>
                    <td class="px-4 py-3">
                        <a href="{{ route('Details', $vehicule->id) }}" role="button"
                        class="btn btn-sm bg-teal mr-2"><i class="fas fa-eye"></i></a>
                          <a href="{{ route('Edit', $vehicule->id) }}" role="button"
                        class="btn btn-sm bg-primary mr-2"><i class="fas fa-edit"></i></a>
                         <a href="{{route('destroyehopital',$vehicule->id)}}" role="button"
                    class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>


              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col --
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">Ivoire Secours</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src='{{asset("plugins/jquery/jquery.min.js")}}'></script>
<!-- Bootstrap -->
<script src='{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
<!-- overlayScrollbars -->
<script src='{{asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}'></script>
<!-- AdminLTE App -->
<script src='{{asset("dist/js/adminlte.js")}}'></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src='{{asset("plugins/jquery-mousewheel/jquery.mousewheel.js")}}'></script>
<script src='{{asset("plugins/raphael/raphael.min.js")}}'></script>
<script src='{{asset("plugins/jquery-mapael/jquery.mapael.min.js")}}'></script>
<script src='{{asset("plugins/jquery-mapael/maps/usa_states.min.js")}}'></script>
<!-- ChartJS -->
<script src='{{asset("plugins/chart.js/Chart.min.js")}}'></script>

<!-- AdminLTE for demo purposes -->
<script src='{{asset("dist/js/demo.js")}}'></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src='{{asset("dist/js/pages/dashboard2.js")}}'></script>
        </div>
    </div>
</x-app-layout>

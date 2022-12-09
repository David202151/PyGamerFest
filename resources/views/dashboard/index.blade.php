@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">@lang('models/dashboards.header.index')</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1">
                        <i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Users</span>
                        <span class="info-box-number">
                            {{$dashboardInfo['user_count']}}
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1">
                        <i class="fas fa-user-shield"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Roles</span>
                        <span class="info-box-number">
                            {{$dashboardInfo['user_count']}}
                        </span>
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
                    <span class="info-box-icon bg-success elevation-1">
                        <i class="fas fa-shield-alt"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Perrmisons</span>
                        <span class="info-box-number">
                            {{$dashboardInfo['permission_count']}}
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1">
                        <i class="fas fa-signal"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Online</span>
                        <span class="info-box-number" id="user_online">{{$dashboardInfo['user_online']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="container text-center">
            <div class="row">
                <div class="col-sm-5 col-md-6">
                GRAFICO 2
                </div>
                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                <div class="info-box">
                    <span class="info-box-icon bg-danger elevation-1">
                    <i class="fas fa-gamepad"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Categorias</span>
                        <span class="info-box-number" id="categorias_count">{{$dashboardInfo['categorias_count']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>

                <div class="info-box mb-3">
                    <span class="info-box-icon elevation-1">
                    <i class="fas fa-hotel"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Aulas</span>
                        <span class="info-box-number" id="aulas_count">{{$dashboardInfo['aulas_count']}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>

                </div>
            </div>
        </div>


        <div class="container text-center">
            <div class="row">
                <div class="col-sm-3 col-md-6">
               <center>
                <div style="width: 25rem">
                    <div class="card">
                        <h3><strong>Vista Usuarios</strong></h3>
                    </div>
                    
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
                <canvas id="myChart" width="100" height="100"></canvas>
                    <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['Blue', 'Red', 'Green', 'Yellow'],
                            datasets: [{
                                label: '# of Votes',
                                data: [{{$dashboardInfo['user_count']}}, {{$dashboardInfo['user_count']}}, {{$dashboardInfo['permission_count']}}, {{$dashboardInfo['user_online']}}],
                                backgroundColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(222, 0, 32)',
                                    'rgba(75, 192, 75)',
                                    'rgba(255, 181, 0)'
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(222, 0, 32)',
                                    'rgba(75, 192, 75)',
                                    'rgba(255, 181, 0)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>
                    
                    </div>
                    </center>



                </div>
                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                <div class="info-box mb-5">
                    <span class="info-box-icon bg-primary elevation-1">
                    <i class="fas fa-user-plus"></i>
                    </span>
                  
                    <div class="info-box-content">
                        <span class="info-box-text">Jugadores</span>
                        <span class="info-box-number" id="jugadores_count">{{$dashboardInfo['jugadores_count']}}</span>
                        <a href="jugadores" class="btn btn-info">Mostrar Jugadores</a>
                    </div>
                    <!-- /.info-box-content -->
                </div>

                <div class="info-box mb-5">
                    <span class="info-box-icon bg-primary elevation-1" >
                       <i class="fas fa-user"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Equipos</span>
                        <span class="info-box-number" id="equipos_count">{{$dashboardInfo['equipos_count']}}</span>
                        <a href="equipo" class="btn btn-info"> Mostrar equipos</a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                
                </div>
            </div>
        </div>


        
                    <!-- /.card-header -->
                    <div class="card-body">
                        <canvas id="userCheckinChart" height="315" style="height: 180px; display: block; width: 462px;" width="808" class="chartjs-render-monitor"></canvas>
                        <!-- /.row -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>

<!-- /.content -->
@endsection

@push('third_party_scripts')
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js" integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@push('page_scripts')




@endpush

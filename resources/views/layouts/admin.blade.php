<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vuela Alto</title>
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
           
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('app/empleado')}}">Empleados</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('app/avion')}}">Aviones</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('app/vuelo')}}">Vuelos</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('app/cliente')}}">Clientes</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('reservacion.create')}}">Reservaciones</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{url('app/reservacion')}}">Lista de Reservaciones</a>
                    
                </div>
            </div>
           
            <div id="page-content-wrapper">
               
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        {{-- <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button> --}}
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="{{url('app/')}}">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('app/')}}">Vuela Alto</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </nav>
               
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
       
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
</html>

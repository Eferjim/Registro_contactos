<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      <title>@yield('title')</title>

      <style>

        header{
          background-color: #08acb4
        }

        #app{
          background-color: beige;
        }


        .search {
            display: flex;
            width: 100%;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            margin-bottom: 1%;
          }

          .check-boxes{
            display: flex;
            width: 100%;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
          }

          .search-empresa{
            display: flex;
            flex-direction: row;
            width: 50%;
          }

          .search-profesor{
            display: flex;
            flex-direction: row;
            width: 50%;
            margin-left: 1%;
          }

          .input-search-empresa{
            margin-left: 3%;
          }

          .input-search-profesor{
            margin-left: 3%;
          }

          .new-contacto{
            display: flex;
            flex-direction: row;
            width: 5%;
            margin-left: 1%;
            align-items: center;
          }

          .custom-nav{
            color: white !important;
            font-size: 120%;
          }

          .new-contacto{
            background-color: #08acb4 !important;
          }

      </style>
  </head>

  <body>
    <div>
      <header class="d-flex flex-wrap justify-content-center border-bottom"  style="text-align: center;">
        <a href="{{route('contacto')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4"><img src="https://i.ibb.co/X8cKgMC/LOGO.png" alt="LOGO"></a></span>
        </a>
        <div class="container d-flex flex-wrap justify-content-center py-3 bottom-border">

          <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('contacto')}}" class="nav-link custom-nav" aria-current="page">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle custom-nav" href="#" data-bs-toggle="dropdown">Empresas</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('empresas.show')}}">Ver</a></li>
                  <li><a class="dropdown-item" href="{{route('empresa.crearEmpresa')}}">Crear nueva</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle custom-nav" href="#" data-bs-toggle="dropdown">Tareas</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('tareas.show')}}">Ver</a></li>
                  <li><a class="dropdown-item" href="{{route('crearTarea')}}">Crear nueva</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="{{route('user.show')}}" class="nav-link custom-nav">Usuarios</a></li>
            <li class="nav-item"><a href="#" class="nav-link custom-nav">Sign out</a></li>
          </ul>
        </div>
      </header>
    </div>
      <div>

        @include('flash-message')
      
      </div>
      
    @yield('content')
  </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</html>
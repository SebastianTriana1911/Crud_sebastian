<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

      <h1>Talento humano CIDE</h1>

      @auth
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route("roles.index") }}">HomePage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route("roles.index") }}">Roles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route ("users.index")}}">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route ("candidates.index")}}">Candidate</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
            <p>Bienvenido {{ auth()->user()->name }}</p>

            <!-- Se valida cual es el rol del usuario registrado -->
            @if (auth()->user()->role_id == 1)
                <p>Rol: Administrador</p>
                
                <nav>
                    <menu>
                        <a href="{{ route('users.create') }}">Ver usuarios registrados</a>
                        <a href="{{ route('users.index') }}">Actualizar mis datos</a>
                        <a href="{{ route('logout') }}">Cerrar Sesión</a>
                    </menu>  
                </nav>
            
            <!-- Validacion si es un instructor -->
            @elseif (auth()->user()->role_id == 2)
                <p>Rol: Instructor</p> 

            <!-- Validacion si es un reclutador -->
            @elseif (auth()->user()->role_id == 3)
                <p>Rol: Reclutador</p>

            <!-- Validacion si es un candidato -->
            @elseif (auth()->user()->role_id == 4)
                <p>Rol: Candidato</p>

            @endif

            <nav>
                <menu>
                    <a href="{{ route('users.create') }}">Nuevo Usuario</a>
                    <a href="{{ route('users.index') }}">Ver usuarios</a>
                    <a href="{{ route('logout') }}">Cerrar Sesión</a>
                </menu>  
            </nav>
      @endauth

      @guest
            <p>Usuario invitado</p>  
            <nav>
                <menu>
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                    <a href="{{ route('users.create') }}">Nuevo Usuario</a>
                    <a href="{{ route('users.index') }}">Ver usuarios</a>
                </menu>  
            </nav>
      @endguest

    @yield("content")
</body>
</html>
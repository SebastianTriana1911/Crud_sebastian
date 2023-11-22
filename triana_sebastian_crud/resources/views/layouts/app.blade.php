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
  
  <!-- Estilos -->
  <style>
    .guest{
      display: flex;
      width: 100%;
      height: 100%;
      justify-content: center;
    }

    .nav_guest{
      display: flex;
      width: 100%;
      height: 100%;
      justify-content: center; 
    }
  </style>

  <!-- Directiva auth - Se manejara la logica cuando un usuario este autenticado dentro del login -->
  @auth
    <div class="container">

      <!-- Barra de navegacion--> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          
        <!-- Home Page -->
        <div class="container-fluid">

          <a class="navbar-brand" href="{{ route("roles.index") }}">HomePage</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            
            <!-- Contenedor de navegacion para usuarios autenticados -->
            <div class="collapse navbar-collapse" id="navbarNav">

              <!-- Roles -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route("roles.index") }}">Roles</a>
                </li>
                
                <!-- Users -->
                <li class="nav-item">
                  <a class="nav-link" href="{{route ("users.index")}}">Users</a>
                </li>
                
                <!-- Candidate -->
                <li class="nav-item">
                  <a class="nav-link" href="{{route ("candidates.index")}}">Candidate</a>
                
                </li>
              </ul>

            </div>
          
        </div>

      </nav>

      <!-- Bienvenida al usuario autenticado validandolo con el metodo auth() -->
      <p>Bienvenido {{ auth()->user()->name }}</p>

        <!-- Se valida cual es el rol del usuario registrado -->
        @if (auth()->user()->role_id == 1)
          <p>Rol: Administrador</p>
                
            <!-- Barra de navegacion para usuariaro con un rol de Administrador -->
            <nav>
                <menu>
                    <a href="{{ route('users.index') }}">Ver usuarios registrados</a>
                    <a href="{{ route('roles.index') }}">Ver candidatos del sistema</a>
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
        
    </div>
  @endauth

  <!-- Directiva guest - Se manejara la logica cuando un usuario no este autenticado en el sistema -->
  @guest

    <!-- Titulo de que es un usuario invitado -->
    <div class="guest">
      <p>Usuario invitado</p>  
    </div>

    <!-- Barra de navegacion para usuarios no autenticados -->
    <nav class="nav_guest">
      <menu>
          <a href="{{ route('login') }}">Iniciar sesión</a>
          <a href="{{ route('users.create') }}">Nuevo Usuario</a>
      </menu>  
    </nav>
      
  @endguest

  @yield("content")

</body>
</html>
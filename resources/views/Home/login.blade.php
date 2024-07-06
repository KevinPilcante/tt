<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de arriendo de vehículos</title>
</head>
<body>
    <body style = "background-color:rgba(10, 10, 10, 0.733)">
        <!--navbar-->
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style ="color: red">Europcar Tattersall</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/arrendar">Arrendar</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Administrador
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/gestionarusuarios">Gestionar usuarios</a></li>
                      <li><a class="dropdown-item" href="/gestionarvehiculos">Gestionar vehículos</a></li>
                      <li><a class="dropdown-item" href="/gestionarclientes">Gestionar clientes</a></li>
                      <li><a class="dropdown-item" href="/arriendos">Arriendos</a></li>
                    </ul>
                    <!--Inicio sesion-->
                    <li class="nav-item dropdown">
                      <div class="container-fluid p-0">
                          <div class="row text-white m-0 " style="background-color: dark">   
                                  <a href="cambiarcontraseña" class="text-white">Cambiar contraseña</a>
                                  <a href="login" class="text-white">Iniciar sesión</a>
                          </div>

                      </div>
                    </li>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!--navbar-->
        <h2 style="color:white; margin-bottom: 20px;">Inicio de Sesión</h2>
        <form id="loginForm">
            <label for="email" style="color:white; display: block; margin-bottom: 8px; text-align: left;">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <label for="password" style="color:white; display: block; margin-bottom: 8px; text-align: left;">Contraseña:</label>
            <input type="password" id="password" name="password" required minlength="6" style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
            <a href="/crearperfil" class="text-white">Crear cuenta</a>
            <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">Iniciar Sesión</button>
        </form>
        <p id="error-message"></p>
        </div>
        <script src="script.js"></script> <!-- Incluye el archivo script.js -->
    
    
    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
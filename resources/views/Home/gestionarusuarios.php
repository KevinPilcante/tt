<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de arriendo de vehiculos</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--gestionar usuarios-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios - Arriendo de Autos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 20px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }
        .users {
            margin-top: 30px;
        }
        .user {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }
    </style>
    <header>
        <h1>Gestión de Usuarios</h1>
    </header>

    <div class="container">
        <h1>Inicio de Sesión del Administrador</h1>
        <form id="loginForm">
            <div class="error" id="error"></div>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Iniciar Sesión</button>
        </form>

        <div class="users" id="users" style="display: none;">
            <h2>Usuarios Registrados</h2>
            <div class="user">
                <p><strong>Nombre:</strong> /</p>
                <p><strong>Email:</strong> /</p>
            </div>
            <div class="user">
                <p><strong>Nombre:</strong> /</p>
                <p><strong>Email:</strong> /</p>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

        });
    </script>
    <!--/gestionar usuarios-->
</body>
</html>
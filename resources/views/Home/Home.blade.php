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
        <!---->
    <title>Inicio - Arriendo de Autos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        .hero {
            background-image: url('images/car_rental_hero.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .hero h1 {
            font-size: 3em;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            text-align: center;
        }
        .content .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 200px;
            text-align: center;
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .card button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .card button:hover {
            background-color: #45a049;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
<body>
    <header>
        <h1>Arriendo de Autos</h1>
    </header>
    <div class="hero">
        <h1>Encuentra el auto perfecto para tu viaje</h1>
    </div>

    <div class="content">
        <h2 style= "color:white">Nuestras Marcas</h2>
        <div class="cards">
            <div class="card">
                <h3>Toyota Corolla</h3>
                <button type="button" href="/arrendar">Inspeccionar</button>
            </div>
            <div class="card">
                <h3>Ford Mustang</h3>
                <button type="button" href="/arrendar">Inspeccionar</button>
            </div>
            <div class="card">
                <h3>Chevrolet Camaro</h3>
                <button type="button" href="/arrendar">Inspeccionar</button>
            </div>
        </div>
    </div>
        <!--/-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
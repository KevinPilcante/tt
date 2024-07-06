<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de arriendo de vehiculos</title>
</head>
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
    <!--para arrendar -->
    <h1 style="color:white">Arriendo de Autos</h1>
    <h2 style="color:white">Toyota</h2>
    <div style="display: flex; gap: 20px;">
        <div style="border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 200px; text-align: center;">
            <h3 style="color:white">Toyota Corolla</h3>
            <img src="imagenes/ToyotaCorolla.jpg" alt="Toyota Corolla" style="max-width: 100%; height: auto; border-radius: 5px;">
            <p style="color:white">Precio por día: $50</p>
            <button type="button" style="padding: 10px; border: none; border-radius: 4px; background-color: #4CAF50; color: white; cursor: pointer;">Seleccionar</button>
        </div>
        <div style="border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 200px; text-align: center;">
            <h3 style="color:white">Toyota Camry</h3>
            <img src="imagenes/ToyotaCamry.jpg" alt="Toyota Camry" style="max-width: 100%; height: auto; border-radius: 5px;">
            <p style="color:white">Precio por día: $60</p>
            <button type="button" style="padding: 10px; border: none; border-radius: 4px; background-color: #4CAF50; color: white; cursor: pointer;">Seleccionar</button>
        </div>
    </div>

    <h2 style="color:white">Ford</h2>
    <div style="display: flex; gap: 20px;">
        <div style="border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 200px; text-align: center;">
            <h3 style="color:white">Ford Fiesta</h3>
            <img src="imagenes/FordFiesta.jpg" alt="Ford Fiesta" style="max-width: 100%; height: auto; border-radius: 5px;">
            <p style="color:white">Precio por día: $45</p>
            <button type="button" style="padding: 10px; border: none; border-radius: 4px; background-color: #4CAF50; color: white; cursor: pointer;">Seleccionar</button>
        </div>
        <div style="border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 200px; text-align: center;">
            <h3 style="color:white">Ford Mustang</h3>
            <img src="imagenes/FordMustang.jpg" alt="Ford Mustang" style="max-width: 100%; height: auto; border-radius: 5px;">
            <p style="color:white">Precio por día: $80</p>
            <button type="button" style="padding: 10px; border: none; border-radius: 4px; background-color: #4CAF50; color: white; cursor: pointer;">Seleccionar</button>
        </div>
    </div>

    <h2 style="color:white">Chevrolet</h2>
    <div style="display: flex; gap: 20px;">
        <div style="border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 200px; text-align: center;">
            <h3 style="color:white">Chevrolet Spark</h3>
            <img src="imagenes/ChevroletSpark.jpg" alt="Chevrolet Spark" style="max-width: 100%; height: auto; border-radius: 5px;">
            <p style="color:white">Precio por día: $40</p>
            <button type="button" style="padding: 10px; border: none; border-radius: 4px; background-color: #4CAF50; color: white; cursor: pointer;">Seleccionar</button>
        </div>
        <div style="border: 1px solid #ccc; border-radius: 5px; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 200px; text-align: center;">
            <h3 style="color:white">Chevrolet Camaro</h3>
            <img src="imagenes/ChevroletCamaro.jpg" alt="Chevrolet Camaro" style="max-width: 100%; height: auto; border-radius: 5px;">
            <p style="color:white">Precio por día: $70</p>
            <button type="button" style="padding: 10px; border: none; border-radius: 4px; background-color: #4CAF50; color: white; cursor: pointer;">Seleccionar</button>
        </div>
    </div>
    <!--/-->

    <div class="cart">
        <h2 style= "color:white">Carrito</h2>
        <p style= "color:white">Total a cancelar: $<span id="total">0</span></p>
    </div>

    <script>
        document.querySelectorAll('.card button').forEach(button => {
            button.addEventListener('click', function() {
                const card = this.parentElement;
                const price = parseInt(card.getAttribute('data-price'));
                const totalElement = document.getElementById('total');
                let total = parseInt(totalElement.textContent);
                total += price;
                totalElement.textContent = total;

                this.textContent = 'No disponible';
                this.disabled = true;
            });
        });
    </script>

    <script src="script.js"></script>
</body>
</html>
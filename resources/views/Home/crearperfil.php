<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Perfil Nuevo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
            display: none;
        }
    </style>
</head>
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
<body>
    <div class="container">
        <h1>Crear Perfil</h1>
        <form id="createProfileForm">
            <label for="fullName">Nombre Completo:</label>
            <input type="text" id="fullName" name="fullName" required>
            <span class="error" id="fullNameError">Por favor ingrese su nombre completo.</span>

            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required>
            <span class="error" id="rutError">Por favor ingrese un RUT válido.</span>

            <label for="phoneNumber">Número de Teléfono:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required pattern="[0-9]{9}">
            <span class="error" id="phoneError">Por favor ingrese un número de teléfono válido (9 dígitos).</span>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <span class="error" id="emailError">Por favor ingrese un correo electrónico válido.</span>

            <label for="password">Crear Contraseña:</label>
            <input type="password" id="password" name="password" required minlength="6">
            <span class="error" id="passwordError">La contraseña debe tener al menos 6 caracteres.</span>

            <button type="submit">Crear Perfil</button>
        </form>
    </div>

    <script>
        document.getElementById('createProfileForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Validaciones
            let isValid = true;

            // Validar Nombre Completo
            const fullName = document.getElementById('fullName').value;
            if (!fullName) {
                isValid = false;
                document.getElementById('fullNameError').style.display = 'block';
            } else {
                document.getElementById('fullNameError').style.display = 'none';
            }

            // Validar RUT
            const rut = document.getElementById('rut').value;
            if (!rut) {
                isValid = false;
                document.getElementById('rutError').style.display = 'block';
            } else {
                document.getElementById('rutError').style.display = 'none';
            }

            // Validar Número de Teléfono
            const phoneNumber = document.getElementById('phoneNumber').value;
            const phonePattern = /^[0-9]{9}$/;
            if (!phonePattern.test(phoneNumber)) {
                isValid = false;
                document.getElementById('phoneError').style.display = 'block';
            } else {
                document.getElementById('phoneError').style.display = 'none';
            }

            // Validar Correo Electrónico
            const email = document.getElementById('email').value;
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                isValid = false;
                document.getElementById('emailError').style.display = 'block';
            } else {
                document.getElementById('emailError').style.display = 'none';
            }

            // Validar Contraseña
            const password = document.getElementById('password').value;
            if (password.length < 6) {
                isValid = false;
                document.getElementById('passwordError').style.display = 'block';
            } else {
                document.getElementById('passwordError').style.display = 'none';
            }

            if (isValid) {
                alert('Perfil creado exitosamente.');
                // enviar los datos al servidor
                this.submit(); 
            }
        });
    </script>
</body>
</html>

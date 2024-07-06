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
    <div class="change-password-container">
        <h2 style="color:white;">Cambiar Contraseña</h2>
        <form id="changePasswordForm">
            <label for="email" style="color:white; display: block; margin-bottom: 8px; text-align: left;" >Ingrese email:</label>
            <input type="email" id="email" name="email" required>
            <label for="currentPassword" style="color:white; display: block; margin-bottom: 8px; text-align: left;" >Contraseña Actual:</label>
            <input type="password" id="currentPassword" name="currentPassword" required>
            <label for="newPassword" style="color:white; display: block; margin-bottom: 8px; text-align: left;" >Nueva Contraseña:</label>
            <input type="password" id="newPassword" name="newPassword" required minlength="6">
            <label for="confirmPassword" style="color:white; display: block; margin-bottom: 8px; text-align: left;" >Confirmar Nueva Contraseña:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required minlength="6">
            <button type="submit" style="background-color: #28a745; display: block ;color: white; border: none; border-radius: 4px; cursor: pointer;">Cambiar Contraseña</button>
        </form>
        <div id="message" class="message"></div>
        <p id="error-message"></p>
         <script>
        document.getElementById('changePasswordForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            const currentPassword = document.getElementById('currentPassword').value;
            const newPassword = document.getElementById('newPassword').value;

            const response = await fetch('/change-password', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ currentPassword, newPassword })
            });

            const result = await response.json();
            const messageElement = document.getElementById('message');

            if (result.success) {
                messageElement.textContent = 'Contraseña cambiada exitosamente.';
                messageElement.className = 'message success';
            } else {
                messageElement.textContent = 'Error: ' + result.message;
                messageElement.className = 'message error';
            }

            messageElement.style.display = 'block';
        });
    </script>
    </div>
    <script src="script.js"></script>
</body>
</html>
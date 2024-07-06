// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Selecciona el formulario y añade un evento submit
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Previene que el formulario se envíe automáticamente

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const errorMessage = document.getElementById('error-message');

        // Validación del email
        if (!email) { // comprobar si el campo de la contraseña está vacío
            errorMessage.textContent = 'Por favor, introduce tu correo electrónico.';
            return;
        }

        // Validación de la contraseña
        if (!password) { // comprobar si el campo de la contraseña está vacío
            errorMessage.textContent = 'Por favor, introduce tu contraseña.';
            return;
        }

        if (password.length < 6) {
            errorMessage.textContent = 'La contraseña debe tener al menos 6 caracteres.';
            return;
        }

        // Si todas las validaciones son correctas
        errorMessage.textContent = '';

        // Aquí puedes agregar la lógica para enviar los datos del formulario al servidor.
        // Por ejemplo, usando fetch() o XMLHttpRequest.
        alert('Inicio de sesión exitoso');
    });
});
// script.js
document.getElementById('changePasswordForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Previene que el formulario se envíe automáticamente

    const currentPassword = document.getElementById('currentPassword').value;
    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorMessage = document.getElementById('error-message');

    // Validación de la contraseña actual
    if (!currentPassword) {
        errorMessage.textContent = 'Por favor, introduce tu contraseña actual.';
        return;
    }

    // Validación de la nueva contraseña
    if (!newPassword) {
        errorMessage.textContent = 'Por favor, introduce tu nueva contraseña.';
        return;
    }

    if (newPassword.length < 6) {
        errorMessage.textContent = 'La nueva contraseña debe tener al menos 6 caracteres.';
        return;
    }

    // Confirmar nueva contraseña
    if (newPassword !== confirmPassword) {
        errorMessage.textContent = 'Las nuevas contraseñas no coinciden.';
        return;
    }

    // Si todas las validaciones son correctas
    errorMessage.textContent = '';

    // Aquí puedes agregar la lógica para enviar los datos del formulario al servidor.
    // Por ejemplo, usando fetch() o XMLHttpRequest.
    alert('Contraseña cambiada exitosamente');
});

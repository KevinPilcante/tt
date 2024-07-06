const express = require('express');
const mysql = require('mysql');
const bcrypt = require('bcrypt');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.json());

const db = mysql.createConnection({
    host: 'localhost',
    user: 'email',
    password: 'currentPassword',
    database: 'proyectoDow'
});

db.connect(err => {
    if (err) throw err;
    console.log('Conectado a la base de datos.');
});

app.post('/change-password', async (req, res) => {
    const { currentPassword, newPassword } = req.body;
    const userId = 1; // Supongamos que el ID del usuario está en la sesión

    db.query('SELECT password FROM users WHERE id = ?', [userId], async (err, results) => {
        if (err) throw err;

        if (results.length === 0) {
            return res.json({ success: false, message: 'Usuario no encontrado.' });
        }

        const user = results[0];
        const match = await bcrypt.compare(currentPassword, user.password);

        if (!match) {
            return res.json({ success: false, message: 'Contraseña actual incorrecta.' });
        }

        const hashedNewPassword = await bcrypt.hash(newPassword, 10);

        db.query('UPDATE users SET password = ? WHERE id = ?', [hashedNewPassword, userId], err => {
            if (err) throw err;

            res.json({ success: true });
        });
    });
});

app.listen(3000, () => {
    console.log('Servidor escuchando en el puerto 3000.');
});

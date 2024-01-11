async function validarFormulario() {
    reiniciarMensajesError();
    var name = document.getElementById('name').value;
    var identificacion = document.getElementById('identificacion').value;
    var celular = document.getElementById('celular').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password_confirmation = document.getElementById('password_confirmation').value;

    if (name === '' || identificacion === '' || celular === '' || email === '' || password === '' || password_confirmation === '') {
        if (name === '') {
            mostrarError('nombres-error', 'El campo Nombres y apellidos es obligatorio.');
        }
        if (identificacion === '') {
            mostrarError('identificacion-error', 'El campo número de identificación es obligatorio.');
        }
        if (celular === '') {
            mostrarError('celular-error', 'El campo celular es obligatorio.');
        }
        if (email === '') {
            mostrarError('email-error', 'El campo correo electrónico es obligatorio.');
        }
        if (password === '') {
            mostrarError('password-error', 'Debe ingresar una contraseña.');
        }
        if (password_confirmation === '') {
            mostrarError('password_confirmation-error', 'Debe confirmar su contraseña.');
        }
        return false;
    }

    // Verifica que las contraseñas coincidan
    if (password !== password_confirmation) {
        mostrarError('password_confirmation-error', 'Las contraseñas no coinciden.');
        return false;
    }

    // Verifica que la contraseña tenga al menos 6 caracteres
    if (password.length < 6) {
        mostrarError('password-error', 'La contraseña debe tener al menos 6 caracteres.');
        return false;
    }

    // Verifica que la contraseña contenga al menos un número y una letra
    if (!/[0-9]/.test(password) || !/[a-zA-Z]/.test(password)) {
        mostrarError('password-error', 'La contraseña debe contener al menos un número y una letra.');
        return false;
    }

    // Verificar existencia de identificación y correo antes de continuar
    if (await existeUsuario(identificacion)) {
        mostrarError('identificacion-error', 'La identificación ya está registrada.');
        return false;
    }

    if (await existeCorreo(email)) {
        mostrarError('email-error', 'El correo electrónico ya está registrado.');
        return false;
    }

    return true; // Si todos los campos están llenos y las contraseñas coinciden, puedes enviar el formulario
}

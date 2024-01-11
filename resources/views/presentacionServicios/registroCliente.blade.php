@extends('layouts.principal')

@section('content')
@vite(['resources/css/serviciosCss/citas.css' ])
<br>
<div class="row justify-content-center align-items-center g-2 mt-2">
    <img src=" {{ asset('images/img/crearCuenta.png') }}" alt="Damas" width="90%">
</div>
<br>
<div class="formCita mt-4">
    <div class="text-center mt-4">
        <p class="degradarPalabra">Crea una cuenta en nuestra página, llenando el siguiente formulario</p>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form method="POST" action="{{ route('form_registrar') }}" id="ClienteForm"  onsubmit="return validarFormulario()">
         @csrf
        <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label">Nombres y Apellidos: </label>
                <input type="text" name="name" class="form-control custom-input" id="name" autocomplete="off">
                <div id="nombres-error" class="text-danger"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Número de Identificación: </label>
                <input type="number" name="identificacion" class="form-control custom-input" id="identificacion" autocomplete="off">
                <div id="identificacion-error" class="text-danger"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label">Número de celular: </label>
                <input type="number" name="celular" class="form-control custom-input" id="celular" autocomplete="off">
                <div id="celular-error" class="text-danger"></div>
            </div>  
            <div class="col-md-6">
                <label class="form-label">Correo electrónico: </label>
                <input type="email" name="email" class="form-control custom-input" id="email" autocomplete="off">
                <div id="email-error" class="text-danger"></div>
            </div>           
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label">Contraseña: </label>
                <input type="password" name="password" class="form-control custom-input" id="password" autocomplete="off">
                <div id="password-error" class="text-danger"></div>
            </div>  
            <div class="col-md-6">
                <label class="form-label">Confirmar Contraseña: </label>
                <input type="password" name="password_confirmation" class="form-control custom-input" id="password_confirmation" autocomplete="off">
                <div id="password_confirmation-error" class="text-danger"></div>
            </div>             
        </div>
        
        <div class=" mt-4 text-center">
            <button type="submit" id="submitButton" class="btnGuardar">Enviar</button>
        </div>
    </form>
</div>

<script>
    function validarFormulario() {
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

        if (validarUsuarioSync(identificacion, 'identificacion-error', 'El número de identificación ya se encuentra registrado.')) {
        return false;
        }

        if (validarUsuarioSync(email, 'email-error', 'El correo electrónico ya se encuentra registrado.')) {
            return false;
        }

            return true; // Si todos los campos están llenos y las contraseñas coinciden, puedes enviar el formulario
    }

    function reiniciarMensajesError() {
        // Limpia los mensajes de error
        document.getElementById('nombres-error').innerHTML = '';
        document.getElementById('identificacion-error').innerHTML = '';
        document.getElementById('celular-error').innerHTML = '';
        document.getElementById('email-error').innerHTML = '';
        document.getElementById('password-error').innerHTML = '';
        document.getElementById('password_confirmation-error').innerHTML = '';
    }

    function mostrarError(elementId, mensaje) {
        // Muestra el mensaje de error en el elemento correspondiente
        document.getElementById(elementId).innerHTML = mensaje;
    }

    

    
</script>


@endsection

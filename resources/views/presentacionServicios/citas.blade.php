@extends('layouts.principal')

@section('content')
@vite(['resources/css/serviciosCss/citas.css' ])

<div class="bodyDamas">
    <img src="{{asset('images/img/agenda.png')}}" alt="Damas" width="100%" height="60%">
</div>
<br>
<div class="formCita mt-4">
    <div class="text-center mt-4">
        <p class="degradarPalabra">Agenda una cita con nosotros, llenando el siguiente formulario</p>
    </div>
    <form id="citaForm" method="POST" action="{{url('/citas/registrar')}}">
         @csrf
        <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label">Nombres y Apellidos: </label>
                <input type="text" name="nombres" class="form-control custom-input" id="nombres" autocomplete="off">
                <div id="nombres-error" class="text-danger"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Correo electrónico: </label>
                <input type="email" name="correo" class="form-control custom-input" id="correo" autocomplete="off">
                <div id="correo-error" class="text-danger"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label">Número de celular: </label>
                <input type="text" name="celular" class="form-control custom-input" id="celular" autocomplete="off">
                <div id="celular-error" class="text-danger"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Fecha para agendamiento: </label>
                <input type="date" name="fecha" class="form-control custom-input" min={{$fechaActual}} id="fecha" autocomplete="off">
                <div id="fecha-error" class="text-danger"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <label class="form-label">Hora: </label>
                <select name="hora" class="form-select custom-input" id="hora">
                    <option value="" selected disabled>Seleccionar ....</option>
                    <option value="09:00">9:00 am</option>
                    <option value="10:00">10:00 am</option>
                    <option value="11:00">11:00 am</option>
                    <option value="14:00">2:00 pm</option>
                    <option value="15:00">3:00 pm</option>
                    <option value="16:00">4:00 pm</option>
                    <option value="17:00">5:00 pm</option>
                </select>
                <div id="hora-error" class="text-danger"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label control-label">Procedimiento a realizarse: </label>
                <select name="procedimiento" class="form-select custom-input" id="procedimiento">
                    <option value="" selected disabled>Seleccionar</option>
                    @foreach($procedimiento as $proc)
                        <option value="{{ $proc->id_tipo }}">{{ $proc->nombre_tipo }}</option>
                    @endforeach
                </select>
                <div id="procedimiento-error" class="text-danger"></div>
            </div>
        </div>
        <!-- <div id="errorMessage" class="text-danger"></div>

        <div id="exitMessage" class="text-info mt-4 text-center" style="font-size: 20px;"></div> -->

        <div class=" mt-4 text-center">
            <button type="submit" id="submitButton" onclick="validarFormulario()" class="btnGuardar">Enviar</button>
        </div>
    </form>
</div>


<script>
    document.getElementById('citaForm').addEventListener('submit', function(event) {
        event.preventDefault();
        validarFormulario();
    });

    function validarFormulario() {
        reiniciarMensajesError();
        var nombre = document.getElementById('nombres').value;
        var email = document.getElementById('correo').value;
        var celular = document.getElementById('celular').value;
        var fecha = document.getElementById('fecha').value;
        var hora = document.getElementById('hora').value;
        var procedimiento = document.getElementById('procedimiento').value;

        if (nombre === '' || email === '' || celular === '' || fecha === '' || hora === '' || procedimiento === '') {
            if (nombre === '') {
            mostrarError('nombres-error', 'El campo Nombre es obligatorio.');
            }
            if (email === '') {
                mostrarError('correo-error', 'El campo correo es obligatorio.');
            }
            if (celular === '') {
                mostrarError('celular-error', 'El campo celular es obligatorio.');
            }
            if (fecha === '') {
                mostrarError('fecha-error', 'El campo fecha es obligatorio.');
            }
            if (hora === '') {
                mostrarError('hora-error', 'El campo hora es obligatorio.');
            }
            if (procedimiento === '') {
                mostrarError('procedimiento-error', 'El campo procedimiento es obligatorio.');
            }
              return;
        }

        validarDisponibilidad(fecha, hora);
    
        
    }
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    function validarDisponibilidad(fecha, hora) {
        document.getElementById('submitButton').disabled = true
        $.ajax({
            url: '/citas/validar_disponibilidad',
            type: 'POST',
            data: {
                 fecha: fecha,
                 hora: hora,
                 _token: csrfToken,},
            dataType: 'json',
            success: function(response) {
                if (response.disponible) { 
                    document.getElementById('citaForm').submit();
                } else {
                    if (response.mensaje) {
                    mostrarError('hora-error', response.mensaje);
                } else {
                    mostrarError('hora-error', 'La hora seleccionada no está disponible. Por favor, elige otra.');
                }
                }
                document.getElementById('submitButton').disabled = false
            },
            error: function() {
                console.log('Error al realizar la solicitud Ajax')
            }
        });
    }

    function mostrarError(id, mensaje) {
        document.getElementById(id).innerHTML = mensaje;
    }

    function reiniciarMensajesError() {
        var mensajesError = document.getElementsByClassName('error-message');
        for (var i = 0; i < mensajesError.length; i++) {
            mensajesError[i].innerHTML = '';
        }
    }

</script>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Registro de citas') }}</div>
                <div class="card-body">
                    <form class="needs-validation" method="POST" novalidate action="{{ url('/citas/crear_cita') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="identificacion" class="col-md-6 col-form-label ">{{ __('Identificación') }}</label>
                                <input id="identificacion" type="text" class="form-control" name="identificacion" required autocomplete="identificacion" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="nombre" class="col-md-6 col-form-label ">{{ __('Nombre') }}</label>
                                <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="correo" class="col-md-6 col-form-label">{{ __('Correo') }}</label>
                                <input id="correo" type="text" class="form-control" name="correo" required autocomplete="correo" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha" class="col-md-6 col-form-label">{{ __('Fecha') }}</label>
                                <input id="fecha" type="date" class="form-control" name="fecha" required autocomplete="fecha" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="hora" class="col-md-6 col-form-label">{{ __('Hora') }}</label>
                                <input id="hora" type="text" class="form-control" name="hora" required autocomplete="hora" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="celular" class="col-md-6 col-form-label">{{ __('Celular') }}</label>
                                <input id="celular" type="text" class="form-control" name="celular" required autocomplete="celular" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="procedimiento" class="col-md-4 col-form-label ">{{ __('Procedimiento') }}</label>
                                <select name="procedimiento" id="procedimiento" required autocomplete="procedimiento" class="form-select">
                                    <option selected disabled>Seleccione ...</option>
                                    @foreach($listaServicios AS $servicio)
                                        <option value="{{ $servicio->id_procedimiento }}">{{ $servicio->nombre_procedimiento }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection

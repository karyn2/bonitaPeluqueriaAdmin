@extends('layouts.app')

@section('title', 'Registrar Servicios')

@section('content_header')
    <h1>Registrar Servicios</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">{{ __('Registro Servicios') }}</div>
                    <div class="card-body">

                        <form id='formulario' class="needs-validation" method="POST" novalidate action="{{ url('/servicios/crear') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="nombre_procedimiento"
                                        class="col-md-4 col-form-label ">{{ __('Nombre Procedimiento') }}</label>
                                    <input id="nombre_procedimiento" type="text"
                                        class="form-control @error('nombre_procedimiento') is-invalid @enderror"
                                        name="nombre_procedimiento" value="{{ old('nombre_procedimiento') }}" required
                                        autocomplete="nombre_procedimiento">
                                    @error('nombre_procedimiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="precio" class="col-md-6 col-form-label ">{{ __('Precio') }}</label>
                                    <input id="precio" type="text"
                                        class="form-control @error('precio') is-invalid @enderror" name="precio"
                                        value="{{ old('precio') }}" required autocomplete="precio" >
                                    @error('precio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="fk_id_tipo"
                                        class="col-md-4 col-form-label">{{ __('Tipo de Servicio') }}</label>
                                    <select class="form-select choices @error('fk_id_tipo') is-invalid @enderror"
                                        name="fk_id_tipo" id="fk_id_tipo">
                                        <option value="" disabled {{ old('fk_id_tipo') == '' ? 'selected' : '' }}>
                                            Seleccione</option>
                                        @foreach ($tipo_procedimiento as $tipo)
                                            <option value="{{ $tipo->id_tipo }}"
                                                {{ old('fk_id_tipo') == $tipo->id_tipo ? 'selected' : '' }}>
                                                {{ $tipo->nombre_tipo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('fk_id_tipo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <br>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@vite(['resources\js\servicio.js'])

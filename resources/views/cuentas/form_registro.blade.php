@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">{{ __('Registro ingresos') }}</div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" novalidate action="{{ url('/cuentas/registrar') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="pago" class="col-md-6 col-form-label ">{{ __('Monto pagado') }}</label>
                                    <input id="pago" type="text"
                                        class="form-control @error('pago') is-invalid @enderror" name="pago"
                                        value="{{ old('pago') }}" required autocomplete="pago" autofocus>
                                    @error('pago')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <label for="porcentaje_pago"
                                        class="col-md-4 col-form-label ">{{ __('Personal') }}</label>
                                    <select choices name="personal" id="personal" required autocomplete="personal"
                                        class="form-select">
                                        <option value="" selected disabled>Seleccione ...</option>
                                        @foreach ($listaPersonal as $personal)
                                            <option value="{{ $personal->identificacion }}"
                                                {{ old('personal') == $personal->identificacion ? 'selected' : '' }}>
                                                {{ $personal->nombres . ' ' . $personal->apellidos }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('personal')
                                        <label class="text-danger small" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </label>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="procedimiento"
                                        class="col-md-4 col-form-label ">{{ __('Procedimiento') }}</label>
                                    <select choices name="procedimiento" id="procedimiento" required autocomplete="procedimiento"
                                        class="form-select">
                                        <option value="" selected disabled>Seleccione ...</option>
                                        @foreach ($listaServicios as $servicio)
                                            <option value="{{ $servicio->id_procedimiento }}"
                                                {{ old('procedimiento') == $servicio->id_procedimiento ? 'selected' : '' }}>
                                                {{ $servicio->nombre_procedimiento }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('procedimiento')
                                        <label class="text-danger small" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </label>
                                    @enderror
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

@vite(['resources/js/cuentas.js'])

<!-- Include Choices CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"
/>

<!-- Include Choices JavaScript (latest) -->
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

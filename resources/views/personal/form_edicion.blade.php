@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"> <h4>{{ __('Actualizar Empleado') }}</h4></div>
                <div class="card-body">
                    <form class="needs-validation" method="POST" novalidate action="{{url('/personal/editar',$personal->identificacion )}}">
                        @csrf
                        <div class="row mb-3">   
                                                   
                            <div class="col-md-6">
                                <label for="identificacion" class="col-md-8 col-form-label ">{{ __('Número de Identificación') }}</label>
                                <input id="identificacion" readonly type="text" class="form-control @error('identificacion') is-invalid @enderror" name="identificacion" value="{{$personal->identificacion}}" required autocomplete="identificacion" autofocus>
                                @error('identificacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nombres" class="col-md-4 col-form-label ">{{ __('Nombres') }}</label>
                                <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{$personal->nombres}}" required autocomplete="nombres">
                                @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">                          
                            <div class="col-md-6">
                                <label for="apellidos" class="col-md-6 col-form-label ">{{ __('Apellidos') }}</label>
                                <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{$personal->apellidos}}" required autocomplete="apellidos" >
                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="correo" class="col-md-4 col-form-label ">{{ __('Correo Electrónico') }}</label>
                                <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{$personal->correo}}" required autocomplete="correo">
                                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">                          
                            <div class="col-md-6">
                                <label for="telefono" class="col-md-6 col-form-label ">{{ __('Teléfono') }}</label>
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{$personal->telefono}}" required autocomplete="telefono" >
                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                            <label for="cargo" class="col-md-4 col-form-label">{{ __('Cargo') }}</label>
                            <select name="cargo" id="cargo" required autocomplete="cargo" class="form-select">
                                <option selected disabled>Seleccione ...</option>
                                @foreach ($cargos as $cargo)
                                    <option value="{{ $cargo }}" @if($cargo == $personal->cargo) selected @endif>{{ ucfirst($cargo) }}</option>
                                @endforeach
                            </select>     
                            </div>
                        </div>
                        <!-- Agrega esto para depurar -->
                        <div class="row mb-3">                          
                            <div class="col-md-6">
                                <label for="porcentaje_pago" class="col-md-4 col-form-label">{{ __('Porcentaje Pago') }}</label>
                                <select name="porcentaje_pago" id="porcentaje_pago" required autocomplete="porcentaje_pago" class="form-select">
                                    <option selected disabled>Seleccione ...</option>
                                    @foreach ($porcentajesPago as $valor)
                                        <option value="{{ $valor }}" {{ $valor == $personal->porcentaje_pago ? 'selected' : '' }}>
                                            @if ($valor == 1)
                                                100%
                                            @elseif ($valor == 0.5)
                                                50%
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>                     
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-info text-white">
                                    {{ __('Guardar Cambios') }}
                                </button>
                                <a href="/personal/listado" class="btn btn-danger text-white"> {{ __('Cancelar') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
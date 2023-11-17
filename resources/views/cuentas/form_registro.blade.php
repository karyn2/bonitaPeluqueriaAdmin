@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Registro ingresos') }}</div>
                <div class="card-body">
                    <form class="needs-validation" method="POST" novalidate action="{{url('/personal/registrar')}}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="pago" class="col-md-6 col-form-label ">{{ __('Monto pagado') }}</label>
                                <input id="pago" type="text" class="form-control @error('identificacion') is-invalid @enderror" name="identificacion" value="{{ old('identificacion') }}" required autocomplete="identificacion" autofocus>
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
                                <label for="porcentaje_pago" class="col-md-4 col-form-label ">{{ __('Personal') }}</label>
                                    <select name="personal" id="personal" required autocomplete="personal" class="form-select">
                                        <option selected disabled>Seleccione ...</option>
                                        <option value="" >Juan</option>
                                        <option value="" >Maria</option>
                                    </select>
                            </div>
                            <div class="col-md-6">
                                <label for="procedimiento" class="col-md-4 col-form-label ">{{ __('Procedimiento') }}</label>
                                <select name="procedimiento" id="procedimiento" required autocomplete="procedimiento" class="form-select">
                                    <option selected disabled>Seleccione ...</option>
                                    <option value="" >Corte de pelo</option>
                                    <option value="" >Corte</option>
                                </select>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">

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

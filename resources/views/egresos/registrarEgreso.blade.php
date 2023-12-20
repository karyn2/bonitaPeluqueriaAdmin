@extends('layouts.app')

@section('title', 'Egresos')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">{{ __('Registro Egresos') }}</div>
                    <div class="card-body">

                        <form id="myForm" class="needs-validation" method="POST" novalidate action="{{ url('/egresos/crear') }}">
                            @csrf
                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6 col-form-label " for="a_quien_se_dio">{{ __('A quien se dio:') }}</label>
                                        <input type="text" name="a_quien_se_dio" id="a_quien_se_dio"
                                            class="form-control @error('a_quien_se_dio') is-invalid @enderror">
                                        @error('a_quien_se_dio')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="mi_tipo_egreso" class="form-group col-md-6 col-form-label">{{ __('Tipo Egreso') }}</label>
                                    <select class="form-select choices @error('fk_tipo_egreso') is-invalid @enderror" name="fk_tipo_egreso" id="mi_tipo_egreso">
                                        <option value="" {{ empty(old('fk_tipo_egreso')) ? 'selected' : '' }} disabled>
                                            Seleccione
                                        </option>
                                        @foreach ($tipo_egreso as $tipo)
                                            <option value="{{ $tipo->id }}" {{ old('fk_tipo_egreso') == $tipo->id ? 'selected' : '' }}>
                                                {{ $tipo->nombre_tipo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('fk_tipo_egreso')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6 col-form-label " for="valor">{{ __('Valor') }}</label>
                                        <input type="number" name="valor" id="valor"
                                            class="form-control @error('valor') is-invalid @enderror">
                                        @error('valor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-6 col-form-label "
                                            for="descripcion_egreso">{{ __('Descripción') }}</label>
                                        <textarea name="descripcion_egreso" id="descripcion_egreso" rows="4"
                                            class="form-control @error('descripcion_egreso') is-invalid @enderror"></textarea>
                                        @error('descripcion_egreso')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">Registrar Egreso</button>
                                </div>
                            </div>

                        </form>


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

@vite(['resources\js\egreso.js'])

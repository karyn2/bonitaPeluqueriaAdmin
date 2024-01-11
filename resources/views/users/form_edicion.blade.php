@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                   <h4>{{ __('Actualizar Usuario ') }}</h4> 
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('/usuarios/editar',$usuario->id )}}">
                        @csrf
                        <div class="row mb-3 p-2">                          
                            <div class="col-md-6">
                                <label for="name" class="col-form-label text-md-end">{{ __('Nombres y Apellidos') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{$usuario->name}}"  required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                            <label for="name" class="col-form-label text-md-end">{{ __('Número de identificación') }}</label>
                                <input id="identificacion" type="text" class="form-control @error('identificacion') is-invalid @enderror" name="identificacion" value="{{$usuario->identificacion}}"  required autocomplete="identificacion" autofocus>
                                @error('identificacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">                         
                            <div class="col-md-6">
                                <label for="name" class="col-form-label text-md-end">{{ __('Número de celular') }}</label>
                                <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{$usuario->celular}}"   required autocomplete="name" autofocus>
                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                           
                            <div class="col-md-6">
                                <label for="email" class=" col-form-label text-md-end">{{ __('Correo electrónico') }}</label>
                                <input id="email" readonly type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}"  required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0 mt-1">
                            <div class=" mt-1">
                                <button type="submit" class="btn btn-info text-white">
                                    {{ __('Guardar Cambios') }}
                                </button>
                                <a href="/usuarios" class="btn btn-danger text-white"> {{ __('Cancelar') }}</a>
          
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

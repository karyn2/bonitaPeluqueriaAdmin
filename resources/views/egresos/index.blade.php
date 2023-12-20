@extends('layouts.app')

@section('title', 'Egresos')

@section('content')

<div class="container-fluid contenedorPrincipal">
    <div class="row text-center">
        <div class="col-sm-6 col-md-6 p-6">
            <div class="card cuadro mx-auto">
                <a href="/cuentas/listar" class="sinDecorado" >
                    <img src="{{ asset('images/ingreso.png') }}" alt="Imagen">
                    <b class="fuenteEtiquetas">Ingresos</b>
                </a>
            </div>
        </div>
            <div class="col-sm-6 col-md-6 p-6">
                <div class="card cuadro mx-auto">
                    <a href="/egresos/listar" class="sinDecorado">
                        <img src="{{ asset('images/Egreso.png') }}" alt="Imagen">
                        <b class="fuenteEtiquetas">Egresos</b>
                    </a>
                </div>
            </div>
    </div>

</div>

@endsection

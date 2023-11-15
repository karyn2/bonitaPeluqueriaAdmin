@extends('layouts.app')
 
@section('content')
<div class="container-fluid contenedorPrincipal">
    <div class="row">
        <div class="col-sm-6 col-md-4 p-4">
            <div class="card cuadro ">
                <a href="/citas/listar">
                    <img src="{{ asset('images/evento2.png') }}" alt="Imagen">
                    <b class="fuenteEtiquetas">Citas</b>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 p-4">
            <div class="card cuadro">
                <a href="">
                    <img src="{{ asset('images/citahoy.png') }}" alt="Imagen">
                    <b class="fuenteEtiquetas">Mi Agenda hoy</b>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 p-4">
            <div class="card cuadro">
                <a href="{{ url('/servicios/listar') }}">
                    <img src="{{ asset('images/procedimientos.png') }}" alt="Imagen">
                    <b class="fuenteEtiquetas">Servicios</b>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 p-4">
            <div class="card cuadro ">
                <a href="">
                    <img src="{{ asset('images/contabilidad.png') }}" alt="Imagen">
                    <b class="fuenteEtiquetas">Contabilidad</b>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 p-4">
            <div class="card cuadro">
                <a href="{{ url('/register') }}">
                    <img src="{{ asset('images/perfil.png') }}" alt="Imagen">
                    <b class="fuenteEtiquetas">Usuarios Sistema</b>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 p-4">
            <div class="card cuadro">
                <a href="{{ url('/personal/listado') }}">
                    <img src="{{ asset('images/empleo.png') }}" alt="Imagen">
                    <b class="fuenteEtiquetas">Personal</b>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

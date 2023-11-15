@extends('layouts.app')

@section('content')
<!-- Sección de citas -->

<div class="container">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title text-start">Lista de Citas</h3>
            <a class="btn btn-primary ml-auto" href="#"><i class="fa fa-plus"></i> Registrar</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Tabla de citas -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Procedimiento</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listaCitas as $cita)
                        <tr>
                            <td>{{ $cita->id }}</td>
                            <td>{{ $cita->nombre }}</td>
                            <td>{{ $cita->correo }}</td>
                            <td>{{ $cita->fecha }}</td>
                            <td>{{ $cita->hora }}</td>
                            <td>{{ $cita->procedimiento }}</td>
                            <td>{{ $cita->celular }}</td>
                            <td class="gap-2">
                                <a class="btn btn-success" href="#"><i class="fa fa-pencil" style="color: #ffffff;"></i></a>
                                <a class="btn btn-danger" href="#"><i class="fa fa-trash" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

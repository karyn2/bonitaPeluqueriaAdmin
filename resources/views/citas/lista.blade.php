@extends('layouts.app')

@section('content')
<!-- Sección de citas -->

<div class="container">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title text-start">Lista de Citas</h3>
            <a class="btn btn-primary ml-auto" href="{{ route('crear_cita')}}"><i class="fa fa-plus"></i> Registrar</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Tabla de citas -->
                <table class="table table-bordered table-striped" id="tabla-citas">
                    <thead>
                        <tr>
                            <th scope="col">Identificación</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Procedimiento</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($listaCitas as $cita)
                        <tr>
                            <td>{{ $cita->identificacion }}</td>
                            <td>{{ $cita->name }}</td>
                            <td>{{ $cita->fecha }}</td>
                            <td>{{ $cita->hora }}</td>
                            <td>{{ $cita->celular }}</td>
                            <td>{{ $cita->nombre_procedimiento }}</td>
                            <td>@if($cita->estado_cita)
                                    Activa
                                @else
                                    Inactiva
                                @endif
                            </td>
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

    <!-- Agregar los estilos de Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

     <!-- Agregar los estilos de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Agregar jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Agregar DataTables -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
                $('#tabla-citas').DataTable({
                    language: {
                        processing: "Procesando...",
                        search: "Buscar:",
                        lengthMenu: "Mostrar: _MENU_ <br>",
                        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
                        infoEmpty: "Mostrando de 0 a 0 de un total de 0 registros",
                        infoFiltered: "(filtrado de un total de _MAX_ registros)",
                        infoPostFix: "",
                        loadingRecords: "Cargando...",
                        zeroRecords: "No se encontraron registros coincidentes",
                        emptyTable: "No hay datos disponibles en la tabla",
                        paginate: {
                            first: "Primero",
                            previous: "Anterior",
                            next: "Siguiente",
                            last: "Último"
                        },
                        aria: {
                            sortAscending: ": activar para ordenar la columna ascendente",
                            sortDescending: ": activar para ordenar la columna descendente"
                        }
                    },
                    lengthMenu: [[5, 25, 50, -1], [5, 25, 50, "Todos"]],
                    dom: '<"d-flex"lf>rtip',
                });
                $('.dataTables_length label').addClass('me-3');
            });
    </script>
@endsection

@extends('layouts.app')

@section('content')
<!-- Sección de citas -->

<div class="container">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title text-start">Lista de Usuarios</h3>
            <a class="btn btn-primary ml-auto" href="/register"><i class="fa fa-plus"></i> Registrar</a>
        </div>
        <div class="card-body mt-4">
            <div class="table-responsive">
                <!-- Tabla de citas -->
                <table class="table table-bordered table-striped mt-2" id="tabla-citas">
                    <thead>
                            <tr>
                            <th scope="col">Identificación</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">correo</th>
                            <th scope="col">Role</th>
                            <th scope="col">Opciones</th>
                            </tr>
                    </thead>

                    <tbody>
                        @foreach($user as $p)
                            <tr>
                                <td>{{ $p->identificacion }}</td>
                                <td>{{ $p->name }} </td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->role}}</td>
                                <td>
                                <a class="btn btn-info text-white" href="{{route('editar_usuario', $p->id)}}"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger text-white" href="{{route('eliminar_usuario', $p->id)}}">
                                <i class="fa fa-trash"></i></a>
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

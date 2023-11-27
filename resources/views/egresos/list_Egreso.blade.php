@extends('layouts.app')

@section('title', 'Egresos')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header" style="background-color: #f8f9fa;">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Lista de Egresos</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{route('form_registrar_egreso')}}"  class="btn btn-primary float-end">
                            <i class="bi bi-plus"></i> Registrar Egreso
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="max-height: 500px;">
                    <table id="egresos" class="table table-striped table-bordered" style="width:100%">
                        <thead style="background-color: #f8f9fa;">
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>Descripción</th>
                                <th>Fecha y Hora</th>
                                <th>Realizó</th>
                                <th>Recibió</th>
                                <th>Monto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @forelse ($egresos as $i => $s)
                                <tr style="background-color: #fff;" onmouseover="this.style.backgroundColor='#f8f9fa';" onmouseout="this.style.backgroundColor='#fff';">
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $s->nombre_tipo }}</td>
                                    <td>{{ $s->descripcion_egreso }}</td>
                                    <td>{{ $s->fecha_hora }}</td>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->a_quien_se_dio }}</td>
                                    <td>{{ $s->valor }}</td>
                                    <td style="padding: 0.5rem;">
                                        <button class="btn btn-warning btn-sm" style="margin-right: 0.5rem;">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No hay egresos disponibles</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<br>
    <!-- Agregar los estilos de Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

     <!-- Agregar los estilos de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Agregar jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Agregar DataTables -->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>

    <!-- Inicializar DataTables -->
<!-- Inicializar DataTables -->
<script>
    $(document).ready(function() {
        $('#egresos').DataTable({
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

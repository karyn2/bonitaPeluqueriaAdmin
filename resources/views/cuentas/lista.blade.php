@extends('layouts.app')

@section('content')
<!-- Sección de ingresos -->

<div class="container">

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title text-start">Lista de ingresos</h3>
            <a class="btn btn-primary ml-auto" href=" {{ route('crear_ingreso')}}"><i class="fa fa-plus"></i> Registrar ingreso</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Tabla de citas -->
                <table class="table table-bordered table-striped" id="tabla-cuentas" >
                    <thead>
                        <tr>
                            <th scope="col">Id Ingreso</th>
                            <th scope="col">Fecha Pago</th>
                            <th scope="col">Pago</th>
                            <th scope="col">Procedimiento</th>
                            <th scope="col">Personal</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listaIngresos AS $ingreso)
                        <tr>
                            <td>{{ $ingreso->id_ingresos }}</td>
                            <td>{{ $ingreso->fecha_pago }}</td>
                            <td>{{ $ingreso->pago }}</td>
                            <td>{{ $ingreso->nombre_procedimiento }}</td>
                            <td>{{ $ingreso->nombres . ' ' . $ingreso->apellidos }}</td>
                            <td class="gap-2">
                                <a class="btn btn-success" href="{{ route('cuentas_editar', $ingreso->id_ingresos) }}"><i class="fa fa-pencil" style="color: #ffffff;"></i></a>
                                <a class="btn btn-danger" href="{{ route('cuentas_eliminar', $ingreso->id_ingresos) }}"><i class="fa fa-trash" style="color: #ffffff;"></i></a>
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
                   $('#tabla-cuentas').DataTable({
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


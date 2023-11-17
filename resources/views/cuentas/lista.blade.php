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
                <table class="table table-bordered table-striped">
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

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="gap-2">
                                <a class="btn btn-success" href="#"><i class="fa fa-pencil" style="color: #ffffff;"></i></a>
                                <a class="btn btn-danger" href="#"><i class="fa fa-trash" style="color: #ffffff;"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection

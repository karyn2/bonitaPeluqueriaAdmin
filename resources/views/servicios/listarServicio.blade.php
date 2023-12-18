@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header" style="background-color: #f8f9fa;">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Lista de Servicios</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{route('form_registrar_servicio')}}"  class="btn btn-primary float-end">
                            <i class="bi bi-plus"></i> Registrar Servicio
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="max-height: 500px;">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead style="background-color: #f8f9fa;">
                            <tr>
                                <th>#</th>
                                <th>Procedimiento</th>
                                <th>Precio</th>
                                <th>Tipo de Procedimiento</th>
                                <th>Opción</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @forelse ($servicios as $i => $s)
                                <tr style="background-color: #fff;" onmouseover="this.style.backgroundColor='#f8f9fa';" onmouseout="this.style.backgroundColor='#fff';">
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $s->nombre_procedimiento }}</td>
                                    <td>${{ number_format($s->precio, 0, ',', '.') }}</td>
                                    <td>{{ $s->nombre_tipo }}</td>
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
                                    <td colspan="5">No hay servicios disponibles</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<br>


    <!-- Inicializar DataTables -->
<!-- Inicializar DataTables -->



@endsection
@vite(['resources\js\servicio.js'])

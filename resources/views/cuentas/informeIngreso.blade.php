@extends('layouts.app')

@section('title', 'Ingresos')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header" style="background-color: #f8f9fa;">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Informe de Ingresos por Tipo y Rango Fecha</h4>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('crear_ingreso') }}" class="btn btn-primary float-end">
                            <i class="bi bi-plus"></i> Registrar Ingreso
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body d-flex flex-column">
                <form action="{{ route('informe_cuentas') }}" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">Generar Informe</button>
                            <button type="submit" formaction="{{ url('/ingresos/pdf') }}" formtarget="_blank" class="btn btn-secondary"> <i class="bi bi-file-pdf"></i> Generar PDF</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="fecha_fin" class="form-label">Fecha Fin</label>
                            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
                        </div>
                    </div>
                </form>
            </div>

            @if (isset($listaIngresos))
                <div class="card-body">
                    <div class="table-responsive" style="max-height: 500px;">
                        <table id="ingresos" class="table table-striped table-bordered" style="width:100%">
                            <thead style="background-color: #f8f9fa;">
                                <tr>
                                    <th>Id_Ingreso</th>
                                    <th>Fecha Pago</th>
                                    <th>Procedimiento</th>
                                    <th>Personal</th>
                                    <th>Pago</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @forelse ($listaIngresos as $ingreso)
                                    <tr style="background-color: #fff;" onmouseover="this.style.backgroundColor='#f8f9fa';"
                                        onmouseout="this.style.backgroundColor='#fff';">
                                        <td>{{ $ingreso->id_ingresos }}</td>
                                        <td>{{ $ingreso->fecha_pago }}</td>
                                        <td>{{ $ingreso->nombre_procedimiento }}</td>
                                        <td>{{ $ingreso->nombres . ' ' . $ingreso->apellidos }}</td>
                                        <td>$ {{ number_format($ingreso->pago, 0, '.', '.') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No hay ingresos disponibles</td>
                                    </tr>
                                @endforelse
                                <tr style="background-color: #f2f2f2;">
                                    <td colspan="4" style="text-align: right;"><strong>Total:</strong></td>
                                    <td>$ {{ number_format($listaIngresos->sum('pago'), 0, '.', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif




        </div>
    </div>




@endsection

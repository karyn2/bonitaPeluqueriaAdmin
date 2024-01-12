@extends('layouts.app')

@section('title', 'Egresos')

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-header" style="background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-6">
                    <h4>Informe de Egreso por Tipo y Rango Fecha</h4>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{route('form_registrar_egreso')}}" class="btn btn-primary float-end">
                        <i class="bi bi-plus"></i> Registrar Egreso
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body d-flex flex-column">
            <form action="{{ route('informe_egresos') }}" method="POST">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <label for="mi_tipo_egreso" class="form-group col-md-4 col-form-label">{{ __('Tipo Egreso') }}</label>
                        <select class="form-select choices @error('fk_tipo_egreso') is-invalid @enderror" name="fk_tipo_egreso"
                            id="mi_tipo_egreso" style="margin-top: 5px;">
                            <option value="" {{ empty(old('fk_tipo_egreso')) ? 'selected' : '' }} disabled>
                                Seleccione
                            </option>
                            @foreach ($tipo_egreso as $tipo)
                            <option value="{{ $tipo->id }}" {{ old('fk_tipo_egreso')==$tipo->id ? 'selected' : '' }}>
                                {{ $tipo->nombre_tipo }}
                            </option>
                            @endforeach
                        </select>
                        @error('fk_tipo_egreso')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary">Generar Informe</button>
                        <button type="submit" formaction="{{ url('/egresos/pdf') }}" formtarget="_blank" class="btn btn-secondary">
                            <i class="bi bi-file-pdf"></i> Generar PDF
                        </button>
                    </div>      

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control">
                    </div>
        
                    <div class="col-md-4">
                        <label for="fecha_fin" class="form-label">Fecha Fin</label>
                        <input type="date" name="fecha_fin" id="fecha_fin" class="form-control">
                    </div>
                </div>


            </form>
        </div>
        
        

        @if(isset($egresos))
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
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @forelse ($egresos as $i => $s)
                        <tr style="background-color: #fff;" onmouseover="this.style.backgroundColor='#f8f9fa';"
                            onmouseout="this.style.backgroundColor='#fff';">
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $s->nombre_tipo }}</td>
                            <td>{{ $s->descripcion_egreso }}</td>
                            <td>{{ $s->fecha_hora }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->a_quien_se_dio }}</td>
                            <td>$ {{ number_format($s->valor, 0, '.', '.') }}</td>
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
        @endif

    </div>
</div>


@endsection
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
                    <a href="{{route('form_registrar_servicio')}}" class="btn btn-primary float-end">
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
                        <tr style="background-color: #fff;" onmouseover="this.style.backgroundColor='#f8f9fa';"
                            onmouseout="this.style.backgroundColor='#fff';">
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $s->nombre_procedimiento }}</td>
                            <td>${{ number_format($s->precio, 0, ',', '.') }}</td>
                            <td>{{ $s->nombre_tipo }}</td>
                            <td style="padding: 0.5rem;">
                                <button class="btn btn-warning btn-sm" style="margin-right: 0.5rem;"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $s->id_procedimiento }}">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal{{ $s->id_procedimiento }}" tabindex="-1"
                            aria-labelledby="editModalLabel{{ $s->id_procedimiento }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $s->id_procedimiento }}">Editar
                                            Servicio</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Add your form fields for editing the record here -->
                                        <form id='formulario' class="needs-validation" method="POST" novalidate action="{{ route('form_editar_servicio', ['id_procedimiento' => $s->id_procedimiento]) }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="procedimiento{{ $s->id_procedimiento }}" class="form-label">Procedimiento</label>
                                                <input type="text" class="form-control" id="procedimiento{{ $s->id_procedimiento }}" name="nombre_procedimiento" value="{{ $s->nombre_procedimiento }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="precio{{ $s->id_procedimiento }}" class="form-label">Precio</label>
                                                <input type="text" class="form-control" id="precio{{ $s->id_procedimiento }}" name="precio" value="{{ number_format($s->precio, 0, ',', '.') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tipo{{ $s->id_procedimiento }}" class="form-label">Tipo de Procedimiento</label>
                                                <select class="form-select" id="tipo{{ $s->id_procedimiento }}" name="fk_id_tipo">
                                                    @foreach($tipo_procedimiento as $servicio)
                                                        <option value="{{ $servicio->id_tipo }}" @if($servicio->id_tipo == $s->fk_id_tipo) selected @endif>
                                                            {{ $servicio->nombre_tipo }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                            </div>
                                            
                                        </form>
                                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        
                                        
                                </div>
                            </div>

                        </div>
                        @endif
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

    <!-- Button trigger modal -->

</div>
@endsection
@vite(['resources\js\servicio.js'])
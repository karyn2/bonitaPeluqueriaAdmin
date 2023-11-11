@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Personal') }}</div>
                <div class="card-body mt-4">
                    <a href="/personal/crear_registro" class="btn btn-success">  <i class="fa fa-plus"></i> Registrar</a>
                    <div class="container">
                    <table class="table mt-4 text-center">
                        <thead class="table-info text-center">
                            <tr>
                            <th scope="col">Identificación</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Porcentaje Pago</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personals as $p)
                            <tr>
                                <td>{{ $p->identificacion }}</td>
                                <td>{{ $p->nombres }} {{ $p->apellidos }}</td>
                                <td>{{ $p->cargo }}</td>
                                <td>{{ $p->porcentaje_pago * 100 }} %</td>
                                <td>
                                <button class="btn btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

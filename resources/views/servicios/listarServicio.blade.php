    @extends('layouts.app')

    @section('content')
        <div>
            <div style="text-align: right; margin-top: 1rem; margin-right: 1rem;">
                <button>
                    <i class="fas fa-plus"></i> Registrar
                </button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tipo de Procedimiento</th>
                        <th>Procedimiento</th>
                        <th>Precio</th>
                        <th>Opción</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($servicios as $s)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $s->nombre_tipo }}</td>
                            <td>{{ $s->nombre_procedimiento }}</td>
                            <td>{{ $s->precio }}</td>
                            <td>
                                <button>
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button>
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                            @php
                                $i = $i + 1;
                            @endphp
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection

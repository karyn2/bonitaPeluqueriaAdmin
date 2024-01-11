<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe</title>
    <style>
        /* Estilos adicionales según tus necesidades */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Informe en PDF</h1>

    @if(count($egresos) > 0)
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
                                <tr style="background-color: #fff;" onmouseover="this.style.backgroundColor='#f8f9fa';" onmouseout="this.style.backgroundColor='#fff';">
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $s->nombre_tipo }}</td>
                                    <td>{{ $s->descripcion_egreso }}</td>
                                    <td>{{ $s->fecha_hora }}</td>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->a_quien_se_dio }}</td>
                                    <td>{{ $s->valor }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No hay egresos disponibles</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
    @else
        <p>No se encontraron datos para el informe.</p>
    @endif

</body>
</html>
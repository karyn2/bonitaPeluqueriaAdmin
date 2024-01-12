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

    @if(count($listaIngresos) > 0)
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
    @else
        <p>No se encontraron datos para el informe.</p>
    @endif

</body>
</html>

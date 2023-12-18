$(document).ready(function() {
    $('#example').DataTable({
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

document.addEventListener('DOMContentLoaded', function () {
    var select = new window.Choices('#fk_id_tipo', {
        maxItemCount: 5,
        removeItemButton: true,
        allowHTML: true,
    });
});


document.getElementById('precio').addEventListener('input', function (event) {
    let valor = event.target.value.replace(/[^0-9]/g, '');
    let numero = Number(valor);
    if (!isNaN(numero)) {
        valor = numero.toLocaleString('es-CO');
    } else {
        valor = event.target.value;
    }
    event.target.value = valor;
});

document.getElementById('formulario').addEventListener('submit', function () {
    let precioInput = document.getElementById('precio');
    precioInput.value = precioInput.value.replace(/\./g, '');
});

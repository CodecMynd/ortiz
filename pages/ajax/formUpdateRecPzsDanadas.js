// 4.1.3 Registrar Solicitud de Piezas ------------------------------------------------------------------------------------------------------------------------------------
$('#btnNuevoRegSolRecPzsDanadas').click(function () {
    var param = $('#formNuevoRegSolRecPzsDanadas').serialize();
    $.ajax({
            url: '../adds/addNuevoRegSolRecPzsDanadas.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegSolRecPzsDanadas')[0].reset();
                $("#table_refresh").load(" #table_refresh");
            }
        })
        .done(function (res) {
            $('#respuestaRegSolRecPzsDanadas').html(res)
        })
});
// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// 4.1.5 Eliminar Solicitud de Piezas
$('#btnDeleteSolPzsDanadas').click(function () {
    var param = $('#formDeleteSolPzsDanadas').serialize();
    $.ajax({
            url: '../delete/deleteSolPzsDanadas.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteSolPzsDanadas')[0].reset();
                $("#table_refresh").load(" #table_refresh");
            }
        })
        .done(function (res) {
            $('#respuestaDeleteSolPzsDanadas').html(res)
        })
});

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
var tabla = $("#tableUpdateRecPzsDanadas").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "buttons": ["csv", "excel", "pdf"],
    "language": {

        "aria": {
            "sortAscending": "Activar para ordenar la columna de manera ascendente",
            "sortDescending": "Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
            "collection": "Colección",
            "colvis": "Filtrar columnas",
            "colvisRestore": "Restaurar visibilidad",
            "copy": "Copiar",
            "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
            "copySuccess": {
                "1": "Copiada 1 fila al portapapeles",
                "_": "Copiadas %d fila al portapapeles"
            },
            "copyTitle": "Copiar al portapapeles",
            "csv": "CSV",
            "excel": "Excel",
            "pageLength": {
                "-1": "Mostrar todas las filas",
                "_": "Mostrar %d filas"
            },
            "pdf": "PDF",
            "print": "Imprimir"
        },
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "infoThousands": ",",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "processing": "Procesando...",
        "search": "Buscar:",
        "decimal": ".",
        "emptyTable": "No hay datos disponibles en la tabla",
        "info": "Mostrando de _START_ al _END_ de  _TOTAL_ registros",
        "zeroRecords": "No se encontraron coincidencias"

    }
});


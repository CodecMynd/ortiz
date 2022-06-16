// 4.2.3 Eliminar Agregado de Solicitud de Piezas Adicionales
$('#btnDeleteAgregadoPzsAdicionales').click(function () {
    var param = $('#formDeleteAgregadoPzsAdicionales').serialize();
    $.ajax({
            url: '../delete/deleteAgregadoPzsAdicionales.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteAgregadoPzsAdicionales')[0].reset();
                setTimeout(function () {
                    $('.eliminarAgregadoPzsAdicionales').modal('hide');
                }, 1000);
                setTimeout(function () {
                    $('.verGralRegSolPzsAdicionales').modal('hide');
                }, 1000);
                tableSolPzsAdicionales.ajax.reload(null, false)

            }
        })
        .done(function (res) {
            $('#respuestaDeleteAgregadoPzsAdicionales').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnDeleteAgregadoPzsAdicionales").on('click', function () {
    $("#btnDeleteAgregadoPzsAdicionales").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteAgregadoPzsAdicionales").css('visibility', 'visible');
    }, 3000);
});
// ----------------------------------------------------------------------------------------------------------------------------


var tableVerGralRegSolPzsAdicionales = $("#tableVerGralRegSolPzsAdicionales").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "dom": 'lBfrtip',
    "pageLength": 50,
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

    },
    "drawCallback": function () {
        //alert("La tabla se está recargando"); 
        var api = this.api();
        $(api.column(7).footer()).html(
            'Total: ' + api.column(7, {
                page: 'current'
            }).data().sum()
        )
        var api2 = this.api();
        $(api2.column(8).footer()).html(
            'Total: ' + api2.column(8, {
                page: 'current'
            }).data().sum()
        )
    },
});

// ----------------------------------------------------------------------------------------------------

var tableVarios2 = $("#tableVarios2").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "dom": 'lBfrtip',
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

    },
    "drawCallback": function () {
        //alert("La tabla se está recargando"); 
        var api = this.api();
        $(api.column(7).footer()).html(
            'Total: ' + api.column(7, {
                page: 'current'
            }).data().sum()
        )
        var api2 = this.api();
        $(api2.column(8).footer()).html(
            'Total: ' + api2.column(8, {
                page: 'current'
            }).data().sum()
        )
    },
});


function mostarDetalles(id_proyecto) {
    var ruta = '../components/modal-verGralRecPzsDanadas.php?id_proyecto=' + id_proyecto;
    $.get(ruta, function (data) {
        $('#divModal').html(data);
        $('#modal-verGralRecPzsDanadas').modal('show');
    });
}
// Preautorizacion --------------------------------------------------------------------------------------------------------------------------------------------
function enviarPreAuto(id_proyecto) {
    var ruta = '../components/modal-enviarPreAutorizacion.php?id_proyecto=' + id_proyecto;
    $.get(ruta, function (data) {
        $('#divModalPreAuto').html(data);
        $('#modal-enviarPreAutorizacion').modal('show');
    });
}

// Agregar Link --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnNuevoRecPzsDanadas').click(function () {
    var param = $('#formNuevoRecPzsDanadas').serialize();
    $.ajax({
            url: '../adds/addNuevoRegRecPzsDanadas.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRecPzsDanadas')[0].reset();
                 setTimeout(function () {
                     $('.regRecPzsDanadas').modal('hide');
                 }, 1000);
                tableRecPzsDanadas.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaRecPzsDanadas').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnNuevoRecPzsDanadas").on('click', function () {
    $("#btnNuevoRecPzsDanadas").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRecPzsDanadas").css('visibility', 'visible');
    }, 3000);
});

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

// 4.1.2 Eliminar Link de Desarmado
$('#btnDeleteLinkSolPzsDanadas').click(function () {
    var param = $('#formDeleteLinkSolPzsDanadas').serialize();
    $.ajax({
            url: '../delete/deleteLinkSolPzsDanadas.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteLinkSolPzsDanadas')[0].reset();
                setTimeout(function () {
                    $('.eliminarRegRecPzsDanadas').modal('hide');
                }, 1000);
                tableRecPzsDanadas.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaDeleteLinkSolPzsDanadas').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnDeleteLinkSolPzsDanadas").on('click', function () {
    $("#btnDeleteLinkSolPzsDanadas").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteLinkSolPzsDanadas").css('visibility', 'visible');
    }, 3000);
});

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

// 4.1.4 Enviar a Pre-Autorizaci??n --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnEnviarPreAuto').click(function () {
    var param = $('#formEnviarPreAuto').serialize();
    $.ajax({
            url: '../update/updateEnviarPreAuto.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                 $('#formEnviarPreAuto')[0].reset();
                 setTimeout(function () {
                     $('.enviarPreAutorizacion').modal('hide');
                 }, 1000);
                tableRecPzsDanadas.ajax.reload(null, false);
                tablePreautorizacion.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaEnviarPreAuto').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnEnviarPreAuto").on('click', function () {
    $("#btnEnviarPreAuto").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnEnviarPreAuto").css('visibility', 'visible');
    }, 3000);
});

// Tabla 4.1 Recepci??n de Piezas Da??adas ----------------------------------------------------------------------------------------------------------------------------
var tableRecPzsDanadas = $("#tableRecPzsDanadas").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "select": true,
    "select": {
        style: 'multi'
    },
    "stateSave": false,
    "pageLength": 50,
    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf", "colvis",],
    "ajax": {
        url: "../consultas/consultaRecPzsDanadas.php",
        type: "get",
        dataType: "json",
        error: function (e) {
            console.log(e.responseText);
        }
    },
    "searchPanes": {
        initCollapsed: true,
        dtOpts: {
            dom: 'tp',
            paging: 'true',
            //  pagingType:'simple',
            searching: true
        }
    },
    "columnDefs": [{
        searchPanes: {
            show: true
        },
        targets: [2, 4, 5, 6, 7, 8, 10, 11, 12, 13,14,15,16,17,18],
    },
     {
         targets: [ 0,3,9,19 ],
         visible: false 
       }
],
    "language": {

        "aria": {
            "sortAscending": "Activar para ordenar la columna de manera ascendente",
            "sortDescending": "Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
            "collection": "Colecci??n",
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
            "last": "??ltimo",
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
        //alert("La tabla se est?? recargando"); 
        var api = this.api();
        $(api.column(13).footer()).html(
            'Total: ' + api.column(13, {
                page: 'current'
            }).data().sum()
        )
        var api2 = this.api();
        $(api2.column(14).footer()).html(
            'Total: ' + api2.column(14, {
                page: 'current'
            }).data().sum()
        )
        var api3 = this.api();
        $(api3.column(15).footer()).html(
            'Total: ' + api3.column(15, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[10] > '1') {
            $('td', row).eq(10).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
        if (data[11] > '1') {
            $('td', row).eq(11).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
        if (data[12] >= '0') {
            $('td', row).eq(12).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
    },

});
setInterval(function () {
    tableRecPzsDanadas.ajax.reload(null, false); // user paging is not reset on reload
}, 360000);
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------


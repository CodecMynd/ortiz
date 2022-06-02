function mostarDetalles(id_entregaPz) {
    var ruta = '../components/modal-verGralRegEntregaPz.php?id_entregaPz=' + id_entregaPz;
    $.get(ruta, function (data) {
        $('#divModal').html(data);
        $('#modal-verGralRegEntregaPz').modal('show');
    });
}

// 4.3.1 Registro Entrega de Pieza --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnNuevoRegEntregaPz').click(function () {
    var param = $('#formNuevoRegEntregaPz').serialize();
    $.ajax({
            url: '../adds/addNuevoRegEntregaPz.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegEntregaPz')[0].reset();
                setTimeout(function () {
                    $('.regEntregaPz').modal('hide');
                }, 1000);
                tableCronoSurPzs.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaRegEntregaPz').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnNuevoRegEntregaPz").on('click', function () {
    $("#btnNuevoRegEntregaPz").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegEntregaPz").css('visibility', 'visible');
    }, 3000);
});

// 4.3.2 Supervisión Registro Entrega de Pieza --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnNuevoRegSuperEntregaPz').click(function () {
    var param = $('#formNuevoRegSuperEntregaPz').serialize();
    $.ajax({
            url: '../adds/addNuevoRegSuperEntregaPz.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegSuperEntregaPz')[0].reset();
                setTimeout(function () {
                    $('.regSuperEntregaPz').modal('hide');
                }, 1000);
                tableCronoSurPzs.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaRegSuperEntregaPz').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnNuevoRegSuperEntregaPz").on('click', function () {
    $("#btnNuevoRegSuperEntregaPz").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegSuperEntregaPz").css('visibility', 'visible');
    }, 3000);
});


// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

// 4.3.3 Eliminar Registro Entrega de Pieza
$('#btnDeleteRegEntregaPz').click(function () {
    var param = $('#formDeleteRegEntregaPz').serialize();
    $.ajax({
            url: '../delete/deleteRegEntregaPz.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteRegEntregaPz')[0].reset();
                setTimeout(function () {
                    $('.eliminarRegEntregaPz').modal('hide');
                }, 1000);
                tableCronoSurPzs.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaDeleteRegEntregaPz').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnDeleteRegEntregaPz").on('click', function () {
    $("#btnDeleteRegEntregaPz").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteRegEntregaPz").css('visibility', 'visible');
    }, 3000);
});

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------

// 4.3.4 Eliminar Supervisión Registro Entrega de Pieza
$('#btnDeleteRegSuperEntregaPz').click(function () {
    var param = $('#formDeleteRegSuperEntregaPz').serialize();
    $.ajax({
            url: '../delete/deleteRegSuperEntregaPz.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteRegSuperEntregaPz')[0].reset();
                setTimeout(function () {
                    $('.eliminarRegSuperEntregaPz').modal('hide');
                }, 1000);
                tableCronoSurPzs.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaDeleteRegSuperEntregaPz').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnDeleteRegSuperEntregaPz").on('click', function () {
    $("#btnDeleteRegSuperEntregaPz").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteRegSuperEntregaPz").css('visibility', 'visible');
    }, 3000);
});

// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Tabla 4.1 Recepción de Piezas Dañadas
var tableCronoSurPzs = $("#tableCronoSurPzs").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "select": true,
    "select": {
        style: 'multi'
    },
    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf", "colvis"],
    "ajax": {
        url: "../consultas/consultaCronoSurPzs.php",
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
        targets: [3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14],
    }, ],
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
    // "drawCallback": function () {
    //     //alert("La tabla se está recargando"); 
    //     var api = this.api();
    //     $(api.column(12).footer()).html(
    //         'Total: ' + api.column(12, {
    //             page: 'current'
    //         }).data().sum()
    //     )
    //     var api2 = this.api();
    //     $(api2.column(13).footer()).html(
    //         'Total: ' + api2.column(13, {
    //             page: 'current'
    //         }).data().sum()
    //     )
    //     var api3 = this.api();
    //     $(api3.column(14).footer()).html(
    //         'Total: ' + api3.column(14, {
    //             page: 'current'
    //         }).data().sum()
    //     )
    // },
    // "createdRow": function (row, data, index) {
    //     if (data[12] > '0') {
    //         $('td', row).eq(12).css({
    //             'text-align': 'center',
    //             'background-color': '#5A6268',
    //             'color': '#fff',
    //             'font-weight': 'bold'
    //         });
    //     }
    //     if (data[13] > '0') {
    //         $('td', row).eq(13).css({
    //             'text-align': 'center',
    //             'background-color': '#5A6268',
    //             'color': '#fff',
    //             'font-weight': 'bold'
    //         });
    //     }
    //     if (data[14] >= '0') {
    //         $('td', row).eq(14).css({
    //             'text-align': 'center',
    //             'background-color': '#5A6268',
    //             'color': '#fff',
    //             'font-weight': 'bold'
    //         });
    //     }
    // },

});
setInterval(function () {
    tableCronoSurPzs.ajax.reload(null, false); // user paging is not reset on reload
}, 300000);
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
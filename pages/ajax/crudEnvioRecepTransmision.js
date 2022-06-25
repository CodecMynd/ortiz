
// 6.1.5 Ver Generales Envío y Recepción de Transmisión
function mostrarDetalles(id_envioRecTransm) {
    var ruta = '../components/modal-verGralEnvioRecTransmision.php?id_envioRecTransm=' + id_envioRecTransm;
    $.get(ruta, function (data) {
        $('#divModal').html(data);
        $('#modal-verGralEnvioRecTransmision').modal('show');
    });
}

// 6.1.1 Registro Envío de Transmisión --------------------------------------------------------------------------------------------------------------------------------------------------
$('#btnNuevoRegEnvioTranmision').click(function () {
    var param = $('#formNuevoRegEnvioTranmision').serialize();
    $.ajax({
            url: '../adds/addNuevoRegEnvioTransmision.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegEnvioTranmision')[0].reset();
                setTimeout(function () {
                    $('.regEnvioTranmision').modal('hide');
                }, 1000);
                tableEnvioRecTransm.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaRegEnvioTranmision').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnNuevoRegEnvioTranmision").on('click', function () {
    $("#btnNuevoRegEnvioTranmision").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegEnvioTranmision").css('visibility', 'visible');
    }, 3000);
});

// -----------------------------------------------------------------------------------------------------

// 6.1.2 Eliminar Registro Envío de Transmisión --------------------------------------------------------------------------------------------------------------------------------------------------
$('#btnDeleteEnvioTranmision').click(function () {
    var param = $('#formDeleteEnvioTranmision').serialize();
    $.ajax({
            url: '../delete/deleteEnvioTransmision.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteEnvioTranmision')[0].reset();
                setTimeout(function () {
                    $('.eliminarEnvioTranmision').modal('hide');
                }, 1000);
                tableEnvioRecTransm.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaDeleteEnvioTranmision').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnDeleteEnvioTranmision").on('click', function () {
    $("#btnDeleteEnvioTranmision").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteEnvioTranmision").css('visibility', 'visible');
    }, 3000);
});

// 6.1.3 Registro Recepción de Transmisión --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnNuevoRegRecTranmision').click(function () {
    var param = $('#formNuevoRegRecTranmision').serialize();
    $.ajax({
            url: '../adds/addNuevoRegRecTransmision.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegRecTranmision')[0].reset();
                setTimeout(function () {
                    $('.regRecTranmision').modal('hide');
                }, 1000);
                tableEnvioRecTransm.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaRegRecTranmision').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnNuevoRegRecTranmision").on('click', function () {
    $("#btnNuevoRegRecTranmision").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegRecTranmision").css('visibility', 'visible');
    }, 3000);
});

// -----------------------------------------------------------------------------------------------------

// 6.1.4 Eliminar Registro Recepción de Transmisión --------------------------------------------------------------------------------------------------------------------------------------------------
$('#btnDeleteRecTranmision').click(function () {
    var param = $('#formDeleteRecTranmision').serialize();
    $.ajax({
            url: '../update/updateEliminarRecTransmision.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteRecTranmision')[0].reset();
                setTimeout(function () {
                    $('.eliminarRecTranmision').modal('hide');
                }, 1000);
                tableEnvioRecTransm.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaDeleteRecTranmision').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnDeleteRecTranmision").on('click', function () {
    $("#btnDeleteRecTranmision").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteRecTranmision").css('visibility', 'visible');
    }, 3000);
});
// -----------------------------------------------------------------------------------------------------


// Tabla 2.3.4 Verificacion Actividad Minima Diaria
var tableEnvioRecTransm = $("#tableEnvioRecTransm").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "select": true,
    "select": {
        style: 'multi'
    },
    "dom": 'PlBfrtip',
    "pageLength": 50,
    "buttons": ["csv", "excel", "pdf", "colvis"],
    "ajax": {
        url: "../consultas/consultaEnvioRecTransm.php",
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
            targets: [2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13],
        },
        {
            targets: [0,11],
            visible: false
        }
    ],
    "language": {
        "aria": {
            "sortAscending": "Activar para ordenar la columna de manera ascendente",
            "sortDescending": "Activar para ordenar la columna de manera descendente"
        },
        "select": {
            "rows": {
                _: "Usted Selecciono %d registros",
                0: "Haga clic en una registro para selecionarlo",
                1: "Solo 1 registro seleccionado"
            }
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
        $(api.column(10).footer()).html(
            'Total: ' + api.column(10, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[9] >= '0') {
            $('td', row).eq(9).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
    },
});
setInterval(function () {
    tableEnvioRecTransm.ajax.reload(null, false); // user paging is not reset on reload
}, 360000);

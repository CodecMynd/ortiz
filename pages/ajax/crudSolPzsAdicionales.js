function mostarDetalles(id_proyecto) {
    var ruta = '../components/modal-verGralRegSolPzsAdicionales.php?id_proyecto=' + id_proyecto;
    $.get(ruta, function (data) {
        $('#divModal').html(data);
        $('#modal-verGralRegSolPzsAdicionales').modal('show');
    });
}

function mostarDetalles2(id_proyecto, id_regSolpzadicional) {
    var ruta = '../components/modal-autorizarSolPzsAdicional.php?id_proyecto=' + id_proyecto + '&id_regSolpzadicional=' + id_regSolpzadicional;
    $.get(ruta, function (data) {
        $('#divModal2').html(data);
        $('#modal-autorizarSolPzsAdicional').modal('show');
    });
}



// 4.2.2 Agregar Solicitud de Piezas Adicionales --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnNuevoRegSolPzsAdicionales').click(function () {
    var param = $('#formNuevoRegSolPzsAdicionales').serialize();
    $.ajax({
            url: '../adds/addNuevoAgregarRegSolPzsAdicionales.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegSolPzsAdicionales')[0].reset();
                setTimeout(function () {
                    $('.regSolPzsAdicionales').modal('hide');
                }, 1000);
                tableSolPzsAdicionales.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaRegSolPzsAdicionales').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnNuevoRegSolPzsAdicionales").on('click', function () {
    $("#btnNuevoRegSolPzsAdicionales").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegSolPzsAdicionales").css('visibility', 'visible');
    }, 3000);
});


//4.2.4 Eliminar Solicitud de Piezas Adicionales --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnDeleteRegSolPzsAdicionales').click(function () {
    var param = $('#formDeleteRegSolPzsAdicionales').serialize();
    $.ajax({
            url: '../delete/deleteRegSolPzsAdicionales.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteRegSolPzsAdicionales')[0].reset();
                setTimeout(function () {
                    $('.eliminarRegSolPzsAdicionales').modal('hide');
                }, 1000);
                tableSolPzsAdicionales.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaDeleteRegSolPzsAdicionales').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnDeleteRegSolPzsAdicionales").on('click', function () {
    $("#btnDeleteRegSolPzsAdicionales").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteRegSolPzsAdicionales").css('visibility', 'visible');
    }, 3000);
});



// 4.2.6 Enviar de Cotizando: : Piezas Adicionales a Pre-Autorización : Piezas Adicionales --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnEnviarPreAutoPzsAdic').click(function () {
    var param = $('#formEnviarPreAutoPzsAdic').serialize();
    $.ajax({
            url: '../update/updateEnviarPreAutoPzsAdic.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formEnviarPreAutoPzsAdic')[0].reset();
                setTimeout(function () {
                    $('.enviarPreAutorizacionPzsAdic').modal('hide');
                }, 1000);
                tablePreautorizacionPzsAdic.ajax.reload(null, false);
                tableSolPzsAdicionales.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaEnviarPreAutoPzsAdic').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnEnviarPreAutoPzsAdic").on('click', function () {
    $("#btnEnviarPreAutoPzsAdic").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnEnviarPreAutoPzsAdic").css('visibility', 'visible');
    }, 3000);
});

// Tabla 4.1 Recepción de Piezas Adicionales ----------------------------------------------------------------------------------------------------------------------------
var tableSolPzsAdicionales = $("#tableSolPzsAdicionales").DataTable({
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
    "buttons": ["csv", "excel", "pdf", "colvis", ],
    "ajax": {
        url: "../consultas/consultaSolPzsAdicionales.php",
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
            targets: [2, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15],
        },
        {
            targets: [],
            visible: false
        }
    ],
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
        $(api.column(12).footer()).html(
            'Total: ' + api.column(12, {
                page: 'current'
            }).data().sum()
        )
        var api2 = this.api();
        $(api2.column(13).footer()).html(
            'Total: ' + api2.column(13, {
                page: 'current'
            }).data().sum()
        )
        var api3 = this.api();
        $(api3.column(14).footer()).html(
            'Total: ' + api3.column(14, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[12] >= '1') {
            $('td', row).eq(12).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
        if (data[13] >= '1') {
            $('td', row).eq(13).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
        if (data[14] >= '0') {
            $('td', row).eq(14).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
    },

});
setInterval(function () {
    tableSolPzsAdicionales.ajax.reload(null, false); // user paging is not reset on reload
}, 180000);
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------

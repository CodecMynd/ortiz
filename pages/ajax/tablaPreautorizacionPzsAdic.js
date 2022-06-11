//4.2.2.1 Regresar de Pre-Autorización: Piezas Adicionales a Cotizando: Piezas Adicionales--------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnRegresarCotizandoPzsAdic').click(function () {
    var param = $('#formRegresarCotizandoPzsAdic').serialize();
    $.ajax({
            url: '../update/updateRegresarCotizandoPzsAdic.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formRegresarCotizandoPzsAdic')[0].reset();
                setTimeout(function () {
                    $('.regresarCotizandoPzsAdic').modal('hide');
                }, 1000);
                tableSolPzsAdicionales.ajax.reload(null, false);
                tablePreautorizacionPzsAdic.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaRegresarCotizandoPzsAdic').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnRegresarCotizandoPzsAdic").on('click', function () {
    $("#btnRegresarCotizandoPzsAdic").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnRegresarCotizandoPzsAdic").css('visibility', 'visible');
    }, 3000);
});

// 4.2.2.2 Enviar de Pre-Autorización: Piezas Adionales a Autorizado: Piezas Adicionales --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnEnviarAutorizadoPzsAdic').click(function () {
    var param = $('#formEnviarAutorizadoPzsAdic').serialize();
    $.ajax({
            url: '../update/updateEnviarAutorizadoPzsAdic.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formEnviarAutorizadoPzsAdic')[0].reset();
                 setTimeout(function () {
                     $('.enviarAutorizadoPzsAdic').modal('hide');
                 }, 1000);
                tablePreautorizacionPzsAdic.ajax.reload(null, false);
                tableAutorizadoPzsAdic.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaEnviarAutorizadoPzsAdic').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnEnviarAutorizadoPzsAdic").on('click', function () {
    $("#btnEnviarAutorizadoPzsAdic").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnEnviarAutorizadoPzsAdic").css('visibility', 'visible');
    }, 1000);
});

// --------------------------------------------------------------------------------------------------------------------------------------------------
// Tabla: 2. Pre-Autorización: Piezas Adicionales 
var tablePreautorizacionPzsAdic = $("#tablePreautorizacionPzsAdic").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "stateSave": false,
    "select": true,
    "select": {
        style: 'multi'
    },
    "pageLength": 10,
    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf", "colvis"],
    "ajax": {
        url: "../consultas/consultaPreautorizacionPzsAdic.php",
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
            targets: [2, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16],
        },
        {
            targets: [16],
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
        var api2 = this.api();
        $(api2.column(11).footer()).html(
            'Total: ' + api2.column(11, {
                page: 'current'
            }).data().sum()
        )
        var api3 = this.api();
        $(api3.column(12).footer()).html(
            'Total: ' + api3.column(12, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[11] >= '0') {
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
    tablePreautorizacionPzsAdic.ajax.reload(null, false); // user paging is not reset on reload
}, 180000);
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------

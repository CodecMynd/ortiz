// 4.4.2.1 Regresar de Pre-Autorización: Piezas Adicionales a Cotizando: Piezas Adicionales --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnRegresarCotizandoPzsAdic2').click(function () {
    var param = $('#formRegresarCotizandoPzsAdic2').serialize();
    $.ajax({
            url: '../update/updateRegresarCotizandoPzsAdic2.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formRegresarCotizandoPzsAdic2')[0].reset();
                setTimeout(function () {
                    $('.regresarCotizandoPzsAdic2').modal('hide');
                }, 1000);
                tablePreautorizacionPzsAdic2.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaRegresarCotizandoPzsAdic2').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnRegresarCotizandoPzsAdic2").on('click', function () {
    $("#btnRegresarCotizandoPzsAdic2").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnRegresarCotizandoPzsAdic2").css('visibility', 'visible');
    }, 3000);
});


// --------------------------------------------------------------------------------------------------------------------------------------------------

// 4.4.2.2 Enviar de Pre-Autorización: Piezas Adionales a Autorizado: Piezas Adicionales --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnEnviarAutorizadoPzsAdic2').click(function () {
    var param = $('#formEnviarAutorizadoPzsAdic2').serialize();
    $.ajax({
            url: '../update/updateEnviarAutorizadoPzsAdic2.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formEnviarAutorizadoPzsAdic2')[0].reset();
                setTimeout(function () {
                    $('.enviarAutorizadoPzsAdic2').modal('hide');
                }, 1000);
                tablePreautorizacionPzsAdic2.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaEnviarAutorizadoPzsAdic2').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnEnviarAutorizadoPzsAdic2").on('click', function () {
    $("#btnEnviarAutorizadoPzsAdic2").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnEnviarAutorizadoPzsAdic2").css('visibility', 'visible');
    }, 1000);
});

// Tabla: 2. Pre-Autorización: Piezas Adicionales 
var tablePreautorizacionPzsAdic2 = $("#tablePreautorizacionPzsAdic2").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "stateSave": false,
    "select": true,
    "select": {
        style: 'multi'
    },
    "pageLength": 50,
    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf", "colvis"],
    "ajax": {
        url: "../consultas/consultaPreautorizacionPzsAdic2.php",
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
            targets: [1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
        },
        {
            targets: [0, 4],
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
        if (data[9] >= '0') {
            $('td', row).eq(9).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
        if (data[10] >= '0') {
            $('td', row).eq(10).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
    },

});
setInterval(function () {
    tablePreautorizacionPzsAdic2.ajax.reload(null, false); // user paging is not reset on reload
}, 360000);
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------
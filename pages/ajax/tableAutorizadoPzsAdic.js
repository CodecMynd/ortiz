// 4.2.3.1 Regresar de Autorizado: Piezas Adicionales a Pre-Autorización: Piezas Adicionales -------------------------------------------------------------------------------------------------------------------------------------------

$('#btnRegresarPreAutorizacionPzsAdic').click(function () {
    var param = $('#formRegresarPreAutorizacionPzsAdic').serialize();
    $.ajax({
            url: '../update/updateRegresarPreAutorizacionPzsAdic.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formRegresarPreAutorizacionPzsAdic')[0].reset();
                setTimeout(function () {
                    $('.regresarPreAutorizacionPzsAdic').modal('hide');
                }, 1000);
                tableAutorizadoPzsAdic.ajax.reload(null, false);
                tablePreautorizacionPzsAdic.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaRegresarPreAutorizacionPzsAdic').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnRegresarPreAutorizacionPzsAdic").on('click', function () {
    $("#btnRegresarPreAutorizacionPzsAdic").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnRegresarPreAutorizacionPzsAdic").css('visibility', 'visible');
    }, 3000);
});

// 4.2.3.2 Enviar de Autorizado: Piezas Adionales a Proceso de Surtido de Piezas: Piezas Adicionales ---------------------------------------------------------------------------------------------------------------------------------------

$('#btnEnviarAutoProceSurtPzsAdic').click(function () {
    var param = $('#formEnviarAutoProceSurtPzsAdic').serialize();
    $.ajax({
            url: '../update/updateEnviarAutoProceSurtPzsAdic.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formEnviarAutoProceSurtPzsAdic')[0].reset();
                setTimeout(function () {
                    $('.enviarAutoProceSurtPzsAdic').modal('hide');
                }, 1000);
                tableAutorizadoPzsAdic.ajax.reload(null, false);
                tableAutoProceSurtPzsAdic.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaEnviarAutoProceSurtPzsAdic').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnEnviarAutoProceSurtPzsAdic").on('click', function () {
    $("#btnEnviarAutoProceSurtPzsAdic").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnEnviarAutoProceSurtPzsAdic").css('visibility', 'visible');
    }, 3000);
});


    // 4.2.3.3 Eliminar Proyecto en Autorizado: Piezas Adicionales ---------------------------------------------------------------------------------------------------------------------------------------

    $('#btnEliminarRegAutorizadoPzsAdic').click(function () {
        var param = $('#formEliminarRegAutorizadoPzsAdic').serialize();
        $.ajax({
                url: '../update/updateEliminarRegAutorizadoPzsAdic.php',
                type: 'POST',
                data: param,
    
                success: function (vs) {
                    $('#formEliminarRegAutorizadoPzsAdic')[0].reset();
                    setTimeout(function () {
                        $('.eliminarRegAutorizadoPzsAdic').modal('hide');
                    }, 1000);
                    tableAutorizadoPzsAdic.ajax.reload(null, false);
                }
            })
            .done(function (res) {
                $('#respuestaEliminarRegAutorizadoPzsAdic').html(res)
            })
    });
    
    //Ocultar boton por 3 minutos para evitar el doble submit
    $("#btnEliminarRegAutorizadoPzsAdic").on('click', function () {
        $("#btnEliminarRegAutorizadoPzsAdic").css('visibility', 'hidden');
        setTimeout(function () {
            $("#btnEliminarRegAutorizadoPzsAdic").css('visibility', 'visible');
        }, 3000);
    });


// --------------------------------------------------------------------------------------------------------------------------------------------------
// Tabla tablePreSelect
var tableAutorizadoPzsAdic = $("#tableAutorizadoPzsAdic").DataTable({
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
        url: "../consultas/consultaAutorizadoPzsAdic.php",
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
            targets: [2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
        },
        {
            targets: [9, 12, 14, 15, 17],
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
        "loadingRecords": "Ningún Proyecto Seleccionado",
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
        $(api2.column(10).footer()).html(
            'Total: ' + api2.column(10, {
                page: 'current'
            }).data().sum()
        )
        var api3 = this.api();
        $(api3.column(11).footer()).html(
            'Total: ' + api3.column(11, {
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
    tableAutorizadoPzsAdic.ajax.reload(null, false); // user paging is not reset on reload
}, 360000);
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------

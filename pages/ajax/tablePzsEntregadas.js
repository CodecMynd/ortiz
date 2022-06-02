function mostarDetalles4(id_proyecto) {
    var ruta = '../components/modal-verGralPzasEntregadas.php?id_proyecto=' + id_proyecto;
    $.get(ruta, function (data) {
        $('#divModalPzasEntregadas').html(data);
        $('#modal-verGralPzasEntregadas').modal('show');
    });
}

// 4.1.6.1 Regresar a Autorizado: en Proceso de Surtido de Piezas  --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnRegresarAutoProceSurtPzs').click(function () {
    var param = $('#formRegresarAutoProceSurtPzs').serialize();
    $.ajax({
            url: '../update/updateRegresarAutoProceSurtPzs.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formRegresarAutoProceSurtPzs')[0].reset();
                setTimeout(function () {
                    $('.regresarAutoProceSurtPzs').modal('hide');
                }, 1000);
                tablepzsEntregadas.ajax.reload(null, false);
                tableAutoProceSurtPzs.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaRegresarAutoProceSurtPzs').html(res)
        })
});

// --------------------------------------------------------------------------------------------------------------------------------------------------

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnRegresarAutoProceSurtPzs").on('click', function () {
    $("#btnRegresarAutoProceSurtPzs").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnRegresarAutoProceSurtPzs").css('visibility', 'visible');
    }, 3000);
});

// 4.1.5.2 Enviar Piezas Entregadas  --------------------------------------------------------------------------------------------------------------------------------------------------

// $('#btnEnviarPzsEntregadas').click(function () {
//     var param = $('#formEnviarPzsEntregadas').serialize();
//     $.ajax({
//             url: '../update/updateEnviarPzsEntregadas.php',
//             type: 'POST',
//             data: param,

//             success: function (vs) {
//                 $('#formEnviarPzsEntregadas')[0].reset();
//                 // setTimeout(function () {
//                 //     $('.enviarPzsEntregadas').modal('hide');
//                 // }, 1000);
//                 tableAutorizado.ajax.reload(null, false);
//                 tableAutoProceSurtPzs.ajax.reload(null, false);
//             }
//         })
//         .done(function (res) {
//             $('#respuestaEnviarPzsEntregadas').html(res)
//         })
// });

// // --------------------------------------------------------------------------------------------------------------------------------------------------

// //Ocultar boton por 10 segundos para evitar el doble submit
// $("#btnEnviarPzsEntregadas").on('click', function () {
//     $("#btnEnviarPzsEntregadas").css('visibility', 'hidden');
//     setTimeout(function () {
//         $("#btnEnviarPzsEntregadas").css('visibility', 'visible');
//     }, 3000);
// });

// --------------------------------------------------------------------------------------------------------------------------------------------------
// Tabla tablePreSelect
var tablepzsEntregadas = $("#tablepzsEntregadas").DataTable({
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
        url: "../consultas/consultaPzsEntregadas.php",
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
     targets: [2, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,20,21],
    }, 
    {
        targets: [0, 3, 9, 22],
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
        if (data[10] > '0') {
            $('td', row).eq(10).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
        if (data[11] > '0') {
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
    tablepzsEntregadas.ajax.reload(null, false); // user paging is not reset on reload
}, 300000);
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------

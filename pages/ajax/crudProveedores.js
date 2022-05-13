// 1.12.2 Editar Proveedor
$('#btnUpdateProvee').click(function () {
    var param = $('#formUpdateProvee').serialize();
    $.ajax({
            url: '../update/updateProveedor.php',
            cache: false,
            type: 'POST',
            data: param,

            success: function (vs) {
                // $('#formNuevoProvee')[0].reset();
                tableProveedores.ajax.reload(null, false)
            }
        })
        .done(function (res) {
            $('#respuestaUpdateProvee').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnUpdateProvee").on('click', function () {
    $("#btnUpdateProvee").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateProvee").css('visibility', 'visible');
    }, 5000);
});

// ---------------------------------------------------------------------------------------

        // 1.12.2 Editar Proveedor
        $('#btnDeleteProveedor').click(function() {
            var param = $('#formDeleteProveedor').serialize();
            $.ajax({
                    url: '../delete/deleteProveedor.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        setTimeout(function() {
                            $('.eliminarProveedor').modal('hide');
                        }, 2000);

                        tableProveedores.ajax.reload(null, false);
                    }
                })
                .done(function(res) {
                    $('#respuestaDeleteProveedor').html(res)
                })
        });

        //Ocultar boton por 10 segundos para evitar el doble submit
        $("#btnDeleteProveedor").on('click', function() {
            $("#btnDeleteProveedor").css('visibility', 'hidden');
            setTimeout(function() {
                $("#btnDeleteProveedor").css('visibility', 'visible');
            }, 5000);
        });

// ---------------------------------------------------------------------------------------

// Tabla 4.1 Recepción de Piezas Dañadas
var tableProveedores = $("#tableProveedores").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    // "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf"],
    "ajax": {
        url: "../consultas/consultaProveedores.php",
        type: "get",
        dataType: "json",
        error: function (e) {
            console.log(e.responseText);
        }
    },
    // "searchPanes": {
    //     initCollapsed: true,
    //     dtOpts: {
    //         dom: 'tp',
    //         paging: 'true',
    //         //  pagingType:'simple',
    //         searching: true
    //     }
    // },
    // "columnDefs": [{
    //     searchPanes: {
    //         show: true
    //     },
    //     targets: [4, 5, 6, 7, 8, 10, 11],
    // }],
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
// setInterval(function () {
//     tableProveedores.ajax.reload(null, false); // user paging is not reset on reload
// }, 30000);
// ----------------------------------------------------------------------------------------------------------------------------------------------------------------------
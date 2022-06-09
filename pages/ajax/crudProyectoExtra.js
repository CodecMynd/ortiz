
    // 2.5.2 Eliminar Registro Alta Proyecto
    $('#btnDeleteProyExtra').click(function() {
        var param = $('#formDeleteProyExtra').serialize();
        $.ajax({
                url: '../delete/deleteProyExtra.php',
                cache: false,
                type: 'POST',
                data: param,

                success: function(vs) {
                    // $('#formRegresarAltaProyecto')[0].reset();
                    setTimeout(function () {
                        $('.eliminarProyExtra').modal('hide');
                    }, 1000);
                    tableProyExtra.ajax.reload(null, false)
                }
            })
            .done(function(res) {
                $('#respuestaDeleteProyExtra').html(res)
            })
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnDeleteProyExtra").on('click', function() {
        $("#btnDeleteProyExtra").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnDeleteProyExtra").css('visibility', 'visible');
        }, 5000);
    });
// ----------------------------------------------------------------------------------------------------------------------------

// Tabla 2.5 Alta Proyecto
var tableProyExtra = $("#tableProyExtra").DataTable({
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
        url: "../consultas/consultaProyExtra.php",
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
        targets: [3,4,5,6,7,8,9,10,11,12,13],
    }],
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
        $(api.column(13).footer()).html(
            'Total: ' + api.column(13, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[13] > '0') {
            $('td', row).eq(13).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
    }
});
setInterval(function () {
    tableProyExtra.ajax.reload(null, false); // user paging is not reset on reload
}, 180000);
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


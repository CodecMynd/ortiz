// 2.2.4 Eliminar Proyecto --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnDeleteProyecto').click(function () {
    var param = $('#formDeleteProyecto').serialize();
    $.ajax({
            url: '../delete/deleteProyecto.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formDeleteProyecto')[0].reset();
                setTimeout(function () {
                    $('.borrarProyecto').modal('hide');
                }, 1000);
                tablaListaProyectos.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaDeleteProyecto').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnDeleteProyecto").on('click', function () {
    $("#btnDeleteProyecto").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnDeleteProyecto").css('visibility', 'visible');
    }, 3000);
});

// Tabla 2.3.2 Lista de Proyectos
var tablaListaProyectos = $("#tablaListaProyectos").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,

    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf"],
    "ajax": {
        url: "../consultas/consultaProyectos.php",
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
        targets: [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13,14],
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
        $(api.column(11).footer()).html(
            'Total: ' + api.column(11, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[11] > '0') {
            $('td', row).eq(11).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
    }

});
setInterval(function () {
    tablaListaProyectos.ajax.reload(null, false); // user paging is not reset on reload
}, 360000);
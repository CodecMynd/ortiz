// 2.3.6.2 Eliminar Programa de Asesoramiento Técnico ---------------------------------------------------
$('#btnEliminarAseTec').click(function () {
    var param = $('#formEliminarAseTec').serialize();
    $.ajax({
            url: '../delete/deleteAseTec.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formEliminarAseTec')[0].reset();
                setTimeout(function () {
                    $('.borrarAseTec').modal('hide');
                }, 1000);
                tableAsesoramientoTecnico.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaDeleteAseTec').html(res)
        })
});

// --------------------------------------------------------------------------------------------------------------------------------------------------

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnEliminarAseTec").on('click', function () {
    $("#btnEliminarAseTec").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnEliminarAseTec").css('visibility', 'visible');
    }, 3000);
});


// Tabla 2.3.6 Programa de Asesoramiento Técnico
var tableAsesoramientoTecnico = $("#tableAsesoramientoTecnico").DataTable({
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
        url: "../consultas/consultaAsesoramientoTecnico.php",
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
        targets: [4, 5, 6, 7, 8, 9, 10, 11],
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
        $(api.column(9).footer()).html(
            'Total: ' + api.column(9, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[9] > '0') {
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
    tableAsesoramientoTecnico.ajax.reload(null, false); // user paging is not reset on reload
}, 30000);
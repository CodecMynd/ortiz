function mostrarDetalles(id_proyecto, nProyecto, id_cambioAutorizDescuento) {
    var ruta = '../components/modal-verGralAutorizacionDescuentos.php?id_proyecto=' + id_proyecto + '&nProyecto=' + nProyecto + '&id_cambioAutorizDescuento=' + id_cambioAutorizDescuento;
    $.get(ruta, function (data) {
        $('#divModal').html(data);
        $('#modal-verGralAutorizacionDescuentos').modal('show');
    });
}

// Tabla 2.10.1 Solicitud Cambio Valor Alta
        var tableSolAutorizDescuento = $("#tableSolAutorizDescuento").DataTable({
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
                url: "../consultas/consultaCambiarAutorizDescuento.php",
                type: "get",
                dataType: "json",
                error: function(e) {
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
                targets: [2, 3, 5, 6, 7, 8, 9, 10, 11, 12,13],
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
                var api2 = this.api();
                $(api2.column(6).footer()).html(
                    'Total: ' + api2.column(6, {
                        page: 'current'
                    }).data().sum()
                )
                var api3 = this.api();
                $(api3.column(7).footer()).html(
                    'Total: ' + api3.column(7, {
                        page: 'current'
                    }).data().sum()
                )
            },
            "createdRow": function (row, data, index) {
                if (data[6] >= '0') {
                    $('td', row).eq(6).css({
                        'text-align': 'center',
                        'background-color': '#5A6268',
                        'color': '#fff',
                        'font-weight': 'bold'
                    });
                }
                if (data[7] >= '0') {
                    $('td', row).eq(7).css({
                        'text-align': 'center',
                        'background-color': '#5A6268',
                        'color': '#fff',
                        'font-weight': 'bold'
                    });
                }
            },
        });
        setInterval(function() {
            tableSolAutorizDescuento.ajax.reload(null, false); // user paging is not reset on reload
        }, 360000);
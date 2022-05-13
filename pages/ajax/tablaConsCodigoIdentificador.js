
        // Tabla 2.8.3 Consecutivo Código Identificador
        var tableConsProyCodId = $("#tableConsProyCodId").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'PlBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaConsCodIdentificador.php",
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
                    show: false
                },
                targets: [0, 1, 3, 4, 5],
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

            "drawCallback": function() {
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
            }

        });

    <!-- DataTables  & Plugins -->
    <script src="../../plugins/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../plugins/DataTables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/DataTables/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/DataTables/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/DataTables/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/DataTables/js/buttons.bootstrap4.js"></script>
    <script src="../../plugins/DataTables/js/buttons.html5.min.js"></script>
    <script src="../../plugins/DataTables/js/buttons.print.min.js"></script>
    <script src="../../plugins/DataTables/js/buttons.colVis.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/DataTables/js/dataTables.sum.js"></script>
    <script src="../../plugins/DataTables/js/dataTables.searchPanes.min.js"></script>
    <script src="../../plugins/DataTables/js/dataTables.select.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(document).ready(function() {

            var tabla = $("#tableSm").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf"],
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
            }).buttons().container().appendTo('#tableSm_wrapper .col-md-6:eq(0)');
            // table permisos
            var tabla = $("#tablePermisos").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf", "colvis"],
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
            }).buttons().container().appendTo('#tablePermisos_wrapper .col-md-6:eq(0)');

            // Tabla 2.3.7 Captura de Valor Venta Inicial
            var tabla = $("#tableCapValVenInicial").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf", "colvis"],
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
                    $(api.column(9).footer()).html(
                        'Total: ' + api.column(9, {
                            page: 'current'
                        }).data().sum()
                    )
                }
            }).buttons().container().appendTo('#tableCapValVenInicial_wrapper .col-md-6:eq(0)');

            // Tabla 2.6 Proyectos con Código Identificador
            var tabla = $("#tableDadosdeAlta").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf", "colvis"],
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
                    $(api.column(10).footer()).html(
                        'Total: ' + api.column(10, {
                            page: 'current'
                        }).data().sum()
                    )
                    var api2 = this.api();
                    $(api2.column(11).footer()).html(
                        'Total: ' + api2.column(11, {
                            page: 'current'
                        }).data().sum()
                    )
                }
            }).buttons().container().appendTo('#tableDadosdeAlta_wrapper .col-md-6:eq(0)');

            // Modal seleccionar Vehiculo
            var tabla = $("#tableSelectVehiculo").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf"],
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
            }).buttons().container().appendTo('#tableSelectVehiculo_wrapper .col-md-6:eq(0)');

            // Modal seleccionar Cliente
            var tabla = $("#tableSelectCliente").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf"],
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
            }).buttons().container().appendTo('#tableSelectCliente_wrapper .col-md-6:eq(0)');

            // Tabla 2.5 Alta Proyecto
            var tabla = $("#tableDadosAltaAsignarCodId").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf", "colvis"],
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
                    $(api.column(10).footer()).html(
                        'Total: ' + api.column(10, {
                            page: 'current'
                        }).data().sum()
                    )
                    // var api2 = this.api();
                    // $(api2.column(11).footer()).html(
                    //     'Total: ' + api2.column(11, {
                    //         page: 'current'
                    //     }).data().sum()
                    // )
                }
            }).buttons().container().appendTo('#tableDadosAltaAsignarCodId_wrapper .col-md-6:eq(0)');

            // Tabla 2.5 Alta Proyecto
            var tabla = $("#tableListaProyectos").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf", "colvis"],
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
                    $(api.column(9).footer()).html(
                        'Total: ' + api.column(9, {
                            page: 'current'
                        }).data().sum()
                    )
                    // var api2 = this.api();
                    // $(api2.column(11).footer()).html(
                    //     'Total: ' + api2.column(11, {
                    //         page: 'current'
                    //     }).data().sum()
                    // )
                }
            }).buttons().container().appendTo('#tableListaProyectos_wrapper .col-md-6:eq(0)');

            // table Comprobacion de Placas
            var tabla = $("#tableComPlacas").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf", "colvis"],
                "ajax": {
                    url: "../consultas/consultaComPlacas.php",
                    type: "get",
                    dataType: "json",
                    error: function(e) {
                        console.log(e.responseText);
                    }
                },
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
                "bDestroy": true,
                "iDisplayLength": 10,
                /* paginación */
                "order": [
                    [0, "desc"]
                ]
            }).DataTable();

        });
        // Tabla 2.7 Supervisión de Registro Código Identificador
        var tabla = $("#tableSuperRegCodID").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'Blfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaSuperCodIdentificador.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
                $(api.column(14).footer()).html(
                    'Total: ' + api.column(14, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(15).footer()).html(
                    'Total: ' + api2.column(15, {
                        page: 'current'
                    }).data().sum()
                )
                var api3 = this.api();
                $(api3.column(16).footer()).html(
                    'Total: ' + api3.column(16, {
                        page: 'current'
                    }).data().sum()
                )
            }
        }).buttons().container().appendTo('#tableSuperRegCodID_wrapper .col-md-6:eq(0)');

        // Tabla 2.3.2.2 Verificacion Diaria Vehículos Activos
        var tabla = $("#tableVerifDiariaVeh").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaVerifDiariaVeh.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
        }).buttons().container().appendTo('#tableVerifDiariaVeh_wrapper .col-md-6:eq(0)');

        // Tabla 2.3.4 Verificacion Actividad Minima Diaria
        var tabla = $("#tableActMinDia").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaActMinDia.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
        }).buttons().container().appendTo('#tableActMinDia_wrapper .col-md-6:eq(0)');

        // Tabla 2.6 Proyectos con Código Identificador
        var tabla = $("#tableProyCodId").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaCodIdentificador.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
                $(api.column(14).footer()).html(
                    'Total: ' + api.column(14, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(15).footer()).html(
                    'Total: ' + api2.column(15, {
                        page: 'current'
                    }).data().sum()
                )
                var api3 = this.api();
                $(api3.column(16).footer()).html(
                    'Total: ' + api3.column(16, {
                        page: 'current'
                    }).data().sum()
                )
            }

        }).buttons().container().appendTo('#tableProyCodId_wrapper .col-md-6:eq(0)');

        // Tabla 2.5 Alta Proyecto
        var tabla = $("#tableAltaProy").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaAltaProyecto.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
            }
        }).buttons().container().appendTo('#tableAltaProy_wrapper .col-md-6:eq(0)');

        // table tableProyectosActivos
        var tabla = $("#tableProyectosActivos").DataTable({
            "processing": true,

            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaProyectosActivos.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
        }).buttons().container().appendTo('#tableProyectosActivos_wrapper .col-md-6:eq(0)');

        // Tabla 2.4.2 Registro de Solicitud Alta Proyecto
        var tabla = $("#tableRegSolAltaProy").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaSolicitudAlta.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
            }
        }).buttons().container().appendTo('#tableRegSolAltaProy_wrapper .col-md-6:eq(0)');

        // Tabla 2.3.15 Lista Comprobación de Asignación  de Asesor
        var tabla = $("#tableComAsignarAsesor").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaComAsignarAsesor.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
        }).buttons().container().appendTo('#tableComAsignarAsesor_wrapper .col-md-6:eq(0)');

        // Tabla 2.11.2 Tabla Acceso de Usuarios al Sistema
        var tabla = $("#tableConsultaAccesos").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf"],
            "ajax": {
                url: "../consultas/consultaAccesos.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
        }).buttons().container().appendTo('#tableConsultaAccesos_wrapper .col-md-6:eq(0)');

        // Tabla 2.8.1 Consecutivo Solicitud Alta Proyecto
        var tabla = $("#tableConsSolicitudAlta").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaConsSolicitudAlta.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
            }
        }).buttons().container().appendTo('#tableConsSolicitudAlta_wrapper .col-md-6:eq(0)');

        // Tabla 2.8.2 Consecutivo Alta Proyecto
        var tabla = $("#tableConsAltaProy").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaConsAltaProyecto.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
                $(api.column(14).footer()).html(
                    'Total: ' + api.column(14, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(15).footer()).html(
                    'Total: ' + api2.column(15, {
                        page: 'current'
                    }).data().sum()
                )
            }
        }).buttons().container().appendTo('#tableConsAltaProy_wrapper .col-md-6:eq(0)');

        // Tabla 2.8.3 Consecutivo Código Identificador
        var tabla = $("#tableConsProyCodId").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaConsCodIdentificador.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
                $(api.column(15).footer()).html(
                    'Total: ' + api.column(15, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(16).footer()).html(
                    'Total: ' + api2.column(16, {
                        page: 'current'
                    }).data().sum()
                )
                var api3 = this.api();
                $(api3.column(17).footer()).html(
                    'Total: ' + api3.column(17, {
                        page: 'current'
                    }).data().sum()
                )
            }

        }).buttons().container().appendTo('#tableConsProyCodId_wrapper .col-md-6:eq(0)');

        // Tabla Indicadores comprobados/no comprobados
        var tabla = $("#tableIndicadorAsesor").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf"],
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
                $(api.column(1).footer()).html(
                    'Total: ' + api.column(1, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(2).footer()).html(
                    'Total: ' + api2.column(2, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(3).footer()).html(
                    'Total: ' + api2.column(3, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(4).footer()).html(
                    'Total Columna: ' + api2.column(4, {
                        page: 'current'
                    }).data().sum()
                )
            }
        }).buttons().container().appendTo('#tableIndicadorAsesor_wrapper .col-md-6:eq(0)');

        // Modal Cargar Solicitud Cambiho de Asesor
        var tabla = $("#tableCargarSolCambioAsesor").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf"],
            "ajax": {
                url: "../consultas/consultaSolCambioAsesor.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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

        }).buttons().container().appendTo('#tableCargarSolCambioAsesor_wrapper .col-md-6:eq(0)');

        // Tabla 3.1 Reporte Diferencia Valor Alta Vs. Valor Código Identificador
        var tabla = $("#tableDifVentasAltasvsCodId").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf"],
            "ajax": {
                url: "../consultas/consultaDifValVenAltavsValCodId.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
                $(api.column(11).footer()).html(
                    'Total: ' + api.column(11, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(12).footer()).html(
                    'Total: ' + api2.column(12, {
                        page: 'current'
                    }).data().sum()
                )
                var api3 = this.api();
                $(api3.column(13).footer()).html(
                    'Total: ' + api3.column(13, {
                        page: 'current'
                    }).data().sum()
                )
            }

        }).buttons().container().appendTo('#tableDifVentasAltasvsCodId_wrapper .col-md-6:eq(0)');

        // Tabla 2.3.15.2 Solicitud Cambio de Asesor
        var tabla = $("#tableSolCambiarAsesor").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaCambiarAsesor.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
        }).buttons().container().appendTo('#tableSolCambiarAsesor_wrapper .col-md-6:eq(0)');

        // Tabla 2.3.9.2 Solicitud Cambio de Placas
        var tabla = $("#tableSolCambiarPlacas").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaCambiarPlacas.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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
        }).buttons().container().appendTo('#tableSolCambiarPlacas_wrapper .col-md-6:eq(0)');

        // Modal Cargar Solicitud Cambiho de Asesor
        var tabla = $("#tableCargarSolCambioPlacas").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'lBfrtip',
            "buttons": ["csv", "excel", "pdf"],
            "ajax": {
                url: "../consultas/consultaSolCambioPlacas.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
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

        }).buttons().container().appendTo('#tableCargarSolCambioPlacas_wrapper .col-md-6:eq(0)');

        // Tabla 3.2 Reporte Diferencia Valor Venta Inicial Vs Valor Alta
        var tabla = $("#tableDifVentasInicialvsValAltas").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'PlBfrtip',
            "buttons": ["csv", "excel", "pdf"],
            "ajax": {
                url: "../consultas/consultaDifValVenInicialvsValAltas.php",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                }
            },
            "searchPanes": {
                initCollapsed: true,
                // cascadePanes: true,
                dtOpts: {
                    dom: 'tp',
                    paging: 'true',
                    // pagingType:'simple',
                    searching: true
                }
            },
            "columnDefs": [{
                searchPanes: {
                    show: true
                },
                targets: [4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
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
                $(api.column(11).footer()).html(
                    'Total: ' + api.column(11, {
                        page: 'current'
                    }).data().sum()
                )
                var api2 = this.api();
                $(api2.column(12).footer()).html(
                    'Total: ' + api2.column(12, {
                        page: 'current'
                    }).data().sum()
                )
                var api3 = this.api();
                $(api3.column(13).footer()).html(
                    'Total: ' + api3.column(13, {
                        page: 'current'
                    }).data().sum()
                )
            }

        }).buttons().container().appendTo('#tableDifVentasInicialvsValAltas_wrapper .col-md-6:eq(0)');

        // Tabla 2.3.2 Lista de Proyectos
        var tabla = $("#tablaListaProyectos").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'PlBfrtip',
            "buttons": ["csv", "excel", "pdf"],
            "ajax": {
                url: "../consultas/consultaProyectos.php",
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
                     pagingType:'simple',
                     searching: true
                 }
             },
              "columnDefs": [{
                  searchPanes: {
                      show: false
                  },
                  targets: [1,2],
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

            }

        }).buttons().container().appendTo('#tablaListaProyectos_wrapper .col-md-6:eq(0)');

 
        // --------------------------------------------------------------------------------------------------------
        // tabla de Prueba sin funcion
        var tabla = $("#tableComPlacasPrueba").DataTable({
            "ajax": '../admin/prueba1.php'
        });
    </script>
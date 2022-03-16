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

    <!-- Page specific script -->
    <script>
        $(document).ready(function() {
            // table permisos
            var tabla = $("#tablePermisos").DataTable({
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
            }).buttons().container().appendTo('#tablePermisos_wrapper .col-md-6:eq(0)');

            // Tabla 2.4.2 Registro de Solicitud Alta Proyecto
            var tabla = $("#tableRegSolAltaProy").DataTable({
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
            }).buttons().container().appendTo('#tableRegSolAltaProy_wrapper .col-md-6:eq(0)');

            // Tabla 2.5 Alta Proyecto
            var tabla = $("#tableAltaProy").DataTable({
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
            }).buttons().container().appendTo('#tableAltaProy_wrapper .col-md-6:eq(0)');

            // Tabla 2.6 Proyectos con Código Identificador
            var tabla = $("#tableProyCodId").DataTable({
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
            }).buttons().container().appendTo('#tableProyCodId_wrapper .col-md-6:eq(0)');

            // Tabla 2.7 Supervisión de Registro Código Identificador
            var tabla = $("#tableSuperRegCodId").DataTable({
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
            }).buttons().container().appendTo('#tableSuperRegCodId_wrapper .col-md-6:eq(0)');

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
        });
    </script>
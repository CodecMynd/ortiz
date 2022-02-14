    <!-- DataTables  & Plugins -->
    <script src="../../plugins/dataTables/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/dataTables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/dataTables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/dataTables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/dataTables/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/dataTables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/dataTables/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/dataTables/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/dataTables/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="../../plugins/dataTables/jszip/jszip.min.js"></script>
    <script src="../../plugins/dataTables/pdfmake/pdfmake.min.js.map"></script>
    <script src="../../plugins/dataTables/pdfmake/vfs_fonts.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#tableCrudUsuarios").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "language": {

                    "aria": {
                        "sortAscending": "Activar para ordenar la columna de manera ascendente",
                        "sortDescending": "Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
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
                    "search": "Buscar:",
                    "decimal": ".",
                    "emptyTable": "No hay datos disponibles en la tabla",
                    "info": "Mostrando de _START_ al _END_ de  _TOTAL_ registros",
                    "zeroRecords": "No se encontraron coincidencias"

                }
            }).buttons().container().appendTo('#tableCrudUsuarios_wrapper .col-md-6:eq(0)');
        });
    </script>
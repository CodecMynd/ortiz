


        // --------------------------------------------------------------------------------------------------------------------------------------------------
        // Tabla tablePreSelect
        var tableVerIndicadoresIncidencias = $("#tableVerIndicadoresIncidencias").DataTable({
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
                url: "../consultas/consultaVerIndicadoresIncidencias.php",
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
                    targets: [1,2],
                },
                {
                    targets: [],
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
                 $(api.column(2).footer()).html(
                     'Total: ' + api.column(2, {
                         page: 'current'
                     }).data().sum()
                 )
             },
             "createdRow": function (row, data, index) {
                 if (data[2] >= '0') {
                     $('td', row).eq(2).css({
                         'text-align': 'center',
                         'background-color': '#5A6268',
                         'color': '#fff',
                         'font-weight': 'bold'
                     });
                 }
             },

        });
        setInterval(function () {
            tableVerIndicadoresIncidencias.ajax.reload(null, false); // user paging is not reset on reload
        }, 180000);
        //----------------------------------------------------------------------------------------------------------------------------------------------------------------------

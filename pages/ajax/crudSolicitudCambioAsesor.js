
// -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------      
      
      // Tabla 2.3.15.2 Solicitud Cambio de Asesor
        var tableSolCambiarAsesor = $("#tableSolCambiarAsesor").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'PlBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaCambiarAsesor.php",
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
                targets: [4, 5, 6, 7, 8, 9, 10, 11, 12],
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
        });
        setInterval(function() {
            tableSolCambiarAsesor.ajax.reload(null, false); // user paging is not reset on reload
        }, 600000);


        //----------------------------------------------------------------------------------------------------------------------

        // regComAsesor 2.3.15.1 REGISTRAR COMPROBACIÓN DE ASESOR --------------------------------------------------------------
        $(document).ready(function() {
            $("#solCambioAsesor").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.15.2.1 REGISTRO SOLICITUD DE CAMBIO DE ASESOR,, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });

        // eliComAsesor 2.3.15.2 REGISTRAR COMPROBACIÓN DE ASESOR --------------------------------------------------------------
        $(document).ready(function() {
            $("#cambioAsesorAutorizar ").click(function() {
                toastr["error"]("¡No tienes acceso a: 2.3.15.2.2 REGSITRAR AUTORIZACION CAMBIO DE ASESOR, consulta al administrador!")

                tostadas.opciones = {
                    "botóncerrar": falso,
                    "depuración": cierto,
                    "newestOnTop": falso,
                    "barra de progreso": falso,
                    "positionClass": "brindis arriba a la derecha",
                    "prevenir duplicados": falso,
                    "onclick": nulo,
                    "showDuration": "400",
                    "ocultarDuración": "1000",
                    "tiempo de espera": "5000",
                    "tiempo de espera extendido": "1200",
                    "showEasing": "oscilación",
                    "hideEasing": "lineal",
                    "showMethod": "fundido de entrada",
                    "hideMethod": "desaparecer"
                }
            })
        });
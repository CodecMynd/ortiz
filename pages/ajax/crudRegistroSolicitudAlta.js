
                // 2.4.5 Eliminar Registro de Solicitud Alta Proyecto
                $('#btnRegresarRegSolAltaProy').click(function() {
                    var param = $('#formRegresarRegSolAltProy').serialize();
                    $.ajax({
                            url: '../update/updateRegresarRegSolAltProy.php',
                            cache: false,
                            type: 'POST',
                            data: param,
        
                            success: function(vs) {
                                $('#formRegresarRegSolAltProy')[0].reset();
                                tableRegSolAltaProy.ajax.reload(null, false);
                            }
                        })
                        .done(function(res) {
                            $('#respuestaRegresarRegSolAltaProy').html(res)
                        })
                });
                    //Ocultar boton por 5 minutos para evitar el doble submit
                    $("#btnRegresarSuperCodId").on('click', function () {
                        $("#btnRegresarSuperCodId").css('visibility', 'hidden');
                        setTimeout(function () {
                            $("#btnRegresarSuperCodId").css('visibility', 'visible');
                        }, 5000);
                    });
        // ----------------------------------------------------------------------------------------------------------------------------------

        // Tabla 2.4.2 Registro de Solicitud Alta Proyecto
        var tableRegSolAltaProy = $("#tableRegSolAltaProy").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "dom": 'PlBfrtip',
            "buttons": ["csv", "excel", "pdf", "colvis"],
            "ajax": {
                url: "../consultas/consultaSolicitudAlta.php",
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
                targets: [7, 8, 9, 10, 11, 12, 13, 14],
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
        });
        setInterval(function() {
            tableRegSolAltaProy.ajax.reload(null, false); // user paging is not reset on reload
        }, 30000);

        // ----------------------------------------------------------------------------------------------------------------------------------
                // regSolAltProy  2.4.2 REGISTRO DE SOLICITUD ALTA DE PROYECTO --------------------------------------------------------------
                $(document).ready(function() {
                    $("#regSolAltProy").click(function() {
                        toastr["error"]("¡No tienes acceso a: 2.4.2 REGISTRO DE SOLICITUD ALTA DE PROYECTO, consulta al administrador!")
        
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
        
                // pdfRegSolAltProy 2.4.3 DESCARGAR PDF REGISTRO DE SOLICITUD ALTA PROYECTO --------------------------------------------------------------
                $(document).ready(function() {
                    $("#pdfRegSolAltProy").click(function() {
                        toastr["error"]("¡No tienes acceso a: 2.4.2.1 DESCARGAR PDF REGISTRO DE SOLICITUD ALTA PROYECTO, consulta al administrador!")
        
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
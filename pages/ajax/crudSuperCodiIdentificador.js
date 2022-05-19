            // 4.1.2 Eliminar Link de Desarmado
            $('#btnRegresarSuperCodId').click(function () {
                var param = $('#formRegresarSuperCodId').serialize();
                $.ajax({
                        url: '../update/updateRegresarSuperCodIdentificador.php',
                        cache: false,
                        type: 'POST',
                        data: param,

                        success: function (vs) {
                            // $('#formRegresarSuperCodId')[0].reset();
                            // $("#refresh_tableSuperRegCodID").load(" #refresh_tableSuperRegCodID");
                            tableSuperRegCodID.ajax.reload(null, false)
                        }
                    })
                    .done(function (res) {
                        $('#respuestaRegresarSuperCodId').html(res)
                    })
            });
            //Ocultar boton por 5 minutos para evitar el doble submit
            $("#btnRegresarSuperCodId").on('click', function () {
                $("#btnRegresarSuperCodId").css('visibility', 'hidden');
                setTimeout(function () {
                    $("#btnRegresarSuperCodId").css('visibility', 'visible');
                }, 5000);
            });
            ///------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


            // datatbale
            // Tabla 2.7 Supervisión de Registro Código Identificador

            var tableSuperRegCodID = $("#tableSuperRegCodID").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
            "select": true,
            "select":{
                style:'multi'
            },
                "dom": 'PBlfrtip',
                "buttons": ["csv", "excel", "pdf", "colvis"],
                "ajax": {
                    url: "../consultas/consultaSuperCodIdentificador.php",
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
                    targets: [2, 3, 4, 7, 8, 9, 10, 11, 12, 13, 14],
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
            setInterval(function () {
                tableSuperRegCodID.ajax.reload(null, false); // user paging is not reset on reload
            }, 600000);


            ///------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

            // regSuperCodIdentificador 2.7.1 SUPERVISION DE REGISTRO CODIGO IDENTIFICADOR  --------------------------------------------------------------
            $(document).ready(function () {
                $("#regSuperCodIdentificador").click(function () {
                    toastr["error"]("¡No tienes acceso a: 2.7.1 SUPERVISION DE REGISTRO DE CÓDIGO IDENTIFICADOR, consulta al administrador!")

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

            // eliSuperCodIdentificador 2.6.2 ELIMINAR CODIGO IDENTIFICADOR  --------------------------------------------------------------
            $(document).ready(function () {
                $("#eliSuperCodIdentificador").click(function () {
                    toastr["error"]("¡No tienes acceso a: 2.7.2 ELIMINAR SUPERVISION DE CODIGO IDENTIFICADOR, consulta al administrador!")

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

            // verLinkObsSuperIdentificador 2.6.4 VER TABLA ALTAS  --------------------------------------------------------------
            $(document).ready(function () {
                $("#verLinkObsSuperIdentificador").click(function () {
                    toastr["error"]("¡No tienes acceso a: 2.7.3 VER LINK DE VIDEO EN VIVO Y OBSERVACIONES, consulta al administrador!")

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

            // verTablaSuperCodIdentificador 2.5.4 VER TABLA ALTAS  --------------------------------------------------------------
            $(document).ready(function () {
                $("#verTablaSuperCodIdentificador").click(function () {
                    toastr["error"]("¡No tienes acceso a: 2.7.4 VER TABLA PROYECTOS SUPERVISADOS CON CODIGO IDENTIFICADOR, consulta al administrador!")

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
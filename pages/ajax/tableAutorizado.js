        // 4.1.2.4 Regresar a Pre-Autorización  --------------------------------------------------------------------------------------------------------------------------------------------------

        $('#btnRegresarPreAutorizacion').click(function () {
            var param = $('#formRegresarPreAutorizacion').serialize();
            $.ajax({
                    url: '../update/updateRegresarPreAutorizacion.php',
                    type: 'POST',
                    data: param,

                    success: function (vs) {
                        $('#formRegresarPreAutorizacion')[0].reset();
                        setTimeout(function () {
                            $('.regresarPreAutorizacion').modal('hide');
                        }, 1000);
                        tableAutorizado.ajax.reload(null, false);
                        tablePreautorizacion.ajax.reload(null, false);
                    }
                })
                .done(function (res) {
                    $('#respuestaRegresarPreAutorizacion').html(res)
                })
        });

        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnRegresarPreAutorizacion").on('click', function () {
            $("#btnRegresarPreAutorizacion").css('visibility', 'hidden');
            setTimeout(function () {
                $("#btnRegresarPreAutorizacion").css('visibility', 'visible');
            }, 3000);
        });

        // 4.1.2.5 Enviar Proceso de Surtido de Piezas ---------------------------------------------------------------------------------------------------------------------------------------

        $('#btnEnviarAutoProceSurtPzs').click(function () {
            var param = $('#formEnviarAutoProceSurtPzs').serialize();
            $.ajax({
                    url: '../update/updateEnviarAutoProceSurtPzs.php',
                    type: 'POST',
                    data: param,

                    success: function (vs) {
                        $('#formEnviarAutoProceSurtPzs')[0].reset();
                        setTimeout(function () {
                            $('.enviarAutoProceSurtPzs').modal('hide');
                        }, 1000);
                        tableAutorizado.ajax.reload(null, false);
                        tableAutoProceSurtPzs.ajax.reload(null, false);
                    }
                })
                .done(function (res) {
                    $('#respuestaEnviarAutoProceSurtPzs').html(res)
                })
        });

        //Ocultar boton por 3 minutos para evitar el doble submit
        $("#btnEnviarAutoProceSurtPzs").on('click', function () {
            $("#btnEnviarAutoProceSurtPzs").css('visibility', 'hidden');
            setTimeout(function () {
                $("#btnEnviarAutoProceSurtPzs").css('visibility', 'visible');
            }, 3000);
        });


        // --------------------------------------------------------------------------------------------------------------------------------------------------
        // Tabla tablePreSelect
        var tableAutorizado = $("#tableAutorizado").DataTable({
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
                url: "../consultas/consultaAutorizado.php",
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
                    targets: [2, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18,19],
                },
                {
                    targets: [0, 3, 9],
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
            },
            "createdRow": function (row, data, index) {
                if (data[8] > '0') {
                    $('td', row).eq(8).css({
                        'text-align': 'center',
                        'background-color': '#5A6268',
                        'color': '#fff',
                        'font-weight': 'bold'
                    });
                }
                if (data[9] > '0') {
                    $('td', row).eq(9).css({
                        'text-align': 'center',
                        'background-color': '#5A6268',
                        'color': '#fff',
                        'font-weight': 'bold'
                    });
                }
                if (data[10] >= '0') {
                    $('td', row).eq(10).css({
                        'text-align': 'center',
                        'background-color': '#5A6268',
                        'color': '#fff',
                        'font-weight': 'bold'
                    });
                }
            },

        });
        setInterval(function () {
            tableAutorizado.ajax.reload(null, false); // user paging is not reset on reload
        }, 360000);
        //----------------------------------------------------------------------------------------------------------------------------------------------------------------------

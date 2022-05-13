
    // 2.5.2 Eliminar Registro Alta Proyecto
    $('#btnRegresarAltaProyecto').click(function() {
        var param = $('#formRegresarAltaProyecto').serialize();
        $.ajax({
                url: '../update/updateRegresarAltaProy.php',
                cache: false,
                type: 'POST',
                data: param,

                success: function(vs) {
                    // $('#formRegresarAltaProyecto')[0].reset();
                    // $("#refresh_tableSuperRegCodID").load(" #refresh_tableSuperRegCodID");
                    tableAltaProy.ajax.reload(null, false)
                }
            })
            .done(function(res) {
                $('#respuestaRegresarAltaProyecto').html(res)
            })
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnRegresarAltaProyecto").on('click', function() {
        $("#btnRegresarAltaProyecto").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnRegresarAltaProyecto").css('visibility', 'visible');
        }, 5000);
    });
// ----------------------------------------------------------------------------------------------------------------------------

// Tabla 2.5 Alta Proyecto
var tableAltaProy = $("#tableAltaProy").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf", "colvis"],
    "ajax": {
        url: "../consultas/consultaAltaProyecto.php",
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
        targets: [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14],
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
});
setInterval(function () {
    tableAltaProy.ajax.reload(null, false); // user paging is not reset on reload
}, 30000);
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// regAlta 2.5.1 REGISTRO ALTA  --------------------------------------------------------------
$(document).ready(function () {
    $("#regAlta").click(function () {
        toastr["error"]("¡No tienes acceso a: 2.5.1 REGISTRO ALTA PROYECTO, consulta al administrador!")

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

// eliAlta 2.5.2 ELIMINAR ALTA  --------------------------------------------------------------
$(document).ready(function () {
    $("#eliAlta").click(function () {
        toastr["error"]("¡No tienes acceso a: 2.5.2 ELIMINAR ALTA PROYECTO, consulta al administrador!")

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

// repAltaCob 2.5.3 REPORTE ALTA POR COBRANZAS  --------------------------------------------------------------
$(document).ready(function () {
    $("#pdfAlta").click(function () {
        toastr["error"]("¡No tienes acceso a: 2.5.3 REPORTE PDF ALTA PROYECTO, consulta al administrador!")

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

// verLinkObsAlta 2.5.5 VER TABLA ALTAS  --------------------------------------------------------------
$(document).ready(function () {
    $("#verLinkObsAlta").click(function () {
        toastr["error"]("¡No tienes acceso a: 2.5.4 VER LINK DE VIDEO EN VIVO Y OBSERVACIONES, consulta al administrador!")

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

// varTablaAlta 2.5.5 VER TABLA ALTAS  --------------------------------------------------------------
$(document).ready(function () {
    $("#varTablaAlta").click(function () {
        toastr["error"]("¡No tienes acceso a: 2.5.4 VER TABLA ALTAS, consulta al administrador!")

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
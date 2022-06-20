    // 2.3.15.1.3 Registrar Supervisión Comprobación de Asesor --------------------------------------------------------------------------------------------------------------------------------------------------

    $('#btnNuevoRegComAsesorSuper').click(function() {
        var param = $('#formNuevoRegComAsesorSuper').serialize();
        $.ajax({
                url: '../adds/addNuevoRegComAsesorSuper.php',
                type: 'POST',
                data: param,

                success: function(vs) {
                    $('#formNuevoRegComAsesorSuper')[0].reset();
                    setTimeout(function() {
                        $('.regComAsesorSuper').modal('hide');
                    }, 1000);
                    tableComAsignarAsesor.ajax.reload(null, false);
                }
            })
            .done(function(res) {
                $('#respuestaNuevogComAsesorSuper').html(res)
            })
    });

    //Ocultar boton por 3 minutos para evitar el doble submit
    $("#btnNuevoRegComAsesorSuper").on('click', function() {
        $("#btnNuevoRegComAsesorSuper").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnNuevoRegComAsesorSuper").css('visibility', 'visible');
        }, 3000);
    });

// 2.3.15.1.1 Registrar Comprobación de Asignación Asesor --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnNuevoRegComAsesor').click(function () {
    var param = $('#formNuevoRegComAsesor').serialize();
    $.ajax({
            url: '../adds/addNuevoRegComAsesor.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegComAsesor')[0].reset();
                setTimeout(function () {
                    $('.regComAsesor').modal('hide');
                }, 1000);
                tableComAsignarAsesor.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaNuevogComAsesor').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnNuevoRegComAsesor").on('click', function () {
    $("#btnNuevoRegComAsesor").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegComAsesor").css('visibility', 'visible');
    }, 3000);
});


// Tabla 2.3.15 Lista Comprobación de Asignación  de Asesor
var tableComAsignarAsesor = $("#tableComAsignarAsesor").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,

    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf", "colvis"],
    "ajax": {
        url: "../consultas/consultaComAsignarAsesor.php",
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
        targets: [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
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
        $(api.column(10).footer()).html(
            'Total: ' + api.column(10, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
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
    tableComAsignarAsesor.ajax.reload(null, false); // user paging is not reset on reload
}, 360000);
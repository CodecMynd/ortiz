 function mostarDetalles3(id_proyecto) {
     var ruta = '../components/modal-verGralProceSurtPzsAdic.php?id_proyecto=' + id_proyecto;
     $.get(ruta, function (data) {
         $('#divModalProceSurtPzsAdic').html(data);
         $('#modal-verGralProceSurtPzsAdic').modal('show');
     });
 }

// 4.2.4.1 Regresar de Proceso de Surtido de Piezas: Piezas Adicionales a Autorizado: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnRegresarAutorizadoPzsAdic').click(function () {
    var param = $('#formRegresarAutorizadoPzsAdic').serialize();
    $.ajax({
            url: '../update/updateRegresarAutorizadoPzsAdic.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formRegresarAutorizadoPzsAdic')[0].reset();
                setTimeout(function () {
                    $('.regresarAutorizadoPzsAdic').modal('hide');
                }, 1000);
                tableAutoProceSurtPzsAdic.ajax.reload(null, false);
                tableAutorizadoPzsAdic.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaRegresarAutorizadoPzsAdic').html(res)
        })
});


//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnRegresarAutorizadoPzsAdic").on('click', function () {
    $("#btnRegresarAutorizadoPzsAdic").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnRegresarAutorizadoPzsAdic").css('visibility', 'visible');
    }, 3000);
});


// --------------------------------------------------------------------------------------------------------------------------------------------------

// 4.2.4.2 Enviar de Proceso de Surtido de Piezas: Piezas Adicionales a Piezas Entregadas: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------

$('#btnEnviarPzsEntregadasPzsAdic').click(function () {
    var param = $('#formEnviarPzsEntregadasPzsAdic').serialize();
    $.ajax({
            url: '../update/updateEnviarPzsEntregadasPzsAdic.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formEnviarPzsEntregadasPzsAdic')[0].reset();
                 setTimeout(function () {
                     $('.enviarPzsEntregadasPzsAdic').modal('hide');
                 }, 1000);
                tableAutoProceSurtPzsAdic.ajax.reload(null, false);
                tablepzsEntregadasAdic.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaEnviarPzsEntregadasPzsAdic').html(res)
        })
});

//Ocultar boton por 3 minutos para evitar el doble submit
$("#btnEnviarPzsEntregadasPzsAdic").on('click', function () {
    $("#btnEnviarPzsEntregadasPzsAdic").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnEnviarPzsEntregadasPzsAdic").css('visibility', 'visible');
    }, 3000);
});

// --------------------------------------------------------------------------------------------------------------------------------------------------

    // 4.2.4.4 Eliminar Proyecto en Proceso de Surtido de Piezas: Piezas Adicionales --------------------------------------------------------------------------------------------------------------------------------------------------

    $('#btnEliminarRegProceSurtPzsAdic').click(function () {
        var param = $('#formEliminarRegProceSurtPzsAdic').serialize();
        $.ajax({
                url: '../update/updateEliminarRegProceSurtPzsdic.php',
                type: 'POST',
                data: param,
    
                success: function (vs) {
                    $('#formEliminarRegProceSurtPzsAdic')[0].reset();
                     setTimeout(function () {
                         $('.eliminarProceSurtPzsAdic').modal('hide');
                     }, 1000);
                    tableAutoProceSurtPzsAdic.ajax.reload(null, false);
                }
            })
            .done(function (res) {
                $('#respuestaEliminarRegProceSurtPzsAdic').html(res)
            })
    });
    
    //Ocultar boton por 3 minutos para evitar el doble submit
    $("#btnEliminarRegProceSurtPzsAdic").on('click', function () {
        $("#btnEliminarRegProceSurtPzsAdic").css('visibility', 'hidden');
        setTimeout(function () {
            $("#btnEliminarRegProceSurtPzsAdic").css('visibility', 'visible');
        }, 3000);
    });

// Tabla tableAutoProceSurtPzsAdic
var tableAutoProceSurtPzsAdic = $("#tableAutoProceSurtPzsAdic").DataTable({
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
        url: "../consultas/consultaAutoProceSurtPzsAdic.php",
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
            targets: [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,20,21],
        },
        {
            targets: [0,3,9,13,15,16,18,21],
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
        var api2 = this.api();
        $(api2.column(10).footer()).html(
            'Total: ' + api2.column(10, {
                page: 'current'
            }).data().sum()
        )
        var api3 = this.api();
        $(api3.column(11).footer()).html(
            'Total: ' + api3.column(11, {
                page: 'current'
            }).data().sum()
        )
    },
    "createdRow": function (row, data, index) {
        if (data[7] > '0') {
            $('td', row).eq(7).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
        if (data[8] > '0') {
            $('td', row).eq(8).css({
                'text-align': 'center',
                'background-color': '#5A6268',
                'color': '#fff',
                'font-weight': 'bold'
            });
        }
    },

});
setInterval(function () {
    tableAutoProceSurtPzsAdic.ajax.reload(null, false); // user paging is not reset on reload
}, 360000);
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------

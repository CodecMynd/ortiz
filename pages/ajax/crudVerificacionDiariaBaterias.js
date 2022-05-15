// Mostrar Modal Incidencias ---------------------------------------------------------
function mostarIncidencias(id_proyecto) {
    var ruta = '../components/modal-verGralIncidencias.php?id_proyecto=' + id_proyecto;
    $.get(ruta, function (data) {
        $('#divModalverGralIncidencias').html(data);
        $('#modal-verGralIncidencias').modal('show');
    });
}

// Mostrar Generales  ---------------------------------------------------------
function mostrarVerGralVerDiaBat(id_proyecto) {
    var ruta = '../components/modal-verGralVerifDiaBat.php?id_proyecto=' + id_proyecto;
    $.get(ruta, function (data) {
        $('#divModalverGralVarDiaBat').html(data);
        $('#modal-verGralVerDiaBat').modal('show');
    });
}


// Agregar Comprobación Link ---------------------------------------------------------

$('#btnNuevoRegVerifDiaBat').click(function () {
    var param = $('#formNuevoRegVerifDiaBat').serialize();
    $.ajax({
            url: '../adds/addNuevoRegVerifDiaBat.php',
            type: 'POST',
            data: param,

            success: function (vs) {
                $('#formNuevoRegVerifDiaBat')[0].reset();
                // $('input[type=checkbox]').prop('checked', false);
                setTimeout(function() {
                    $('.regVerifDiaBat').modal('hide');
                  }, 1000);
            
                tablaVerifDiaBaterias.ajax.reload(null, false);
            }
        })
        .done(function (res) {
            $('#respuestaNuevoRegVerifDiaBat').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnNuevoRegVerifDiaBat").on('click', function () {
    $("#btnNuevoRegVerifDiaBat").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegVerifDiaBat").css('visibility', 'visible');
    }, 5000);
});

// Agregar Supervision Comprobacion de Link ---------------------------------------------------------
$('#btnNuevoRegVerifDiaBatSuper').click(function () {
    var param = $('#formNuevoRegVerifDiaBatSuper').serialize();
    $.ajax({
            url: '../adds/addNuevoRegVerifDiaBatSuper.php',
            type: 'POST',
            data: param,

            success: function (s) {
                $('#formNuevoRegVerifDiaBatSuper')[0].reset();
                // $('input[type=checkbox]').prop('checked', false);
                setTimeout(function() {
                    $('.regVerifDiaBatSuper').modal('hide');
                  }, 1000);
                tablaVerifDiaBaterias.ajax.reload(null, false);

            }
        })
        .done(function (res) {
            $('#respuestaNuevoRegVerifDiaBatSuper').html(res)
        })
});

//Ocultar boton por 10 segundos para evitar el doble submit
$("#btnNuevoRegVerifDiaBatSuper").on('click', function () {
    $("#btnNuevoRegVerifDiaBatSuper").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoRegVerifDiaBatSuper").css('visibility', 'visible');
    }, 10000);
});


// 2.3.3 Verificación Diaria de Baterías ------------------------------------------
var tablaVerifDiaBaterias = $("#tablaVerifDiaBaterias").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": true,
    "dom": 'PlBfrtip',
    "buttons": ["csv", "excel", "pdf", "colvis"],
    "ajax": {
        url: "../consultas/consultaVerifDiaBaterias.php",
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
        targets: [4, 5, 6, 7, 8, 9, 11],
    }],
    "createdRow": function (row, data, index) {
        if (data[14]) {
            $('td', row).eq(14).css({
                'width': '10%'
            });
        }
    },
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
setInterval(function () {
    tablaVerifDiaBaterias.ajax.reload(null, false); // user paging is not reset on reload
}, 600000);
// --------------------------------------------------------------------------------------------------------
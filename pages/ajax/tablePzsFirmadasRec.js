 function mostarDetalles5(id_proyecto, id_preAutorizado, id_pzsEntregadas, id_pzsFirmadasRec) {
     var ruta = '../components/modal-verGralPzasFirmadasRec.php?id_proyecto=' + id_proyecto + '&id_preAutorizado=' + id_preAutorizado + '&id_pzsEntregadas=' + id_pzsEntregadas + '&id_pzsFirmadasRec=' + id_pzsFirmadasRec;
     $.get(ruta, function (data) {
         $('#divModalPzasFirmadasRec').html(data);
         $('#modal-verGralPzasFirmadasRec').modal('show');
     });
 }

 // 4.1.7.1 Regresar a Piezas Entregadas  --------------------------------------------------------------------------------------------------------------------------------------------------

 $('#btnRegresarPzsEntregadas').click(function () {
     var param = $('#formRegresarPzsEntregadas').serialize();
     $.ajax({
             url: '../update/updateRegresarPzsEntregadas.php',
             type: 'POST',
             data: param,

             success: function (vs) {
                 $('#formRegresarPzsEntregadas')[0].reset();
                 setTimeout(function () {
                     $('.regresarPzsEntregadas').modal('hide');
                 }, 1000);
                 tablepzsEntregadas.ajax.reload(null, false);
                 tablePzsFirmadasRec.ajax.reload(null, false);
             }
         })
         .done(function (res) {
             $('#respuestaRegresarPzsEntregadas').html(res)
         })
 });

 // --------------------------------------------------------------------------------------------------------------------------------------------------

 //Ocultar boton por 3 minutos para evitar el doble submit
 $("#btnRegresarPzsEntregadas").on('click', function () {
     $("#btnRegresarPzsEntregadas").css('visibility', 'hidden');
     setTimeout(function () {
         $("#btnRegresarPzsEntregadas").css('visibility', 'visible');
     }, 3000);
 });

 // 4.1.7.2 Enviar Supervisión de Surtido de Piezas  --------------------------------------------------------------------------------------------------------------------------------------------------

 $('#btnEnviarSuperSurtPzs').click(function () {
     var param = $('#formEnviarSuperSurtPzs').serialize();
     $.ajax({
             url: '../update/updateEnviarSuperSurtPzs.php',
             type: 'POST',
             data: param,

             success: function (vs) {
                 $('#formEnviarSuperSurtPzs')[0].reset();
                     setTimeout(function () {
                         $('.enviarSuperSurtPzs').modal('hide');
                     }, 1000);
                tableSuperSurtPzs.ajax.reload(null, false);
                 tablaPzsFirmadasRec.ajax.reload(null, false);
             }
         })
         .done(function (res) {
             $('#respuestaEnviarSuperSurtPzs').html(res)
         })
 });

 // --------------------------------------------------------------------------------------------------------------------------------------------------

 //Ocultar boton por 3 minutos para evitar el doble submit
 $("#btnEnviarSuperSurtPzs").on('click', function () {
     $("#btnEnviarSuperSurtPzs").css('visibility', 'hidden');
     setTimeout(function () {
         $("#btnEnviarSuperSurtPzs").css('visibility', 'visible');
     }, 3000);
 });

 // --------------------------------------------------------------------------------------------------------------------------------------------------
 // Tabla tablePzsFirmadasRec
 var tablePzsFirmadasRec = $("#tablePzsFirmadasRec").DataTable({
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
         url: "../consultas/consultaPzsFirmadasRec.php",
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
             targets: [2, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22],
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
         if (data[8] >= '0') {
             $('td', row).eq(8).css({
                 'text-align': 'center',
                 'background-color': '#5A6268',
                 'color': '#fff',
                 'font-weight': 'bold'
             });
         }
         if (data[9] >= '0') {
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
     tablePzsFirmadasRec.ajax.reload(null, false); // user paging is not reset on reload
 }, 360000);
 //----------------------------------------------------------------------------------------------------------------------------------------------------------------------

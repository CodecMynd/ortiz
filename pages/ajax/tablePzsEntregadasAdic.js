 function mostarDetalles4(id_proyecto) {
     var ruta = '../components/modal-verGralPzasEntregadasAdic.php?id_proyecto=' + id_proyecto;
     $.get(ruta, function (data) {
         $('#divModalPzasEntregadasAdic').html(data);
         $('#modal-verGralPzasEntregadasAdic').modal('show');
     });
 }

 // 4.2.5.1 Regresar de Piezas Entregadas: Piezas Adicionales a Proceso de Surtido de Piezas: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------

 $('#btnRegresarAutoProceSurtPzsAdic').click(function () {
     var param = $('#formRegresarAutoProceSurtPzsAdic').serialize();
     $.ajax({
             url: '../update/updateRegresarAutoProceSurtPzsAdic.php',
             type: 'POST',
             data: param,

             success: function (vs) {
                 $('#formRegresarAutoProceSurtPzsAdic')[0].reset();
                 setTimeout(function () {
                     $('.regresarAutoProceSurtPzsAdic').modal('hide');
                 }, 1000);
                 tablepzsEntregadasAdic.ajax.reload(null, false);
                 tableAutoProceSurtPzsAdic.ajax.reload(null, false);
             }
         })
         .done(function (res) {
             $('#respuestaRegresarAutoProceSurtPzsAdic').html(res)
         })
 });

 // //Ocultar boton por 3 minutos para evitar el doble submit
 $("#btnRegresarAutoProceSurtPzsAdic").on('click', function () {
     $("#btnRegresarAutoProceSurtPzsAdic").css('visibility', 'hidden');
     setTimeout(function () {
         $("#btnRegresarAutoProceSurtPzsAdic").css('visibility', 'visible');
     }, 3000);
 });

 // --------------------------------------------------------------------------------------------------------------------------------------------------

 // 4.2.5.2 Enviar de Piezas Entregadas: Piezas Adicionales a Piezas Firmadas de Recibido: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------

 $('#btnEnviarPzsFirmadasRecAdic').click(function () {
     var param = $('#formEnviarPzsFirmadasRecAdic').serialize();
     $.ajax({
             url: '../update/updateEnviarPzsFirmadasRecAdic.php',
             type: 'POST',
             data: param,

             success: function (vs) {
                 $('#formEnviarPzsFirmadasRecAdic')[0].reset();
                 setTimeout(function () {
                     $('.enviarPzsFirmadasRecAdic').modal('hide');
                 }, 1000);
                 tablepzsEntregadasAdic.ajax.reload(null, false);
                 tablePzsFirmadasRecAdic.ajax.reload(null, false);
             }
         })
         .done(function (res) {
             $('#respuestaEnviarPzsFirmadasRecAdic').html(res)
         })
 });


 //Ocultar boton por 3 minutos para evitar el doble submit
 $("#btnEnviarPzsFirmadasRecAdic").on('click', function () {
     $("#btnEnviarPzsFirmadasRecAdic").css('visibility', 'hidden');
     setTimeout(function () {
         $("#btnEnviarPzsFirmadasRecAdic").css('visibility', 'visible');
     }, 3000);
 });
 // Tabla tablepzsEntregadasAdic
 var tablepzsEntregadasAdic = $("#tablepzsEntregadasAdic").DataTable({
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
         url: "../consultas/consultaPzsEntregadasAdic.php",
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
             targets: [0, 3],
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
     },

 });
 setInterval(function () {
     tablepzsEntregadasAdic.ajax.reload(null, false); // user paging is not reset on reload
    }, 360000);
 //----------------------------------------------------------------------------------------------------------------------------------------------------------------------

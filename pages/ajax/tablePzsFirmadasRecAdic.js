  function mostarDetalles5(id_proyecto, id_pzsFirmadasRecAdic) {
      var ruta = '../components/modal-verGralPzasFirmadasRecAdic.php?id_proyecto=' + id_proyecto + '&id_pzsFirmadasRecAdic=' + id_pzsFirmadasRecAdic;
      $.get(ruta, function (data) {
          $('#divModalPzasFirmadasRecAdic').html(data);
          $('#modal-verGralPzasFirmadasRecAdic').modal('show');
      });
  }


  // --------------------------------------------------------------------------------------------------------------------------------------------------

  // 4.2.6.1 Regresar de Piezas Firmadas de Recibido: Piezas Adicionales a Piezas Entregadas: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------

  $('#btnRegresarPzsEntregadasAdic').click(function () {
      var param = $('#formRegresarPzsEntregadasAdic').serialize();
      $.ajax({
              url: '../update/updateRegresarPzsEntregadasAdic.php',
              type: 'POST',
              data: param,

              success: function (vs) {
                  $('#formRegresarPzsEntregadasAdic')[0].reset();
                  setTimeout(function () {
                      $('.regresarPzsEntregadasAdic').modal('hide');
                  }, 1000);
                  tablepzsEntregadasAdic.ajax.reload(null, false);
                  tablePzsFirmadasRecAdic.ajax.reload(null, false);
              }
          })
          .done(function (res) {
              $('#respuestaRegresarPzsEntregadasAdic').html(res)
          })
  });

  //Ocultar boton por 3 minutos para evitar el doble submit
  $("#btnRegresarPzsEntregadasAdic").on('click', function () {
      $("#btnRegresarPzsEntregadasAdic").css('visibility', 'hidden');
      setTimeout(function () {
          $("#btnRegresarPzsEntregadasAdic").css('visibility', 'visible');
      }, 3000);
  });

  // --------------------------------------------------------------------------------------------------------------------------------------------------

  // 4.2.6.2 Enviar de Piezas Firmadas de Recibido: Piezas Adicionales a Supervisión de Surtido de Piezas: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------

  $('#btnEnviarSuperSurtPzsAdic').click(function () {
      var param = $('#formEnviarSuperSurtPzsAdic').serialize();
      $.ajax({
              url: '../update/updateEnviarSuperSurtPzsAdic.php',
              type: 'POST',
              data: param,

              success: function (vs) {
                  $('#formEnviarSuperSurtPzsAdic')[0].reset();
                  setTimeout(function () {
                      $('.enviarSuperSurtPzsAdic').modal('hide');
                  }, 1000);
                  tableSuperSurtPzsAdic.ajax.reload(null, false);
                  tablePzsFirmadasRecAdic.ajax.reload(null, false);
              }
          })
          .done(function (res) {
              $('#respuestaEnviarSuperSurtPzsAdic').html(res)
          })
  });


  //Ocultar boton por 3 minutos para evitar el doble submit
  $("#btnEnviarSuperSurtPzsAdic").on('click', function () {
      $("#btnEnviarSuperSurtPzsAdic").css('visibility', 'hidden');
      setTimeout(function () {
          $("#btnEnviarSuperSurtPzsAdic").css('visibility', 'visible');
      }, 3000);
  });
  // Tabla tablePzsFirmadasRecAdic
  var tablePzsFirmadasRecAdic = $("#tablePzsFirmadasRecAdic").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": true,
      "stateSave": false,
      "select": true,
      "select": {
          style: 'multi'
      },
      "pageLength": 10,
      "dom": 'PlBfrtip',
      "buttons": ["csv", "excel", "pdf", "colvis"],
      "ajax": {
          url: "../consultas/consultaPzsFirmadasRecAdic.php",
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
              targets: [2, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
          },
          {
              targets: [0, 3, 20],
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

      },
      "createdRow": function (row, data, index) {
          if (data[11] > '0') {
              $('td', row).eq(11).css({
                  'text-align': 'center',
                  'background-color': '#5A6268',
                  'color': '#fff',
                  'font-weight': 'bold'
              });
          }
          if (data[12] >= '0') {
              $('td', row).eq(12).css({
                  'text-align': 'center',
                  'background-color': '#5A6268',
                  'color': '#fff',
                  'font-weight': 'bold'
              });
          }
      },

  });
  setInterval(function () {
      tablePzsFirmadasRecAdic.ajax.reload(null, false); // user paging is not reset on reload
  }, 180000);
  //----------------------------------------------------------------------------------------------------------------------------------------------------------------------

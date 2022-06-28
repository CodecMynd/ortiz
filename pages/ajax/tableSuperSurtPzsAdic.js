  function mostarDetalles6(id_proyecto, id_pzsFirmadasRecAdic, id_superSurtPzsAdic) {
      var ruta = '../components/modal-verGralSuperSurtPzsAdic.php?id_proyecto=' + id_proyecto + '&id_pzsFirmadasRecAdic=' + id_pzsFirmadasRecAdic + '&id_superSurtPzsAdic=' + id_superSurtPzsAdic;
      $.get(ruta, function (data) {
          $('#divModalSuperSurtPzsAdic').html(data);
          $('#modal-verGralSuperSurtPzsAdic').modal('show');
      });
  }

  // --------------------------------------------------------------------------------------------------------------------------------------------------
  // 4.2.7.1 Regresar de Supervisión de Surtido de Piezas: Piezas Adicionales a Piezas Firmadas de Recibido: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------

  $('#btnRegresarPzsFirmadasRecAdic').click(function () {
      var param = $('#formRegresarPzsFirmadasRecAdic').serialize();
      $.ajax({
              url: '../update/updateRegresarPzsFirmadasRecAdic.php',
              type: 'POST',
              data: param,

              success: function (vs) {
                  $('#formRegresarPzsFirmadasRecAdic')[0].reset();
                  setTimeout(function () {
                      $('.regresarPzsFirmadasRecAdic').modal('hide');
                  }, 1000);
                  tableSuperSurtPzsAdic.ajax.reload(null, false);
                  tablePzsFirmadasRecAdic.ajax.reload(null, false);
              }
          })
          .done(function (res) {
              $('#respuestaRegresarPzsFirmadasRecAdic').html(res)
          })
  });

  //Ocultar boton por 3 minutos para evitar el doble submit
  $("#btnRegresarPzsFirmadasRecAdic").on('click', function () {
      $("#btnRegresarPzsFirmadasRecAdic").css('visibility', 'hidden');
      setTimeout(function () {
          $("#btnRegresarPzsFirmadasRecAdic").css('visibility', 'visible');
      }, 3000);
  });
  
  // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  // 4.2.7.3 Eliminar Proyecto en Supervisión de Surtido de Piezas: Piezas Adicionales  --------------------------------------------------------------------------------------------------------------------------------------------------
  $('#btnEliminarRegSuperSurtPzsAdic').click(function () {
      var param = $('#formEliminarRegSuperSurtPzsAdic').serialize();
      $.ajax({
              url: '../update/updateEliminarRegSuperSurtPzsAdic.php',
              type: 'POST',
              data: param,

              success: function (vs) {
                  $('#formEliminarRegSuperSurtPzsAdic')[0].reset();
                  setTimeout(function () {
                      $('.eliminarRegSuperSurtPzsAdic').modal('hide');
                  }, 1000);
                  tableSuperSurtPzsAdic.ajax.reload(null, false);
              }
          })
          .done(function (res) {
              $('#respuestaEliminarRegSuperSurtPzsAdic').html(res)
          })
  });

  //Ocultar boton por 3 minutos para evitar el doble submit
  $("#btnEliminarRegSuperSurtPzsAdic").on('click', function () {
      $("#btnEliminarRegSuperSurtPzsAdic").css('visibility', 'hidden');
      setTimeout(function () {
          $("#btnEliminarRegSuperSurtPzsAdic").css('visibility', 'visible');
      }, 3000);
  });

  // ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  // Tabla tablePzsFirmadasRec
  var tableSuperSurtPzsAdic = $("#tableSuperSurtPzsAdic").DataTable({
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
          url: "../consultas/consultaSuperSurtPzsAdic.php",
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
          var api = this.api();
          $(api.column(10).footer()).html(
              'Total: ' + api.column(10, {
                  page: 'current'
              }).data().sum()
          )
          var api2 = this.api();
          $(api2.column(11).footer()).html(
              'Total: ' + api2.column(11, {
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
      tableSuperSurtPzsAdic.ajax.reload(null, false); // user paging is not reset on reload
  }, 360000);
  //----------------------------------------------------------------------------------------------------------------------------------------------------------------------

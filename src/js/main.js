// boton ir-arriba ----------------------------------------------
$(document).ready(function () {

    $('.ir-arriba').click(function () {
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);
        }
    });
});
/*
-
-
-
*/
// ocultar password -----------------------------------------------------------
// function mostrarPassword() {
//     var cambio = document.getElementById("password");
//     if (cambio.type == "password") {
//         cambio.type = "text";
//         $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
//     } else {
//         cambio.type = "password";
//         $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
//     }
// }
// $(document).ready(function () {
//     //CheckBox mostrar contraseña
//     $('#ShowPassword').click(function () {
//         $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
//     });
// });
/*
-
-
-
*/
// 1.1.1 Formulario Editar Usuario -----------------------------------------
$('#btnUpdateUsuario').click(function () {
    $.ajax({
            url: 'updateUsuario.php',
            type: 'POST',
            data: $('#formUpdateUsuario').serialize(),
        })
        .done(function (res) {
            $('#respuestaUpdateUsuario').html(res)
        })
});

//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateUsuario").on('click', function () {
    $("#btnUpdateUsuario").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateUsuario").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
//1.1.2 Formulario Asignar Contraseña -----------------------------------------
//enviar formulario
$('#btnUpdatePass').click(function () {
    $.ajax({
            url: 'updatePass.php',
            type: 'POST',
            data: $('#formUpdatePass').serialize(),
        })
        .done(function (res) {
            $('#respuestaUpdatePass').html(res)
        })
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdatePass").on('click', function () {
    $("#btnUpdatePass").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdatePass").css('visibility', 'visible');
    }, 300000);
});
//Cargar texto al habilitar un chekc
function test() {
    if (document.getElementById("check").checked) {
        document.getElementById("pass").value = "SIN_PASSWORD";
    } else {
        document.getElementById("pass").value = "";
    }
}
/*
-
-
-
*/
// 1.1.3 Formulario Eliminar Usuario -----------------------------------------------------
$('.btnBorrarUsuario').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar este usuario? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteUsuario.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudUsuarios.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// 1.1.4 Formulario Asignar Permisos ------------------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoPermiso').click(function () {
        $.ajax({
                url: 'addNuevoPermiso.php',
                type: 'POST',
                data: $('#formNuevoPermiso').serialize(),
            })
            .done(function (res) {
                $('#respuestaNuevoPermiso').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoPermiso").on('click', function () {
    $("#btnNuevoPermiso").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoPermiso").css('visibility', 'visible');
    }, 300000);
});
// 
/*
-
-
-
*/
// 1.1.5 Formulario Crear Usuario----------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoUsuario').click(function () {
        $.ajax({
                url: 'addNuevoUsuario.php',
                type: 'POST',
                data: $('#formNuevoUsuario').serialize(),
                beforeSend: function () {
                    $('.btnNuevoUsuario').val('Enviando...');
                }
            })
            .done(function (res) {
                $('#respuestaNuevoUsuario').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoUsuario").on('click', function () {
    $("#btnNuevoUsuario").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoUsuario").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 1.1.2.1 Formulario Borrar Permisos creados----------------------------------------------------
$('.btnBorrarPermisos').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar este Permiso? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deletePermiso.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudPermisos.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// 1.2.1 Formulario Registro de Marcas ------------------------------------------------------------
$(document).ready(function () {
    $('#btnNuevaMarca').click(function () {
        $.ajax({
                url: 'addNuevaMarca.php',
                type: 'POST',
                data: $('#formNuevaMarca').serialize(),

            })
            .done(function (res) {
                $('#respuestaNuevaMarca').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevaMarca").on('click', function () {
    $("#btnNuevaMarca").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevaMarca").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 1.2.2 Formulario Modificar Marcas ------------------------------------------------------------
$(document).ready(function () {
    $('#btnUpdateMarca').click(function () {
        $('#btnUpdateMarca').attr('disabled', 'disabled');
        $.ajax({
                url: 'updateMarca.php',
                type: 'POST',
                data: $('#formUpdateMarca').serialize(),

                timeout: 3000,
            })
            .done(function (res) {
                $('#respuestaUpdateMarca').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateMarca").on('click', function () {
    $("#btnUpdateMarca").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateMarca").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 1.2.3 Formulario Eliminar Marcas ------------------------------------------------------------
$('.btnBorrarMarca').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta Marca? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteMarca.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudMarcas.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// 1.3.1 Formulario Registro de Modelo ------------------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoModelo').click(function () {
        $.ajax({
                url: 'addNuevoModelo.php',
                type: 'POST',
                data: $('#formNuevoModelo').serialize(),
            })
            .done(function (res) {
                $('#respuestaNuevoModelo').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoModelo").on('click', function () {
    $("#btnNuevoModelo").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoModelo").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 1.3.2 Formulario Modificar Modelo ------------------------------------------------------------
$(document).ready(function () {
    $('#btnUpdateModelo').click(function () {
        $.ajax({
                url: 'updateModelo.php',
                type: 'POST',
                data: $('#formUpdateModelo').serialize(),
            })
            .done(function (res) {
                $('#respuestaUpdateModelo').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateModelo").on('click', function () {
    $("#btnUpdateModelo").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateModelo").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 1.3.3 Formulario Eliminar Modelo ------------------------------------------------------------
$('.btnBorrarModelo').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar este Modelo? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteModelo.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudModelos.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// 1.4.1 Formulario Registro Años ------------------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoAnio').click(function () {
        $.ajax({
                url: 'addNuevoAnio.php',
                type: 'POST',
                data: $('#formNuevoAnio').serialize(),

            })
            .done(function (res) {
                $('#respuestaNuevoAnio').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoAnio").on('click', function () {
    $("#btnNuevoAnio").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoAnio").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 1.4.2 Formulario Modificar Años ------------------------------------------------------------
$(document).ready(function () {
    $('#btnUpdateAnio').click(function () {
        $.ajax({
                url: 'updateAnio.php',
                type: 'POST',
                data: $('#formUpdateAnio').serialize(),
            })
            .done(function (res) {
                $('#respuestaUpdateAnio').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateAnio").on('click', function () {
    $("#btnUpdateAnio").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateAnio").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 1.4.3 Formulario Eliminar Años ------------------------------------------------------------
$('.btnBorrarAnio').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta Año? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteAnio.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudAnios.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// 1.5.1 Formulario Crear Colores----------------------------------------------------
$(document).ready(function () {
    $('#btnNuevaColor').click(function () {
        $.ajax({
                url: 'addNuevoColor.php',
                type: 'POST',
                data: $('#formNuevoColor').serialize(),
                beforeSend: function () {
                    $('.btnNuevoUsuario').val('Enviando...');
                }
            })
            .done(function (res) {
                $('#respuestaNuevoColor').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevaColor").on('click', function () {
    $("#btnNuevaColor").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevaColor").css('visibility', 'visible');
    }, 300000);
});


// 1.5.2 Formulario Modificar Colores----------------------------------------------------
$(document).ready(function () {
    $('#btnUpdateColor').click(function () {
        $.ajax({
                url: 'updateColor.php',
                type: 'POST',
                data: $('#formUpdateColor').serialize(),
                beforeSend: function () {
                    $('.btnNuevoUsuario').val('Enviando...');
                }
            })
            .done(function (res) {
                $('#respuestaUpdateColor').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateColor").on('click', function () {
    $("#btnUpdateColor").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateColor").css('visibility', 'visible');
    }, 300000);
});

// 1.5.3 Formulario Eliminar Color ------------------------------------------------------------
$('.btnBorrarColor').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta Color? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteColor.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudColores.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// 1.6.1 Formulario Crear Semanas----------------------------------------------------
$(document).ready(function () {
    $('#btnNuevaSemana').click(function () {
        $.ajax({
                url: 'addNuevoSemana.php',
                type: 'POST',
                data: $('#formNuevaSemana').serialize(),
            })
            .done(function (res) {
                $('#respuestaNuevaSemana').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevaSemana").on('click', function () {
    $("#btnNuevaSemana").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevaSemana").css('visibility', 'visible');
    }, 300000);
});

// 1.6.2  Formulario Eliminar Semanas----------------------------------------------------
$('.btnBorrarSemana').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta Cliente? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteSemana.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudSemanas.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});

// 1.7.1  Formulario Crear Agentes----------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoAgente').click(function () {
        $.ajax({
                url: 'addNuevoAgente.php',
                type: 'POST',
                data: $('#formNuevoAgente').serialize(),
            })
            .done(function (res) {
                $('#respuestaNuevoAgente').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoAgente").on('click', function () {
    $("#btnNuevoAgente").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoAgente").css('visibility', 'visible');
    }, 300000);
});

// 1.7.2  Formulario Eliminar Agentes----------------------------------------------------
$('.btnBorrarAgente').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta Agente? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteAgente.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudAgentes.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});

// 2.1.1 Formulario Registro Vehiculos ------------------------------------------------------------
$(document).ready(function () {
    $("#marca").change(function () {
        // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
        $("#marca option:selected").each(function () {
            id_marca = $(this).val();
            $.post("../components/comboBox.php", {
                id_marca: id_marca
            }, function (data) {
                $("#modelo").html(data);
            });
        });
    })
});
$(document).ready(function () {
    $('#btnNuevoVehiculo').click(function () {
        $.ajax({
                url: 'addNuevoVehiculo.php',
                type: 'POST',
                data: $('#formNuevoVehiculo').serialize(),

            })
            .done(function (res) {
                $('#respuestaNuevoVehiculo').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoVehiculo").on('click', function () {
    $("#btnNuevoVehiculo").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoVehiculo").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 2.1.2 Formulario Actaulizar Vehiculo ------------------------------------------------------------
$(document).ready(function () {
    $("#marca").change(function () {
        // $('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
        $("#marca option:selected").each(function () {
            id_marca = $(this).val();
            $.post("../components/comboBox.php", {
                id_marca: id_marca
            }, function (data) {
                $("#modelo").html(data);
            });
        });
    })
});
$(document).ready(function () {
    $('#btnUpdateVehiculo').click(function () {
        $.ajax({
                url: 'updateVehiculo.php',
                type: 'POST',
                data: $('#formUpdateVehiculo').serialize(),

            })
            .done(function (res) {
                $('#respuestaUpdateVehiculo').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateVehiculo").on('click', function () {
    $("#btnUpdateVehiculo").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateVehiculo").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/

// 2.2.1. Formulario Registro Cliente ------------------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoCliente').click(function () {
        $.ajax({
                url: 'addNuevoCliente.php',
                type: 'POST',
                data: $('#formNuevoCliente').serialize(),

            })
            .done(function (res) {
                $('#respuestaNuevoCliente').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoCliente").on('click', function () {
    $("#btnNuevoCliente").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoCliente").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 2.2.2 Formulario Modificar Cliente ------------------------------------------------------------
$(document).ready(function () {
    $('#btnUpdateCliente').click(function () {
        $.ajax({
                url: 'updateCliente.php',
                type: 'POST',
                data: $('#formUpdateCliente').serialize(),

            })
            .done(function (res) {
                $('#respuestaUpdateCliente').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateCliente").on('click', function () {
    $("#btnUpdateCliente").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateCliente").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 2.2.3 Formulario Eliminar Cliente ------------------------------------------------------------
$('.btnBorrarCliente').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta Cliente? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteCliente.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudClientes.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
/*
-
-
-
*/
// 2.3  Registro Proyectos cargar Modal de Clientes -----------------------------------------------
$(document).on("click", ".cargarCliente", function () {
    var idCliente = $(this).data('id_cliente');
    $.ajax({
        url: "../components/cargarCliente.php",
        type: "POST",
        cache: false,
        data: {
            idCliente: idCliente
        },
        success: function (data) {
            $("#cargarClienteTabla").html(data);
        },
    });
});

// 2.3  Registro Proyectos  cargar formulario de Vehiculos ----------------------------------------------
$(document).on("click", ".cargarVehiculo", function () {
    var idVehiculo = $(this).data('id_vehiculo');
    $.ajax({
        url: "../components/cargarVehiculo.php",
        type: "POST",
        cache: false,
        data: {
            idVehiculo: idVehiculo
        },
        success: function (data) {
            $("#cargarVehiculoTabla").html(data);
        },
    });
});

// 2.3  Registro Nuevo Proyecto --------------------------------------------------------------------
$(document).ready(function () {
    $('#btnNuevoProyecto').click(function () {
        $.ajax({
                url: 'addNuevoProyecto.php',
                type: 'POST',
                data: $('#formNuevoProyecto').serialize(),
            })
            .done(function (res) {
                $('#respuestaNuevoProyecto').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnNuevoProyecto").on('click', function () {
    $("#btnNuevoProyecto").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnNuevoProyecto").css('visibility', 'visible');
    }, 300000);
});
//
//
// 2.3  Update Cargar Modal Clientes -----------------------------------------------
$(document).on("click", ".UpdateCargarCliente", function () {
    var idCliente = $(this).data('id_cliente');
    $.ajax({
        url: "../update/updateCargarCliente.php",
        type: "POST",
        cache: false,
        data: {
            idCliente: idCliente
        },
        success: function (data) {
            $("#cargarUpdateClienteTabla").html(data);
        },
    });
});
//
// 2.3  Update Cargar Modal  Vehiculos -----------------------------------------------
$(document).on("click", ".updateCargarVehiculo", function () {
    var idVehiculo = $(this).data('id_vehiculo');
    $.ajax({
        url: "../update/updateCargarVehiculo.php",
        type: "POST",
        cache: false,
        data: {
            idVehiculo: idVehiculo
        },
        success: function (data) {
            $("#cargarUpdateVehiculoTabla").html(data);
        },
    });
});


// 2.3  Actualizar Formulario datos generales --------------------------------------------------------------------
$(document).ready(function () {
    $('#btnUpdateProyectoDatosGral').click(function () {
        $.ajax({
                url: 'updateProyectoDatosGral.php',
                type: 'POST',
                data: $('#formUpdateProyectoDatosGral').serialize(),
            })
            .done(function (res) {
                $('#respuestaUpdateProyectoDatosGral').html(res)
            })
    });
});
//Ocultar boton por 5 minutos para evitar el doble submit
$("#btnUpdateProyectoDatosGral").on('click', function () {
    $("#btnUpdateProyectoDatosGral").css('visibility', 'hidden');
    setTimeout(function () {
        $("#btnUpdateProyectoDatosGral").css('visibility', 'visible');
    }, 300000);
});
/*
-
-
-
*/
// 2.3.4 Eliminar Proyectos ------------------------------------------------------------
$('.btnBorrarProyecto').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta Proyecto? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteProyecto.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudProyectos.php";
                $('#respuestaProyectoBorrado').html(data);
            }
        });
    }
    return false;
});

/*
-
-
-
*/
// 2.4.2 Registro de Solicitud Alta Proyecto ------------------------------------------------------------

    // 2.3  Registro Proyectos cargar Modal de Proyectos -----------------------------------------------
    $(document).on("click", ".cargarProyecto", function() {
        var idProyecto = $(this).data('id_proyecto');
        $.ajax({
            url: "../components/cargarProyecto.php",
            type: "POST",
            cache: false,
            data: {
                idProyecto: idProyecto
            },
            success: function(data) {
                $("#cargarProyectoTabla").html(data);
            },
        });
    });
/*
-
-
-
*/
// 2.1.1 Formulario Registro Vehiculos ------------------------------------------------------------
/*
-
-
-
*/
// 2.1.1 Formulario Registro Vehiculos ------------------------------------------------------------
/*
-
-
-
*/











// // login validar usuario y contraseña
// jQuery(document).on('submit', '#form-login', function (event) {
//     event.preventDefault();

//     jQuery.ajax({
//             url: 'config/check-login.php',
//             type: 'POST',
//             dataType: 'json',
//             data: $(this).serialize(),
//             beforeSend: function () {
//                 $('.btnLogin').val('Validando...');
//             }
//         })
//         .done(function (respuesta) {
//             console.log(respuesta);
//             if (!respuesta.error) {
//                 if (respuesta.usuario == 1) {
//                     location.href = 'pages/admin/panelAdmin.php';
//                 } else if (respuesta.usuario == 0) {
//                     location.href = 'pages/user/panelUsuario.php'
//                 }
//             } else {
//                 $('.error').slideDown('slow'); //en caso de no haber coincidencia llamamos a la clase error
//                 setTimeout(function () {
//                     $('.error').slideUp('slow');
//                 }, 3000);
//                 $('.btnLogin').val('Reintentar')
//             }
//         })
//         .fail(function (resp) {
//             console.log(resp.responseText);
//         })
// .always(function() {
//     console.log("Correcto");
// });
// });

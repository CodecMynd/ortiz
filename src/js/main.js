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
function mostrarPassword() {
    var cambio = document.getElementById("password");
    if (cambio.type == "password") {
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    } else {
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
}
$(document).ready(function () {
    //CheckBox mostrar contraseña
    $('#ShowPassword').click(function () {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
});
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
    $('#city').lwMultiSelect();
    $('.action').change(function () {
        if ($(this).val() != '') {
            var action = $(this).attr("id");
            var query = $(this).val();
            var result = '';
            if (action == 'country') {
                result = 'state';
            } else {
                result = 'city';
            }
            $.ajax({
                url: 'fetch.php',
                method: "POST",
                data: {
                    action: action,
                    query: query
                },
                success: function (data) {
                    $('#' + result).html(data);
                    if (result == 'city') {
                        $('#city').data('plugin_lwMultiSelect').updateList();
                    }
                }
            })
        }
    });
    // Mandar registros a las tablas
    $('#insert_data').on('submit', function (event) {
        event.preventDefault();
        if ($('#id_usuario').val() == '') {
            alert("Error");
            return false;
        } else if ($('#country').val() == '') {
            alert("Por favor seleccione un Botón");
            return false;
        } else if ($('#state').val() == '') {
            alert("Por favor seleccione un Botón");
            return false;
        } else if ($('#city').val() == '') {
            alert("Por favor asigna un Permiso");
            return false;
        } else {
            $('#hidden_city').val($('#city').val());
            $('#action').attr('disabled', 'disabled');
            var form_data = $(this).serialize();
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: form_data,

                timeout: 3000,
                success: function (data) {
                    // $('#action').attr("disabled", "disabled");
                    if (data == 'done') {
                        $('#city').html('');
                        $('#city').data('plugin_lwMultiSelect').updateList();
                        $('#city').data('plugin_lwMultiSelect').removeAll();
                        $('#insert_data')[0].reset();
                        alert('Permiso(s) asignado(s) correctamente');
                    }
                }
            });
        }
    });
});
//  extraer datos de una tabla modulos y agregarlas en premisos
$('#extraerDatosPermisos').click(function () {
    $.ajax({
            url: '../adds/addPermisosUsuario.php',
            type: 'POST',
            data: $('#formExtraerPerm').serialize(),
            beforeSend: function () {
                $("#id_usuario").html("<div class='ui active inline loader myLoader'></div>")
            },
        })
        .done(function (res) {
            $('#respuestaUpdatePermisos').html(res)
        })
});
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
// 2.1.1 Formulario Eliminar Modelo ------------------------------------------------------------
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

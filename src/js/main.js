// // login validar usuario y contraseña
// jQuery(document).on('submit', '#form-login', function(event) {
//     event.preventDefault();

//     jQuery.ajax({
//             url: 'config/check-login.php',
//             type: 'POST',
//             dataType: 'json',
//             data: $(this).serialize(),
//             beforeSend: function() {
//                 $('.btnLogin').val('Validando...');
//             }
//         })
//         .done(function(respuesta) {
//             console.log(respuesta);
//             if (!respuesta.error) {
//                 if (respuesta.usuario == 1) {
//                     location.href = 'pages/admin/panelAdmin.php';
//                 } else if (respuesta.usuario == 0) {
//                     location.href = 'pages/user/panelUsuario.php'
//                 }
//             } else {
//                 $('.error').slideDown('slow'); //en caso de no haber coincidencia llamamos a la clase error
//                 setTimeout(function() {
//                     $('.error').slideUp('slow');
//                 }, 3000);
//                 $('.btnLogin').val('Reintentar')
//             }
//         })
//         .fail(function(resp) {
//             console.log(resp.responseText);
//         })
//         // .always(function() {
//         //     console.log("Correcto");
//         // });
// });

// boton ir-arriba
$(document).ready(function() {

    $('.ir-arriba').click(function() {
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);
        }
    });

});


<?php
require '../components/head-main.php';
conectar();

$id_cliente = $_POST['idCliente'];

$query = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();


$nombres = $row['nombres'];
$aPaterno = $row['aPaternoCliente'];
$aMaterno = $row['aMaternoCliente'];
$nomCompClie = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
$calle = $row['calle'];
$colonia = $row['colonia'];
$ciudad = $row['ciudad'];
$estado = $row['estado'];
$tel1 = $row['tel1'];
$tel2 = $row['tel2'];
$cel = $row['cel'];
$email = $row['email'];
$observacion = $row['observacion'];

if ($respuesta->num_rows  > 0) {
    $output = '';
    $output .= "

<div class='card-body'>
<div class='row justify-content-center'>
    <input name='id_cliente' id='id_cliente' type='hidden' value='{$id_cliente}'>
    <div class='col-md-4 col-sm-12  form-group'>
        <div class='input-group form-floating '>
            <div class='input-group-prepend'>
                <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
            </div>
            <input name='nombres' id='nombres' type='text' class='form-control' value='{$nomCompClie}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Nombre Cliente</label>
        </div>
    </div>
    <div class='col-md-4 col-sm-12 form-group'>
        <div class='input-group form-floating'>
            <div class='input-group-prepend'>
                <span class='input-group-text'><i class='fa-solid fa-road'></i></span>
            </div>
            <input name='calle' id='calle' type='text' class='form-control' value='{$calle}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Calle y Número Ext. Int. </label>
        </div>
    </div>
    <div class='col-md-4 col-sm-12 form-group'>
        <div class='input-group form-floating'>
            <div class='input-group-prepend'>
                <span class='input-group-text'><i class='fa-solid fa-signs-post'></i></span>
            </div>
            <input type='text' id='colonia' name='colonia' class='form-control' value='{$colonia}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Colonia</label>
        </div>
    </div>
    <div class='col-md-4 col-sm-12 form-group'>
        <div class='input-group form-floating ' id='ciudad'>
            <div class='input-group-prepend'>
                <span class='input-group-text'><i class='fa-solid fa-city'></i></span>
            </div>
            <input name='ciudad' id='ciudad' type='text' class='form-control' value='{$ciudad}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Ciudad </label>
        </div>
    </div>
    <div class='col-md-3 col-sm-12 form-group'>
        <div class='input-group form-floating ' id='estado'>
            <div class='input-group-prepend'>
                <span class='input-group-text'><i class='fa-solid fa-location-dot'></i></span>
            </div>
            <input name='estado' id='estado' type='text' class='form-control' value='{$estado}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Estado </label>
        </div>
    </div>
    <div class='col-md-3 col-sm-12 form-group'>
        <div class='input-group form-floating '>
            <div class='input-group-prepend'>
                <span class='input-group-text'><i class='fa-solid fa-phone'></i></span>
            </div>
            <input name='tel1' id='tel1' type='text' class='form-control' value='{$tel1}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Teléfono 1 </label>
        </div>
    </div>
    <div class='col-md-2 col-sm-12 form-group'>
        <div class='input-group form-floating '>

            <input name='tel2' id='tel2' type='text' class='form-control' value='{$tel2}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Teléfono 2 </label>
        </div>
    </div>
    <div class='col-md-4'>
        <div class='row'>
            <div class='col-md-12 col-sm-12 form-group'>
                <div class='input-group form-floating '>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'><i class='fa-solid fa-mobile'></i></span>
                    </div>
                    <input name='cel' id='cel' type='text' class='form-control' value='{$cel}' disabled readonly>
                    <label for='floatingInput' class='pl-5'>Celular </label>
                </div>
            </div>
            <div class='col-md-12 col-sm-12 '>
                <div class='input-group form-floating form-group'>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'><i class='fa-solid fa-at'></i></span>
                    </div>
                    <input type='text' id='email' name='email' class='form-control' value='{$email}' disabled readonly>
                    <label for='floatingInput' class='pl-5'>Email <small> *Ej. prueba@prueba.com</small> </label>
                </div>
            </div>
        </div>
    </div>
    <div class='col-md-8 col-sm-12 my-1'>
        <div class='form-group-input'>
            <span data-toggle='tooltip' title='max. 200 caracteres'>
                <div class='input-group'>
                    <div class='input-group-prepend'>
                        <span class='input-group-text'><i class='fas fa-comments'></i></span>
                    </div>
                    <textarea name='observacion' id='observacion' class='form-control' rows='4' disabled readonly>{$observacion}</textarea>
                </div>
            </span>
        </div>
    </div>
</div>

</div>
</div>
<div class='row'>
    <div class='col-md-2 col-sm-12 align-self-center'>
        <buttom type='button' id='btnUpdateCargarCliente' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Guardar'><i class='fas fa-pen'></i> Guardar</buttom>
    </div>
    <div class='col-md-2 col-sm-12 align-self-center'>
    <a href='javascript:location.reload()' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Actualizar página'><i class='fa-solid fa-arrows-rotate'></i></a>
    </div>
    <div id='respuestaUpdateCargarCliente'></div>
</div>

";
    echo $output;
} else {
    echo "<h5>Ningún registro fue encontrado</h5>";
}

?>
<script>
    //Una ves mostrados loe enviamos para actualizar
    $(document).ready(function() {
        $('#btnUpdateCargarCliente').click(function() {
            $.ajax({
                    url: 'updateCargarClienteActualizado.php',
                    type: 'POST',
                    data: $('#formUpdateCargarCliente').serialize(),
                })
                .done(function(res) {
                    $('#respuestaUpdateCargarCliente').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdateCargarCliente").on('click', function() {
        $("#btnUpdateCargarCliente").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateCargarCliente").css('visibility', 'visible');
        }, 180000);
    });
</script>
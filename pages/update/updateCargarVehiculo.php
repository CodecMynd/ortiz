<?php
require '../components/head-main.php';
conectar();


$id_vehiculo = $_POST['idVehiculo'];


$query = "SELECT M.marca, Mo.modelo, A.anio, V.placa, C.color, V.id_vehiculo, V.id_marca, V.id_anio, V.id_color
FROM vehiculos V 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores C on V.id_color = C.id_color WHERE id_vehiculo = $id_vehiculo";

$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();

if ($respuesta->num_rows  > 0) {
    $output = '';
    $output .= "
<div class='card-body'>
<div class='row justify-content-center'>
    <input name='id_vehiculo' id='id_vehiculo' type='hidden' value='{$id_vehiculo}'>
        <div class='col-md-4 col-sm-12  form-group'>
            <div class='input-group form-floating mb-1'>
                <div class='input-group-prepend'>
                    <span class='input-group-text'><i class='fa-solid fa-car'></i></span>
                </div>
                <input name='marca' id='marca' type='text' class='form-control' value='{$row['marca']}' disabled readonly>
                <label for='floatingInput' class='pl-5'>Marca</label>
            </div>
        </div>
        <div class='col-md-4 col-sm-12  form-group'>
            <div class='input-group form-floating'>
                <div class='input-group-prepend'>
                    <span class='input-group-text'><i class='fa-solid fa-car-side'></i></span>
                </div>
                <input name='modelo' id='modelo' type='text' class='form-control' value='{$row['modelo']}' disabled readonly>
                <label for='floatingInput' class='pl-5'>Modelo</label>
            </div>
        </div>
        <div class='col-md-2 col-sm-12  form-group'>
            <div class='input-group form-floating'>
                <div class='input-group-prepend'>
                    <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                </div>
                <input name='anio' id='anio' type='text' class='form-control' value='{$row['anio']}' disabled readonly>
                <label for='floatingInput' class='pl-5'>Año</label>
            </div>
        </div>
        <div class='col-md-3 col-sm-12  form-group'>
            <div class='input-group form-floating'>
                <div class='input-group-prepend'>
                    <span class='input-group-text'><i class='fa-solid fa-hashtag'></i></span>
                </div>
                <input autofocus name='placa' id='placa' type='text' class='form-control' value='{$row['placa']}' disabled readonly>
                <label for='floatingInput' class='pl-5'>Placas</label>
            </div>
        </div>
        <div class='col-md-3 col-sm-12  form-group'>
            <div class='input-group form-floating'>
                <div class='input-group-prepend'>
                    <span class='input-group-text'><i class='fa-solid fa-brush'></i></span>
                </div>
            <input autofocus name='color' id='color' type='text' class='form-control' value='{$row['color']}' disabled readonly>
            <label for='floatingInput' class='pl-5'>Color</label>
        </div>
    </div>
    </div>
</div>
</div>
</div>
<div class='row'>
    <div class='col-md-2 col-sm-12 align-self-center'>
        <buttom type='button' id='btnUpdateCargarVehiculo' class='btn btn-secondary btn-block' data-toggle='tooltip' data-placement='bottom' title='Guardar'><i class='fas fa-pen'></i> Guardar</buttom>
    </div>
    <div class='col-md-2 col-sm-12 align-self-center'>
    <a href='javascript:location.reload()' class='btn btn-secondary btn-inline' data-toggle='tooltip' data-placement='bottom' title='Actualizar página'><i class='fa-solid fa-arrows-rotate'></i></a>
    </div>
    <div id='respuestaUpdateCargarVehiculo'></div>
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
        $('#btnUpdateCargarVehiculo').click(function() {
            $.ajax({
                    url: 'updateCargarVehiculoActualizado.php',
                    type: 'POST',
                    data: $('#formUpdateCargarVehiculo').serialize(),
                })
                .done(function(res) {
                    $('#respuestaUpdateCargarVehiculo').html(res)
                })
        });
    });
    //Ocultar boton por 5 minutos para evitar el doble submit
    $("#btnUpdateCargarVehiculo").on('click', function() {
        $("#btnUpdateCargarVehiculo").css('visibility', 'hidden');
        setTimeout(function() {
            $("#btnUpdateCargarVehiculo").css('visibility', 'visible');
        }, 180000);
    });
</script>
<?php
$queryR = "SELECT P.fecha_creacion, U.nombres, U.aPaterno, U.aMaterno 
FROM proyectos P 
INNER JOIN usuarios U ON P.id_capC = U.id_usuario 
WHERE P.id_proyecto = $idP ";
$respuestaR = mysqli_query($conexion, $queryR);
$rowR  = $respuestaR->fetch_assoc();
$capturista = $rowR['nombres'] . ' ' . $rowR['aPaterno'] . ' ' . $rowR['aMaterno'];

$queryV = "SELECT P.id_proyecto, C.capValVenta_fecha, U.nombres, U.aPaterno, U.aMaterno
FROM proyectos P 
INNER JOIN capvalorventas C ON P.id_proyecto = C.id_proyecto
INNER JOIN usuarios U ON C.capValVenta = U.id_usuario
WHERE P.id_proyecto = $idP ";
$respuestaV = mysqli_query($conexion, $queryV);
$rowV  = $respuestaV->fetch_assoc();

if (isset($rowV['nombres'])) {
    $N = $rowV['nombres'];
}
if (isset($rowV['aPaterno'])) {
    $P = $rowV['aPaterno'];
}
if (isset($rowV['aMaterno'])) {
    $M = $rowV['aMaterno'];
}
if (isset($rowV['capValVenta_fecha'])) {
    $F = $rowV['capValVenta_fecha'];
}

?>
<div class="modal fade verGralProy<?php echo $idP ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registro: Número de Proyecto <strong><?php echo $row['nProyecto'] ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: Número de Proyecto <?php echo $idP?></strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='row justify-content-center'>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input type='text' class='form-control' value='<?php echo $capturista ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Registro de Proyecto</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $rowR['fecha_creacion'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Registro de Proyecto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura de Valor Venta Inicial: <?php echo $row['valorVenta']; ?></strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='row justify-content-center'>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input type='text' class='form-control' value='<?php if (!isset($N) AND !isset($P) AND !isset($M)) {
                                                                                                            echo 'Sin Captura Valor Venta Inicial';
                                                                                                        } else {
                                                                                                            echo $N.' '.$P.' '.$M;
                                                                                                        }?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Registro de Proyecto</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php
                                                                                                        if (!isset($F)) {
                                                                                                            echo 'Sin Captura Valor Venta Inicial';
                                                                                                        } else {
                                                                                                            echo $F;
                                                                                                        } ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Registro de Proyecto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="text-dark">
                    <h5>** Texto solo de consulta, no se puede modificar!</h5>
                </div>
            </div>
        </div>
    </div>
</div>
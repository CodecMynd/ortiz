<?php
require '../components/head-main.php';
?>
<div class="modal fade" id="modal-verListaCapValVenInicial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php

                $id_proyecto = $_REQUEST['id_proyecto'];
                $query = "SELECT P.id_proyecto, P.nProyecto, P.valorVenta, C.capValVenta_fecha, U.nombres, U.aPaterno, U.aMaterno
                FROM proyectos P 
                LEFT JOIN capvalorventas C ON P.id_proyecto = C.id_proyecto
                LEFT JOIN usuarios U ON C.capValVenta = U.id_usuario
                WHERE P.id_proyecto =  $id_proyecto ";
                $respuesta = mysqli_query($conexion, $query);
                $row  = $respuesta->fetch_assoc();
                $capturista = $row['nombres'].' '.$row['aPaterno'].' '.$row['aMaterno'];
                $fecha = $row['capValVenta_fecha'];

                ?>
                <h5 class="modal-title" id="exampleModalLongTitle">Captura de Valor Venta Inicial: Número de Proyecto <strong><?php echo $row['nProyecto'] ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <!-- <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura: Número de Proyecto</strong></h2>
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
                                        <input type='text' class='form-control' value='' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Registro de Proyecto</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Registro de Proyecto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Usuario, Fecha y Hora de Captura de Valor Venta Inicial: </strong></h2>
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
                                        <label for='floatingInput' class='pl-5'>Capturista: Valor Venta Inicial</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $fecha?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Valor Venta Inicial</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='row justify-content-center'>
                                <div class='col-md-5 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class="fa-solid fa-money-bill-transfer"></i></span>
                                        </div>
                                        <input type='text' class='form-control' value='<?php echo $row['valorVenta'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Cantidad Actual</label>
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
<script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.5.3/dist/clipboard.min.js"></script>
<div class="modal fade verGralComCliente<?php echo $row['id_proyecto'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registro: Número de Proyecto <strong><?php echo $nP ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Link de Comprobación de Placa </strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($cC == 1) {
                            $query = "SELECT P.id_proyecto, C.linkComCliente, C.fecha_creacion,
                            U.nombres, U.aPaterno, U.aMaterno
                            FROM proyectos P 
                            INNER JOIN comclientes C ON P.id_proyecto = C.id_proyecto
                            INNER JOIN usuarios U ON C.id_capC = U.id_usuario
                            WHERE P.id_proyecto = $idP ";
                            $respuesta = mysqli_query($conexion, $query);
                            $row = $respuesta->fetch_assoc();

                        ?>
                            <div class='row justify-content-center'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label for='' class='pl-5'>*Link de Comprobación de INE Cliente</label>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <button type="button" class="btn btn-secondary" data-clipboard-target="#link<?php echo $nP; ?>">Copiar Link <i class='fa-solid fa-photo-film'></i></button>
                                            </div>
                                            <input name='link' id='link<?php echo $nP ?>' type='text' class='form-control' value="<?php echo $row['linkComCliente'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input type='text' class='form-control' value='<?php echo $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno']; ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Registro Comprobación de INE Cliente</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['fecha_creacion'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Registro Comprobación de INE Cliente</label>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-12">
                    <hr>
                    <h5 class="mt-3">Registro Supervisión de Comprobación de Placa: Número de Proyecto <strong><?php echo $nP ?></strong></h5>
                    <hr>
                </div>
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Supervisión Comprobación de INE Cliente</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        if ($cSC == 1) {
                            $query1 = "SELECT P.id_proyecto, C.textSupervision, C.fecha_registro,
                            U.nombres, U.aPaterno, U.aMaterno
                            FROM proyectos P 
                            INNER JOIN comsupervision C ON P.id_proyecto = C.id_proyecto
                            INNER JOIN usuarios U ON C.id_capC = U.id_usuario
                            WHERE P.id_proyecto = $idP AND C.tipoComprobacion = 'cliente' ";
                            $respuesta1 = mysqli_query($conexion, $query1);
                            $row1 = $respuesta1->fetch_assoc();


                        ?>
                            <div class='row justify-content-center'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                        <label class='ml-5 mb-2'>Supervisión de Comprobación de INE Cliente</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                                </div>
                                                <textarea name='inspecCalidad' id='inspecCalidad' class='form-control' rows='4' placeholder='Agrega Registro Supervisión de Comprobación de Placa' readonly><?php echo $row1['textSupervision']; ?></textarea>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input type='text' class='form-control' value='<?php echo $row1['nombres'] . ' ' . $row1['aPaterno'] . ' ' . $row1['aMaterno']; ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Registro Supervisión</label>
                                    </div>
                                </div>
                                <div class='col-md-5 col-sm-12 my-5 form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row1['fecha_registro'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Registro Supervisión</label>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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
<script>
    // copiar link al portapapeles
    var clipboard = new Clipboard('.btn');
</script>
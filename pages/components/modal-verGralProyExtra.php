<?php
require '../components/queryDomPdf.php';
?>
<!-- Modal  style="max-width: 1250px!important;"  -->
<div class="modal fade" id="modal-verGralProyExtra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">5.1.5 Ver Generales Proyecto Extra</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <?php
            $id_proyecto = $_REQUEST['id_proyecto'];
            $id_proyExtra = $_REQUEST['id_proyExtra'];
            $query = "SELECT P.id_proyecto, P.nProyecto, 
            PE.descVentaProyExtra, PE.linkAutorWhats, PE.fecha_creacion, PE.valorProyExtra,
            S.semana,
            U.nombres, U.aPaterno, U.aMaterno
            FROM proyectos P
            INNER JOIN proyextras PE ON P.id_proyecto = PE.id_proyecto
            INNER JOIN semanasolalta S ON PE.id_semSolAlta = S.id_semSolAlta
            INNER JOIN usuarios U ON PE.id_capC = U.id_usuario
            WHERE P.id_proyecto = $id_proyecto AND PE.id_proyExtra = $id_proyExtra";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            ?>
            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Proyecto Extra</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='ml-5 mb-2'>Descripción de Venta Proyecto Extra</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea class='form-control' rows='4' placeholder='Agrega Registro Supervisión de Comprobación de Asesor' readonly><?php echo (empty($row['descVentaProyExtra'])) ? 'Sin Registro' : $row['descVentaProyExtra'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='ml-5 mb-2'>Link Autorización Whatsapp</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class="fa-brands fa-whatsapp"></i></span>
                                            </div>
                                            <textarea class='form-control' rows='1' placeholder='Agrega Registro Supervisión de Comprobación de Asesor' readonly><?php echo (empty($row['linkAutorWhats'])) ? 'Sin Registro' : $row['linkAutorWhats'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-4 col-sm-12 my-1'>
                                <div class='input-group form-floating mb-3'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text mt-2'>
                                            <i class='fa-solid fa-money-bill-1-wave'></i>
                                        </span>
                                    </div>
                                    <input name='valorProyExtra' id='currency1' type='text' class='form-control' placeholder='Ingresa Valor Venta Alta' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Ingresa Valor Venta Alta' value="<?php echo $row['valorProyExtra'] ?>" readonly>
                                    <label for='floatingInput' class='pl-5'>*Valor Proyecto Extra</label>
                                </div>
                            </div>
                            <div class='col-md-4 col-sm-12 my-1'>
                                <div class='input-group form-floating mb-3'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text mt-2'>
                                            <i class='fa-solid fa-calendar'></i>
                                        </span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' placeholder='Semana de Captura de Proyecto Extra' required maxlength='12' data-toggle='tooltip' data-placement='bottom' title='Semana de Captura de Proyecto Extra' value="<?php echo $row['semana'] ?>" readonly>
                                    <label for='floatingInput' class='pl-5'>Semana Captura Proyecto Extra</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Proyecto Extra</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha Registro: Proyecto Extra</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                $query2 = "SELECT PE.id_proyecto, PE.nProyecto,
                S.textSupervision, S.fecha_registro,
                U.nombres, U.aPaterno, U.aMaterno
                FROM proyextras PE 
                LEFT JOIN comsupervisionproyextra S ON PE.id_proyExtra = S.id_proyExtra
                LEFT JOIN usuarios U ON  S.id_capC = U.id_usuario
                WHERE PE.id_proyExtra = $id_proyExtra";
                $respuesta2 = mysqli_query($conexion, $query2);
                $row2 = $respuesta2->fetch_assoc();
                ?>
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Supervisión Proyecto Extra</strong></h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool text-dark " data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col 12">
                                <br>
                            </div>
                            <div class='col-md-12 col-sm-12 my-1'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='ml-5 mb-2'>Link Supervisión de Proyecto Extra</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea class='form-control' rows='4' placeholder='Agrega Registro Supervisión de Comprobación de Asesor' readonly><?php echo (empty($row2['textSupervision'])) ? 'Sin Registro' : $row2['textSupervision'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo $row2['nombres'] . ' ' . $row2['aPaterno'] . ' ' . $row2['aMaterno'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Supervisión Proyecto Extra</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo (empty($row2['fecha_registro'])) ? 'Sin Registro' : $row2['fecha_registro'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha Registro: Supervisión Proyecto Extra</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer text-left">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <?php
            desconectar();
            ?>
        </div>
    </div>
</div>
<script src="../ajax/tableVarios.js"></script>
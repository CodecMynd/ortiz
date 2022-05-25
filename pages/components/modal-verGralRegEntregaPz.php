<?php
require '../components/queryDomPdf.php';
?>
<!-- Modal  style="max-width: 1250px!important;"  -->
<div class="modal fade" id="modal-verGralRegEntregaPz" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">4.3.5 Ver Generales Registro Entrega de Pieza</small></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <?php
            $id_entregaPz = $_REQUEST['id_entregaPz'];
            $query = "SELECT E.nProyecto, E.comEntregaPz, E.superEntregaPz, E.folioEntregaPz, E.fecha_regCom, E.fecha_regSup,
            UC.nombres AS nomC, UC.aPaterno AS patC, UC.aMaterno AS matC,
            US.nombres AS nomS, US.aPaterno AS patS, US.aMaterno AS matS,
            S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo,
            R.linkRecPzsDanadas
            FROM entregapzs E
            LEFT JOIN usuarios UC ON E.id_capCcom = UC.id_usuario
            LEFT JOIN usuarios US ON E.id_capCsup = US.id_usuario
            INNER JOIN solpzsdanadas S ON E.id_solPzsDanadas = S.id_solPzsDanadas
            INNER JOIN recpzsdanadas R ON S.id_recPzsDanadas = R.id_recPzsDanadas
            WHERE E.id_entregaPz = $id_entregaPz";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();
            ?>
            <div class="card-body">
                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Solicitud de Pieza</strong></h2>
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
                                    <label class='ml-5 mb-2'>Link de Desarmado</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-link'></i></span>
                                            </div>
                                            <textarea class='form-control' rows='1' readonly><?php echo $row['linkRecPzsDanadas'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-4 col-sm-12 my-1'>
                                <div class='input-group form-floating mb-3'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-hashtag"></i>
                                        </span>
                                    </div>
                                    <input type='text' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Número de Folio' value="<?php echo $row['folio_solicitud'] ?>" readonly>
                                    <label for='floatingInput' class='pl-5'>Número de Folio de Solicitud de Pieza</label>
                                </div>
                            </div>
                            <div class='col-md-3 col-sm-12 my-2'>
                                <div class='input-group form-floating mb-3'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-hashtag"></i>
                                        </span>
                                    </div>
                                    <input type='text' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Cantidad' value="<?php echo $row['cantidad'] ?>" readonly>
                                    <label for='floatingInput' class='pl-5'>Cantidad</label>
                                </div>
                            </div>
                            <div class='col-md-12 col-sm-12 my-2'>
                                <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                    <label class='ml-5 mb-2'>Descripción de lo Solicitudo</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                            </div>
                                            <textarea class='form-control' rows='2' readonly><?php echo $row['descripcion'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- <hr>
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
                        </div> -->
                    </div>
                </div>

                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong>Registro Entrega de Piezas</strong></h2>
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
                                    <label class='ml-5 mb-2'>Link Registro Entrega de Piezas</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea class='form-control' rows='4'  readonly><?php echo (empty($row['comEntregaPz'])) ? 'Sin Registro' : $row['comEntregaPz'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo $row['nomC'] . ' ' . $row['patC'] . ' ' . $row['matC'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Entrega de Piezas</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo (empty($row['fecha_regCom'])) ? 'Sin Registro' : $row['fecha_regCom'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha Registro: Entrega de Piezas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-secondary card-outline collapsed-card">
                    <div class="card-header">
                        <h2 class="card-title"><strong> Supervisión de Registro Entrega de Piezas</strong></h2>
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
                                    <label class='ml-5 mb-2'>Supervisión Link Registro Entrega de Piezas</label>
                                    <span data-toggle='tooltip' title='max. 200 caracteres'>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                            </div>
                                            <textarea class='form-control' rows='4'  readonly><?php echo (empty($row['superEntregaPz'])) ? 'Sin Registro' : $row['superEntregaPz'] ?></textarea>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                    </div>
                                    <input type='text' class='form-control' value='<?php echo $row['nomS'] . ' ' . $row['patS'] . ' ' . $row['matS'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Capturista: Supervisión Entrega de Piezas</label>
                                </div>
                            </div>
                            <div class='col-md-5 col-sm-12 my-5 form-group'>
                                <div class='input-group form-floating'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                    </div>
                                    <input name='' id='' type='text' class='form-control' value='<?php echo (empty($row['fecha_regSup'])) ? 'Sin Registro' : $row['fecha_regSup'] ?>' disabled readonly>
                                    <label for='floatingInput' class='pl-5'>Fecha Registro: Supervisión Entrega de Piezas</label>
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
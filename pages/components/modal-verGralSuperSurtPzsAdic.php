<?php
require '../components/queryDomPdf.php';
require '../components/fechaEs.php';
?>
<div class="modal fade" id="modal-verGralSuperSurtPzsAdic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- consulta sql -->
            <?php
            $id_proyecto = $_REQUEST['id_proyecto'];
            $id_pzsFirmadasRecAdic = $_REQUEST['id_pzsFirmadasRecAdic'];
            $id_superSurtPzsAdic = $_REQUEST['id_superSurtPzsAdic'];
            $query = "SELECT P.id_proyecto, P.nProyecto,
            AU.folio_autorizPzsAdic,
            A.comenProceSurtPzAdic, A.fecha_creacion, A.folioProceSurtPzAdic,
            U.nombres, U.aPaterno, U.aMaterno,
            PE.comenPzsEntregadasAdic, PE.folioPzsSurtidaAdic, PE.fecha_creacion AS fechaPzsEntregada,
            UP.nombres AS nomP, UP.aPaterno AS patP, UP.aMaterno AS matP,
            AU.folio_autorizPzsAdic,
            PF.comenPzsFirmadasRecAdic, PF.linkDocumento, PF.fecha_creacion AS fechaFirmada, 
            UPF.nombres AS nomUPF, UPF.aPaterno AS patUPF, UPF.aMaterno AS matUPF,
            S.comenSuperSurtPzsAdic, S.cronoSuperSurtPzsAdic, S.fecha_creacion AS fecha_super,
            US.nombres AS nomS, US.aPaterno AS patS, US.aMaterno AS matS
            FROM proyectos P 
            INNER JOIN autorizadospzsadic AU ON P.id_proyecto = AU.id_proyecto
            INNER JOIN autoprocesurtpzsadic A ON AU.id_autorizadoPzsAdic = A.id_autorizadoPzsAdic
            INNER JOIN pzstregadasadic PE ON A.id_AutoProceSurtPzAdic = PE.id_AutoProceSurtPzAdic
            INNER JOIN pzsfirmadasrecadic PF ON PE.id_pzsEntregadasAdic = PF.id_pzsEntregadasAdic
            INNER JOIN supersurtpzsadic S ON PF.id_pzsFirmadasRecAdic = S.id_pzsFirmadasRecAdic
            INNER JOIN usuarios U ON A.id_capC = U.id_usuario
            INNER JOIN usuarios UP ON PE.id_capC = UP.id_usuario
            INNER JOIN usuarios UPF ON PF.id_capC = UPF.id_usuario
            INNER JOIN usuarios US ON S.id_capC = US.id_usuario
            WHERE PE.id_proyecto = $id_proyecto AND PF.id_pzsFirmadasRecAdic = $id_pzsFirmadasRecAdic AND S.id_superSurtPzsAdic = $id_superSurtPzsAdic  AND AU.borrado = 0 AND A.borrado = 0 AND PE.borrado = 0 AND PF.borrado = 0 AND S.borrado = 0;";
            $resultado = mysqli_query($conexion, $query);
            $row = $resultado->fetch_assoc();
            ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">4.2.7.2 Ver Generales Supervisión de Surtido de Piezas: Piezas Adicionales del Número de Proyecto: <strong><?php echo $row['nProyecto'] ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class='col-md-12 col-sm-12 my-1'>
                    <div class="card card-secondary card-outline collapsed-card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Generales: Supervisión de Surtido de Piezas: Piezas Adicionales</strong></h2>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class='row justify-content-center'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label class='ml-5 mb-2'>*Comentario Supervisión de Surtido de Piezas</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                </div>
                                                <textarea class='form-control' rows='4' placeholder='Comentario Agregado' maxlength='200' required readonly><?php echo $row['comenSuperSurtPzsAdic']; ?></textarea>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $row['nomS'] . ' ' . $row['patS'] . ' ' . $row['matS'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Supervisión de Surtido de Piezas</label>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['fecha_super'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Supervisión de Surtido de Piezas</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-secondary card-outline collapsed-card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Generales: Piezas Firmadas de Recibido: Piezas Adicionales</strong></h2>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class='row justify-content-center'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label class='ml-5 mb-2'>*Comentario Piezas Firmadas de Recibido</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                </div>
                                                <textarea class='form-control' rows='4' placeholder='Comentario Agregado' maxlength='200' required readonly><?php echo $row['comenPzsFirmadasRecAdic']; ?></textarea>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label class='ml-5 mb-2'>*Link del Documento PDF</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class="fa-solid fa-link"></i></span>
                                                </div>
                                                <textarea class='form-control' rows='4' placeholder='Comentario Agregado' maxlength='200' required readonly><?php echo $row['linkDocumento']; ?></textarea>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $row['nomUPF'] . ' ' . $row['patUPF'] . ' ' . $row['matUPF'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Piezas Firmadas de Recibido </label>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['fechaFirmada'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Piezas Firmadas de Recibido</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-secondary card-outline collapsed-card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Generales: Piezas Entregadas : Piezas Adicionales</strong></h2>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class='row justify-content-center'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label class='ml-5 mb-2'>*Comentario Piezas Entregadas</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                </div>
                                                <textarea class='form-control' rows='4' placeholder='Comentario Agregado' maxlength='200' required readonly><?php echo $row['comenPzsEntregadasAdic']; ?></textarea>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $row['nomP'] . ' ' . $row['patP'] . ' ' . $row['matP'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Piezas Entregadas </label>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['fechaPzsEntregada'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Piezas Entregadas</label>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['folioPzsSurtidaAdic'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Número de Folio Surtido de Pieza</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-secondary card-outline collapsed-card">
                        <div class="card-header">
                            <h2 class="card-title"><strong>Generales Proceso de Surtido de Piezas: Piezas Adicionales</strong></h2>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class='row justify-content-center'>
                                <div class='col-md-12 col-sm-12 my-1'>
                                    <div class='form-group-input'>
                                        <label class='ml-5 mb-2'>*Comentarios Proceso de Surtido de Pieza</label>
                                        <span data-toggle='tooltip' title='max. 300 caracteres'>
                                            <div class='input-group'>
                                                <div class='input-group-prepend'>
                                                    <span class='input-group-text'><i class='fa-solid fa-comment'></i></span>
                                                </div>
                                                <textarea class='form-control' rows='4' placeholder='Comentario Agregado' maxlength='200' required readonly><?php echo $row['comenProceSurtPzAdic']; ?></textarea>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-user'></i></span>
                                        </div>
                                        <input name='' id='modelo' type='text' class='form-control' value='<?php echo $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Proceso de Surtido de Pieza Adicional </label>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['fecha_creacion'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Fecha: Proceso de Surtido de Pieza Adicional</label>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['folioProceSurtPzAdic'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Número de Folio Proceso de Surtido de Piezas Adicional</label>
                                    </div>
                                </div>
                                <div class='col-md-6 col-sm-12  form-group'>
                                    <div class='input-group form-floating'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-calendar-check'></i></span>
                                        </div>
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['folio_autorizPzsAdic'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Número de Folio Autorizado Pieza Adicional</label>
                                    </div>
                                </div>
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
<?php
require '../components/queryDomPdf.php';
require '../components/fechaEs.php';
?>
<div class="modal fade" id="modal-verGralProceSurtPzsAdic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- consulta sql -->
            <?php
            $id_proyecto = $_REQUEST['id_proyecto'];
            $query = "SELECT P.id_proyecto, P.nProyecto,
            A.comenProceSurtPzAdic, A.fecha_creacion,
            U.nombres, U.aPaterno, U.aMaterno,
            AU.folio_autorizPzsAdic
            FROM proyectos P 
            INNER JOIN autoprocesurtpzsadic A ON P.id_proyecto = A.id_proyecto
            INNER JOIN usuarios U ON A.id_capC = U.id_usuario
            INNER JOIN autorizadospzsadic AU ON A.id_proyecto = AU.id_proyecto
            WHERE P.id_proyecto = $id_proyecto AND A.borrado = 0 AND AU.borrado = 0";
            $resultado = mysqli_query($conexion, $query);
            $row = $resultado->fetch_assoc();
            ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">4.2.4.3 Ver Generales Proceso de Surtido de Piezas: Piezas Adicionales del Número de Proyecto: <strong><?php echo $row['nProyecto'] ?></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <div class='col-md-12 col-sm-12 my-1'>
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
                                        <label class='ml-5 mb-2'>*Comentarios Proceso de Surtido de Piezas</label>
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
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Capturista: Proceso de Surtido de Pieza Adicional</label>
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
                                        <input name='' id='' type='text' class='form-control' value='<?php echo $row['folio_autorizPzsAdic'] ?>' disabled readonly>
                                        <label for='floatingInput' class='pl-5'>Número de Folio Autorización Pieza Adicional</label>
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
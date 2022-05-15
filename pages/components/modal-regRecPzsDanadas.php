<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regRecPzsDanadas" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Link de Desarmado de Número de Proyecto: <strong><span id="tituloModal1"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRecPzsDanadas">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto1" id="id_proyecto1" value="">
                        <input type="hidden" name="nProyecto1" id="nProyecto1" value="">
                        <div class='col-md-10 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input name='linkRecPzsDanadas' id='linkRecPzsDanadas' type='text' class='form-control' placeholder='Registrar Link de Desarmado' data-toggle='tooltip' data-placement='bottom' title='Registrar Link de Desarmado'>
                                <label for='floatingInput' class='pl-5'>*Link de Desarmado</label>
                            </div>
                        </div>
                        <?php
                        $query = "SELECT id_tecArmador, tecArmador FROM tecarmadores WHERE borrado = 0 ORDER BY tecArmador DESC";
                        $resultado = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
                        ?>
                        <div class='col-md-3 col-sm-12 mb-2 form-group'>
                            <div class='input-group'>
                                <label for='color' class='pl-5 parpadea'>Técnico Armador</label>
                                <select name='id_tecArmador' id='id_tecArmador' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona una Semana de la lista' style='width: 100%;' required>
                                    <option selected disabled>Selecciona</option>";
                                    <?php
                                    while ($row = $resultado->fetch_assoc()) {
                                        $id_tecArmador = $row['id_tecArmador'];
                                        $tecArmador = $row['tecArmador']; ?>
                                        <option value="<?php echo $id_tecArmador ?>"> <?php echo $tecArmador ?> </option>";
                                    <?php   } ?>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnNuevoRecPzsDanadas" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaRecPzsDanadas"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.1.1 Registrar Link de Desarmado</h5>
            </div>
        </div>
    </div>
</div>
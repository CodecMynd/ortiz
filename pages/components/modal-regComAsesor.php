<?php
$query1 = "SELECT id_asesor, asesor FROM asesores  ORDER BY asesor ASC";
$result = mysqli_query($conexion, $query1) or die(mysqli_error($conexion));
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regComAsesor" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Comprobacion de Asignacion de Asesor de Número de Proyecto: <span id="tituloModal"></span> 
                </h5>
            </div>
            <form id="formNuevoRegComAsesor" action="../adds/addNuevoRegComAsesor.php" method="POST">  
            <!-- <form id="formNuevoRegComAsesor"> -->
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                        <input type="hidden" name="nProyecto" id="nProyecto" value="">
                        <div class='col-md-8 col-sm-12 mb-2 form-group'>
                            <div class='input-group'>
                                <label for='asesor' class='pl-5 parpadea'>Asesor <small>(requerido)</small></label>
                                <select name='id_asesor' id='id_asesor' class='form-control' data-toggle='tooltip' data-placement='bottom' title='Selecciona un Asesor de la lista' style='width: 100%;' required>
                                    <option selected disabled>Selecciona</option>
                                        <?php
                                        while ($row1 = $result->fetch_assoc()) {
                                            $id_asesor = $row1['id_asesor'];
                                            $asesor = $row1['asesor'];
                                            ?>
                                   <option value="<?php echo  $id_asesor ?>"><?php echo $asesor ?></option>
                                       <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="submit" name="btnNuevoRegComAsesor" id="btnNuevoRegComAsesor" class="btn btn-secondary"><i class="fas fa-pen"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="pie">
                <h5>2.3.15.1.1 Registrar Comprobación de Asignacion Asesor</h5>
                <div id="respuestaNuevogComAsesor"></div>
            </div>
        </div>
    </div>
</div>

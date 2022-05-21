
<?php
require '../components/head-main.php';
?>

<div class="modal fade" id="modal-verGralInfoLinkDesarmado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ver Información Link de Desarmado<small> (Consulta Rapida)</small></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
                <?php
                $cont = 0;
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query = "SELECT P.id_proyecto, P.nProyecto,
                R.linkRecPzsDanadas, R.fecha_creacion, R.fecha_borrado,
                UC.nombres AS nomC, UC.aPaterno AS patC, UC.aMaterno AS matC,
                UB.nombres AS nomB, UB.aPaterno AS patB, UB.aMaterno AS matB
                from proyectos P 
                LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                LEFT JOIN usuarios UC ON R.id_capC = UC.id_usuario
                LEFT JOIN usuarios UB ON R.id_capB = UB.id_usuario
                WHERE P.id_proyecto = $id_proyecto and R.borrado = 0";
                $resultado = mysqli_query($conexion, $query);
                ?>
                 <table id="tableVarios1" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Núm. Proyecto</th>
                            <th>Link de Desarmado</th>
                            <th>Capturista Registro</th>
                            <th>Fecha Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            $id_proyecto = $row['id_proyecto'];
                            $capR = (empty($row['nomC']) AND empty($row['patC']) AND empty($row['matC'])) ? 'Sin Registro' : $row['nomC'].' '.$row['patC'].' '.$row['matC'];

                        ?>
                            <tr>
                                <td>
                                    <?php $cont++;
                                    echo $cont;
                                    ?>
                                </td>
                                <td >
                                    <span class='badge badge-dark badge-pill'><?php echo $id_proyecto ?></span>
                                </td>
                                <td>
                                    <?php echo $row['nProyecto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['linkRecPzsDanadas'] ?>
                                </td>
                                <td>
                                    <?php echo $capR ?>
                                </td>
                                <td>
                                    <?php echo $row['fecha_creacion'] ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>#</th>
                            <th>ID</th>
                            <th>Núm. Proyecto</th>
                            <th>Link de Desarmado</th>
                            <th>Fecha Registro</th>
                            <th>Capturista Registro</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer text-left">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
        </div>
    </div>
</div>
<script src="../ajax/tableVarios.js"></script>
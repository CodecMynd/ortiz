<?php
require '../components/head-main.php';
?>
<!-- Modal -->
<div class="modal fade" id="modal-verGralVerDiaBat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">2.3.3.4 Ver Generales Verificación Diaria de Baterías <small>(Consulta Rapida)</small></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
                <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                <?php
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                V.placa, Co.color, M.marca, Mo.modelo, An.anio
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                WHERE P.id_Proyecto = $id_proyecto";
                $resultado1 = mysqli_query($conexion, $query1);
                $row1 = $resultado1->fetch_assoc();

                ?>
                <table id="tableRegProyectos" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Núm. de Proyecto</th>
                            <th>Número de Orden</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Placas</th>
                            <th>Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="width: 5%;"><span class='badge badge-dark badge-pill'><?php echo $row1['id_proyecto'] ?></span></th>
                            <td style="width: 10%;"><?php echo $row1['nProyecto'] ?></td>
                            <td style="width: 10%;"><?php echo $row1['nOrden'] ?></td>
                            <td><?php echo $row1['marca'] ?></td>
                            <td><?php echo $row1['modelo'] ?></td>
                            <td><?php echo $row1['anio'] ?></td>
                            <td><?php echo $row1['placa'] ?></td>
                            <td><?php echo $row1['color'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <h5 class="text-center"><strong> Registros Comprobación y Supervisión de Verificación Diaria de Baterías</strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, 
                V.id_verifDiaBat, V.linkverifDiaBat, V.textSupervision, V.fecha_creacionV, V.fecha_creacionS, V.borrado AS borradoV,
                V.com, V.sup,
                UV.nombres AS nomV, UV.aPaterno AS patV, UV.aMaterno AS matV,
                US.nombres AS nomS, US.aPaterno AS patS, US.aMaterno AS matS
                from proyectos P 
                LEFT JOIN verificaciondiariabaterias V ON P.id_proyecto = V.id_proyecto
                LEFT JOIN usuarios UV ON V.id_capCV = UV.id_usuario
                LEFT JOIN usuarios US ON V.id_capCS = US.id_usuario
                WHERE P.id_Proyecto = $id_proyecto AND V.borrado = 0 ORDER BY V.id_verifDiaBat DESC";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <div id="table_refresh">
                    <table id="tableVarios1" class="table table-responsive table-sm table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Núm. Proyecto</th>
                                <th>Link Verificación</th>
                                <th>Capturista Verificador</th>
                                <th>Fecha Registro Verificación</th>
                                <th>Supervisión</th>
                                <th>Capturista Supervisor</th>
                                <th>Fecha Registro Supervisión</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $resultado->fetch_assoc()) {
                                $id_proyecto = $row['id_proyecto'];
                                $nP = $row['nProyecto'];
                                $id_verifDiaBat = $row['id_verifDiaBat'];
                                $com = $row['com'];
                                $sup = $row['sup'];
                                $capturistaV = $row['nomV'] . ' ' . $row['patV'] . ' ' . $row['matV'];
                                $capturistaS = $row['nomS'] . ' ' . $row['patS'] . ' ' . $row['matS'];
                            ?>
                                <tr>
                                    <td>
                                        <?php $cont++;
                                        echo $cont;
                                        ?>
                                    </td>
                                    <td style="width: 7%;">
                                        <span class='badge badge-dark badge-pill'><?php echo $id_proyecto ?></span>
                                    </td>
                                    <td>
                                        <?php echo $row['nProyecto'] ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['linkverifDiaBat'])) ? 'Sin Registro' : $row['linkverifDiaBat']; ?>
                                    </td>
                                    <td>
                                        <?php echo $capturistaV ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['fecha_creacionV'])) ? 'Sin Registro' : $row['fecha_creacionV']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['textSupervision'] ?>
                                    </td>
                                    <td>
                                        <?php echo $capturistaS ?>
                                    </td>
                                    <td>
                                        <?php if ($row['fecha_creacionS'] == '0000-00-00 00:00:00') {
                                            echo '';
                                        } else {
                                            echo $row['fecha_creacionS'];
                                        }
                                        ?>
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
                                <th>Link Verificación</th>
                                <th>Capturista Verificador</th>
                                <th>Fecha Registro Verificación</th>
                                <th>Supervisión</th>
                                <th>Capturista Supervisor</th>
                                <th>Fecha Registro Supervisión</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal-footer text-left">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
        </div>
    </div>
</div>
<script src="../ajax/tableVarios.js"></script>
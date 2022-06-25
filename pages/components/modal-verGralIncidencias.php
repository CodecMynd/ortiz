
<?php
require '../components/head-main.php';
?>

<div class="modal fade" id="modal-verGralIncidencias" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">2.3.3.3 Ver Incidencias <small>(Consulta Rapida)</small></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
            <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                <?php
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.valorVenta,
                V.placa, Co.color, M.marca, Mo.modelo, An.anio, A.asesor,
                T.top, T.motivo AS motivoTop,
                AST.id_aseTec, AST.aseTec, AST.motivo AS motivoAsesoramiento,
                R.linkRecPzsDanadas
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                LEFT JOIN comasesor C ON P.id_proyecto = C.id_proyecto
                LEFT JOIN asesores A ON C.id_asesor = A.id_asesor
                LEFT JOIN tops T ON P.id_proyecto = T.id_proyecto
                LEFT JOIN asesoramientostecnicos AST ON P.id_proyecto = AST.id_proyecto
                LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                WHERE P.id_Proyecto =  $id_proyecto";
                $resultado1 = mysqli_query($conexion, $query1);
                $row1 = $resultado1->fetch_assoc();
                ?>
                <table id="tableSm2" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Núm. de Proyecto</th>
                            <th>Número de Orden</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Placas</th>
                            <th>Color </th>
                            <th>Asesor</th>

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
                            <td><?php if (empty($row1['asesor'])) {
                                    echo 'Sin Asesor ';
                                } else {
                                    echo $row1['asesor'];
                                } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto,
                I.incidencia, I.fecha_creacion, I.folio,
                I.com, I.sup, I.id_incidencia,
                U.nombres, U.aPaterno, U.aMaterno
                from proyectos P 
                LEFT JOIN incidencias I ON P.id_proyecto = I.id_proyecto
                LEFT JOIN usuarios U ON I.id_capC = U.id_usuario
                WHERE P.id_proyecto = '$id_proyecto' and I.borrado = 0";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <h5 class="text-center mt-3"><strong> Consulta: Incidencias Registradas</strong></h5>
                 <table id="tableVarios5" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Núm. Proyecto</th>
                            <th>Núm. Folio</th>
                            <th>Incidencia</th>
                            <th>Solicitado en</th>
                            <th>Capturista Incidencia</th>
                            <th>Fecha Solicitud</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            $id_proyecto = $row['id_proyecto'];
                            $id_i = $row['id_incidencia'];
                            $nP = $row['nProyecto'];
                            $f = $row['folio'];
                            $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                            $c = $row['com'];
                            $s = $row['sup'];
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
                                    <?php echo "<h6><span class='badge badge-success badge-pill'>{$row['folio']}</span></h6>"?>
                                </td>
                                <td>
                                    <?php echo (empty($row['incidencia'])) ? 'Sin Registro' : $row['incidencia']; ?>
                                </td>
                                <td>
                                    <?php 
                                    if($c == 1){
                                        echo 'Comprobación';
                                    }else if($s == 1){
                                        echo 'Supervisión';
                                    }else{
                                        echo 'Sin Registro';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
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
                            <th>Núm. Folio</th>
                            <th>Incidencia</th>
                            <th>Solicitado en</th>
                            <th>Capturista Incidencia</th>
                            <th>Fecha Solicitud</th>
                        </tr>
                    </tfoot>
                </table>
                <hr>
                <br>
                <?php
                $cont = 0;
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query = "SELECT P.id_proyecto, P.nProyecto,
                I.incidencia, I.fecha_creacion, I.folio, I.fecha_borrado,
                I.com, I.sup, I.id_incidencia,
                U.nombres, U.aPaterno, U.aMaterno,
                UE.nombres AS nomE, UE.aPaterno AS patE, UE.aMaterno AS matE
                from proyectos P 
                LEFT JOIN incidencias I ON P.id_proyecto = I.id_proyecto
                LEFT JOIN usuarios U ON I.id_capC = U.id_usuario
                LEFT JOIN usuarios UE ON I.id_capB = UE.id_usuario
                WHERE P.id_proyecto = '$id_proyecto' and I.borrado = 1";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <h5 class="text-center"><strong> Consulta: Incidencias Eliminadas</strong></h5>
                 <table id="tableVarios4" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Núm. Proyecto</th>
                            <th>Núm. Folio</th>
                            <th>Incidencia</th>
                            <th>Solicitado en</th>
                            <th>Capturista Incidencia</th>
                            <th>Fecha Solicitud</th>
                            <th>Capturista Eliminó</th>
                            <th>Fecha Eliminado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            $id_proyecto = $row['id_proyecto'];
                            $id_i = $row['id_incidencia'];
                            $nP = $row['nProyecto'];
                            $f = $row['folio'];
                            $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                            $solicitanteEli = $row['nomE'] . ' ' . $row['patE'] . ' ' . $row['matE'];
                            $c = $row['com'];
                            $s = $row['sup'];
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
                                    <?php echo "<h6><span class='badge badge-danger badge-pill'>{$row['folio']}</span></h6>" ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['incidencia'])) ? 'Sin Registro' : $row['incidencia']; ?>
                                </td>
                                <td>
                                    <?php 
                                    if($c == 1){
                                        echo 'Comprobación';
                                    }else if($s == 1){
                                        echo 'Supervisión';
                                    }else{
                                        echo 'Sin Registro';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($solicitanteEli)) ? 'Sin Registro' : $solicitanteEli; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['fecha_borrado'])) ? 'Sin Registro' : $row['fecha_borrado']; ?>
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

                            <th>Núm. Folio</th>
                            <th>Incidencia</th>
                            <th>Solicitado en</th>
                            <th>Capturista Incidencia</th>
                            <th>Fecha Solicitud</th>
                            <th>Capturista Eliminó</th>
                            <th>Fecha Eliminado</th>
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
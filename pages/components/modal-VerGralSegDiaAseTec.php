<?php
require '../components/queryDomPdf.php';
?>
<!-- Modal  style="max-width: 1250px!important;"  -->
<div class="modal fade" id="modal-VerGralSegDiaAseTec" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">2.3.6.1.3 Ver Generales Seguimiento Diario Programa de Asesoramiento Técnico <small>(Consulta Rapida)</small></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
                <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                <?php
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                V.placa, Co.color, M.marca, Mo.modelo, An.anio, A.asesor,
                AST.motivo
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                   LEFT JOIN comasesor C ON P.id_proyecto = C.id_proyecto
                LEFT JOIN asesores A ON C.id_asesor = A.id_asesor
                LEFT JOIN asesoramientostecnicos AST ON P.id_proyecto = AST.id_proyecto
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
                            <th>Color </th>
                            <th>Asesor</th>
                            <th>Motivo Asesoramiento Técnico</th>
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
                            <td>
                                <?php echo (empty($row1['motivo'])) ? 'Sin Registro Motivo' : $row1['motivo'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Registros Seguimiento Diario Programa de Asesoramiento Técnico</strong></h5>

                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto,  
                V.placa, Co.color, M.marca, Mo.modelo, An.anio,
                SD.id_SegDiaProAseTecnico, SD.linkSegDiaProAseTecnico, SD.fecha_hoyV AS FV, SD.com, SD.fecha_creacionV,
                SDS.id_SegDiaProAseTecnicoSuper, SDS.textSupervision, SDS.sup, SDS.fecha_hoyS AS FS, SDS.fecha_creacionS,
                U.nombres AS nombreV, U.aPaterno AS paternoV, U.aMaterno AS maternoV,
                US.nombres AS nombreS, US.aPaterno AS paternoS, US.aMaterno AS maternoS
                FROM proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio
                INNER JOIN segdiaproasetecnico SD ON P.id_proyecto = SD.id_proyecto 
                LEFT JOIN segdiaproasetecnicosuper SDS ON SD.id_SegDiaProAseTecnico = SDS.id_segDiaProAseTecnico
                INNER JOIN usuarios U ON SD.id_capCV = U.id_usuario
                LEFT JOIN usuarios US ON SDS.id_capCS = US.id_usuario
                WHERE P.id_proyecto = $id_proyecto GROUP BY SD.id_SegDiaProAseTecnico;";
                $resultado = mysqli_query($conexion, $query);
                ?>

                <?php
                while ($row = $resultado->fetch_assoc()) {
                    $id_proyecto = $row['id_proyecto'];
                    $idV = $row['id_SegDiaProAseTecnico'];
                    $textSupervision = $row['textSupervision'];
                    $hoyS = $row['FS'];
                    $fecha = new DateTime($hoyS);
                    $fechaS = $fecha->format('d-m-Y');

                    $hoyV = $row['FV'];
                    $fecha = new DateTime($hoyV);
                    $fechaV = $fecha->format('d-m-Y');
                    $fecha_sistema;
                    $fechaV = $row['FV'];
                    $fechaS = $row['FS'];
                    $com = $row['com'];
                    $sup = $row['sup'];
                    if(empty($row['nombreS']) AND empty($row['paternoS']) AND empty($row['maternoS'])){
                        $capSup = 'Sin Registro';
                    }else{
                        $capSup = $row['nombreS'].' '.$row['paternoS'].' '.$row['maternoS'];
                    }
                ?>
                    <ul class="list-group">
                        <li class="list-group-item">#</li>
                        <li class="list-group-item font-weight-bold"><?php $cont++;
                                                                        echo $cont; ?>
                        </li>
                        <li class="list-group-item">Núm. Proyecto</li>
                        <li class="list-group-item font-weight-bold"><?php echo $row['nProyecto'] ?></li>
                        <li class="list-group-item">Link Verificación</li>
                        <li class="list-group-item font-weight-bold"><?php echo $row['linkSegDiaProAseTecnico'] ?></li>
                        <li class="list-group-item">Capturista Verificador</li>
                        <li class="list-group-item font-weight-bold"><?php echo $row['nombreV'] . ' ' . $row['paternoV'] . ' ' . $row['maternoV']; ?></li>
                        <li class="list-group-item">Fecha Registro Verificación</li>
                        <li class="list-group-item font-weight-bold"><?php if (empty($hoyV)) {
                                                                            echo '';
                                                                        } else {
                                                                            echo $row['fecha_creacionV'];
                                                                        }
                                                                        ?></li>
                        <li class="list-group-item">Supervisión</li>
                        <li class="list-group-item font-weight-bold"><?php echo (empty($row['textSupervision'])) ? 'Sin Registro' : $row['textSupervision']?></li>
                        <li class="list-group-item">Capturista Supervisor</li>
                        <li class="list-group-item font-weight-bold"><?php echo $capSup ?></li>
                        <li class="list-group-item">Fecha Registro Supervisión</li>
                        <li class="list-group-item font-weight-bold"> <?php if (empty($hoyS)) {
                                                                            echo 'Sin Registro';
                                                                        } else if ($hoyS != '0000-00-00') {
                                                                            echo $row['fecha_creacionS'];
                                                                        }
                                                                        ?></li>
                        <!-- <li class="list-group-item">Acciones</li>
                        <li class="list-group-item">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Marcas"> Acciones</span>
                                    </button>
                                    <ul class="dropdown-menu" style="min-width:2em">
                                        <div class="btn-group">
                                            <li class="dropdown-item">
                                                <span data-toggle="tooltip" title="2.3.6.1.4 Eliminar Comprobación de Seguimiento Diario Programa de Asesoramiento Técnico">
                                                    <?php if ($super == 1 and $sup == 1) {
                                                        echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                    } else if ($super == 1 and $sup == 0) { ?>
                                                        <a href='../update/formEliminarComSegDiaAseTecnico.php?id=<?php echo $row['id_SegDiaProAseTecnico'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                    <?php } else if ($eliComActMinDia == 1 and $sup == 1) {
                                                        echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                    } else if ($eliComActMinDia == 1 and $sup == 0) { ?>
                                                        <a href='../update/formEliminarComSegDiaAseTecnico.php?id=<?php echo $row['id_SegDiaProAseTecnico'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                    <?php } else {
                                                        echo '<a class="btn btn-outline-danger" id="eliComSegDiaAseTecnico"><i class="fas fa-trash-alt"></i></a>';
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                            <li class="dropdown-item">
                                                <span data-toggle="tooltip" title="2.3.6.1.5 Eliminar Supervisión de Seguimiento Diario Programa de Asesoramiento Técnico">
                                                    <?php if ($super == 1 and $sup == 0) {
                                                        echo '<a class="btn btn-outline-danger" id="yaRegistro"><i class="fas fa-trash-alt"></i></a>';
                                                    } else if ($super == 1 and $com == 1) { ?>
                                                        <a href='../update/formEliminarComSegDiaAseTecnicoSuper.php?id=<?php echo $row['id_SegDiaProAseTecnicoSuper'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                    <?php } else if ($eliComSuperActMinDia == 1 and $sup == 0) {
                                                        echo '<a class="btn btn-outline-danger" id="sinEliminar"><i class="fas fa-trash-alt"></i></a>';
                                                    } else if ($eliComSuperActMinDia == 1 and $com == 1) { ?>
                                                        <a href='../update/formEliminarComSegDiaAseTecnicoSuper.php?id=<?php echo $row['id_SegDiaProAseTecnicoSuper'] ?>&nP= <?php echo $row['nProyecto'] ?>&fecha=<?php echo $row['fecha_creacionV'] ?> ' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>
                                                    <?php } else {
                                                        echo '<a class="btn btn-outline-danger" id="eliComSuperActMinDia"><i class="fas fa-trash-alt"></i></a>';
                                                    }
                                                    ?>
                                                </span>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                    </ul>

                <?php
                }
                ?>


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
<?php
require '../components/head-main.php';
?>
<!-- Modal -->
<div class="modal fade" id="modal-verGralActMinDiaria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">2.3.4.3 Ver Generales Actividad Mínima Diaria <small>(Consulta Rapida)</small></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
                <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                <?php
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                V.placa, Co.color, M.marca, Mo.modelo, An.anio, A.asesor,
                T.top, T.motivo AS motivoTop,
                AST.id_aseTec, AST.aseTec, AST.motivo AS motivoAsesoramiento
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
                WHERE P.id_Proyecto =  $id_proyecto";
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
                            <th>Top</th>
                            <th>Asesoramiento Técnico</th>
                            <th>Motivo Top</th>
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
                                <?php
                                // valida columna Top
                                if (empty($row1['top'])) {
                                    echo "<h6><span class='badge badge-ligth badge-pill top' data-toggle='tooltip' data-placement='bottom' title='Este Proyecto no es Top'><i class='fa-solid fa-star fa-2x' style='color:#CCCCCC'></i></span></h6>";
                                } else {
                                    echo "<h6><a href='../admin/crudAsignacionTop.php' data-toggle='tooltip' data-placement='bottom' title='ir a: Tabla 2.3.5 Asignación de Top'><span class='badge badge-ligth badge-pill top'><i class='fa-solid fa-star fa-2x' style='color:#28A745'></i></span></a></h6>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                // valida columna aseTec
                                if (empty($row1['aseTec'])) {
                                    echo "<h6><span class='badge badge-danger badge-pill' data-placement='bottom'>Sin Registro</span></h6>";
                                } else {
                                    echo "<h6><a href='../admin/crudAsesoramientoTecnico.php' data-toggle='tooltip' data-placement='bottom' title='ir a: Tabla 2.3.6 Programa de Asesoramiento Técnico'><span class='badge badge-success badge-pill' data-placement='bottom' >Con Asesoramiento</span></a></h6>";
                                }
                                ?>
                            </td>
                            <td><?php echo (empty($row1['motivoTop'])) ? 'Sin ningún registro Top' : $row1['motivoTop'] ?></td>
                            <td><?php echo (empty($row1['motivoAsesoramiento'])) ? 'Sin ningún registro Asesoramiento Técnico' : $row1['motivoAsesoramiento'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Registros Actividad Minima Diaria</strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, P.comActMinDia, P.comSuperActMinDia, 
                V.placa, Co.color, M.marca, Mo.modelo, An.anio, 
                A.id_ActMinDiaria, A.linkComActMinDia, A.textSupervision, A.fecha_creacionV, A.fecha_creacionS,
                A.fecha_hoyV AS FV, A.fecha_hoyS AS FS, 
                UV.nombres AS nombreV, UV.aPaterno AS paternoV, UV.aMaterno AS maternoV, 
                US.nombres AS nombreS, US.aPaterno AS paternoS, US.aMaterno AS maternoS 
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                INNER JOIN actmindiaria A ON P.id_proyecto = A.id_proyecto 
                LEFT JOIN usuarios UV ON A.id_capCV = UV.id_usuario 
                LEFT JOIN usuarios US ON A.id_capCS = US.id_usuario 
                WHERE P.id_Proyecto = $id_proyecto ORDER BY id_ActMinDiaria DESC;";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
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
                            $idV = $row['id_ActMinDiaria'];
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
                            $com = $row['comActMinDia'];
                            $sup = $row['comSuperActMinDia'];
                        ?>
                            <tr>
                                <td>
                                    <?php $cont++;
                                    echo $cont;
                                    ?>
                                </td>
                                <td style="width: 7%;">
                                    <?php echo $row['nProyecto'] ?>
                                </td>
                                <td style="width: 15%;">
                                    <?php echo $row['linkComActMinDia'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombreV'] . ' ' . $row['paternoV'] . ' ' . $row['maternoV']; ?>
                                </td>
                                <td>
                                    <?php if (empty($hoyV)) {
                                        echo '';
                                    } else {
                                        echo $row['fecha_creacionV'];
                                    }
                                    ?>
                                </td>
                                <td style="width: 15%;">
                                    <?php echo $row['textSupervision'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombreS'] . ' ' . $row['paternoS'] . ' ' . $row['maternoS']; ?>
                                </td>
                                <td>
                                    <?php if (empty($hoyS)) {
                                        echo '';
                                    } else if ($hoyS != '0000-00-00') {
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
                            <th>Núm. Proyecto</th>
                            <th>Link Verificación</th>
                            <th>Capturista Verificador</th>
                            <th>Fecha Registro Verificación</th>
                            <th>Supervisión</th>
                            <th>Capturista Supervisor</th>
                            <th>Fecha Registro Supervisor</th>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Consulta: Registro Diario Programa de Asesoramiento Técnico</strong></h5>
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
                <table id="tableSm2" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
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
                        ?>
                            <tr>
                                <td>
                                    <?php $cont++;
                                    echo $cont;
                                    ?>
                                </td>
                                <td style="width: 7%;">
                                    <?php echo $row['nProyecto'] ?>
                                </td>
                                <td style="width: 15%;">
                                    <?php echo $row['linkSegDiaProAseTecnico'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombreV'] . ' ' . $row['paternoV'] . ' ' . $row['maternoV']; ?>
                                </td>
                                <td>
                                    <?php if (empty($hoyV)) {
                                        echo '';
                                    } else {
                                        echo $row['fecha_creacionV'];
                                    }
                                    ?>
                                </td>
                                <td style="width: 15%;">
                                    <?php echo $row['textSupervision'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nombreS'] . ' ' . $row['paternoS'] . ' ' . $row['maternoS']; ?>
                                </td>
                                <td>
                                    <?php if (empty($hoyS)) {
                                        echo '';
                                    } else if ($hoyS != '0000-00-00') {
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
                            <th>Núm. Proyecto</th>
                            <th>Link Verificación</th>
                            <th>Capturista Verificador</th>
                            <th>Fecha Registro Verificación</th>
                            <th>Supervisión</th>
                            <th>Capturista Supervisor</th>
                            <th>Fecha Registro Supervisor</th>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Consulta: Registros Solicitudes de Piezas</strong></h5>
                <?php
                            $cont = 0;
                            $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId,
                S.id_solPzsDanadas, S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
                S.borrado, S.enUso,
                U.nombres, U.aPaterno, U.aMaterno
                from proyectos P 
                LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
                LEFT JOIN usuarios U ON S.id_capC = U.id_usuario
                WHERE P.id_Proyecto = $id_proyecto AND P.proyectoActivo = 1 AND S.borrado = 0 ORDER BY S.folio_solicitud DESC";
                            $resultado = mysqli_query($conexion, $query);
                ?>
                <table id="tableSm2" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Núm. Proyecto</th>
                            <th>Núm. Folio</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Minuto de Video</th>
                            <th>Capturista Solicitante</th>
                            <th>Fecha Solicitud</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = $resultado->fetch_assoc()) {
                                $id_proyecto = $row['id_proyecto'];
                                $nP = $row['nProyecto'];
                                $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                $linkId = (empty($row['linkId'])) ? '' : $row['linkId'];
                                $id_solPzsDanadas = $row['id_solPzsDanadas'];
                                $folio_solicitud = $row['folio_solicitud'];

                        ?>
                            <tr>
                                <td>
                                    <?php $cont++;
                                    echo $cont;
                                    ?>
                                </td>
                                <td>
                                    <span class='badge badge-dark badge-pill'><?php echo $id_proyecto ?></span>
                                </td>
                                <td>
                                    <?php echo $row['nProyecto'] ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['folio_solicitud'])) ? 'Sin Registro' : $row['folio_solicitud']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['cantidad'])) ? 'Sin Registro' : $row['cantidad']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['descripcion'])) ? 'Sin Registro' : $row['descripcion']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['minVideo'])) ? 'Sin Registro' : $row['minVideo']; ?>
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
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Minuto de Video</th>
                            <th>Capturista Solicitante</th>
                            <th>Fecha Solicitud</th>
                        </tr>
                    </tfoot>
                </table>
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
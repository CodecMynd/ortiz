<?php
require '../components/queryDomPdf.php';
?>
<!-- Modal  style="max-width: 1250px!important;"  -->
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
                <!------------------------------------------------------- tabla registro del proyecto ------------------------------------------------------->
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
                <table id="tableVarios1" class="table table-responsive table-sm table-bordered table-striped" style="width: 100%;">
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
                <table id="tableVarios2" class="table  table-sm table-bordered table-striped" style="width: 100%;">
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
                <hr>
                <h5 class="text-center"><strong> Consulta: Registros Solicitudes de Piezas</strong></h5>
                <table class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Link de Desarmado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo (empty($row1['linkRecPzsDanadas'])) ? 'Sin Registro' : $row1['linkRecPzsDanadas'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId, R.linkRecPzsDanadas,
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
                <table id="tableVarios3" class="table table-sm table-bordered table-striped" style="width: 100%;">
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

                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Registros Bitacora de Proyectos</strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, P.estadoProyectoEliminado, P.proyectoActivo,
                P.registroSolicitud, P.altaProyecto, P.proyCodIdentificador, P.superCodIdentificador,   
                B.etapa, B.fechar_borrado, B.fecha_modificacion, B.fecha_registro,
                UR.nombres AS nomR, UR.aPaterno AS patR, UR.aMaterno AS matR,
                UM.nombres AS nomM, UM.aPaterno AS patM, UM.aMaterno AS matM,
                UB.nombres AS nomB, UB.aPaterno AS patB, UB.aMaterno AS matB,
                B.id_capB, B.id_capM, id_capR
                FROM proyectos P
                LEFT JOIN bitacora B ON P.id_proyecto = B.id_proyecto
                LEFT JOIN usuarios UR ON B.id_capR = UR.id_usuario    
                LEFT JOIN usuarios UM ON B.id_capM = UM.id_usuario
                LEFT JOIN usuarios UB ON B.id_capB = UB.id_usuario
                WHERE P.id_proyecto = $id_proyecto
                ORDER BY B.id_bitacora DESC";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <table id="tableVarios4" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Núm. Proyecto</th>
                            <th>Estado del Proyecto</th>
                            <th>Etapa del Proyecto (actual)</th>
                            <th>Bitacora</th>
                            <th>Fecha Actividad</th>
                            <th>Capturista Actividad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            $id_proyecto = $row['id_proyecto'];
                            $nP = $row['nProyecto'];

                            $outputBtns1 = "";
                            $outputBtns2 = "";
                            $etapa = "";
                            $fechaBitacora = "";
                            $bitacora = "";
                            $capturista = "";

                            $capturistaR = $row['nomR'] . ' ' . $row['patR'] . ' ' . $row['matR'];
                            $capturistaM = $row['nomM'] . ' ' . $row['patM'] . ' ' . $row['matM'];
                            $capturistaB = $row['nomB'] . ' ' . $row['patB'] . ' ' . $row['matB'];

                            $f_b = $row['fechar_borrado'];
                            $f_m = $row['fecha_modificacion'];
                            $f_r = $row['fecha_registro'];


                            $Eliminado = $row['estadoProyectoEliminado'];
                            $e = $row['etapa'];

                            // Etapa del proyecto
                            $PA = $row['proyectoActivo'];
                            $RS = $row['registroSolicitud'];
                            $AP = $row['altaProyecto'];
                            $CI = $row['proyCodIdentificador'];
                            $SU = $row['superCodIdentificador'];
                            if ($PA == 1) {
                                $etapa = "<h6><span class='badge badge-success badge-pill'>Proyecto Activo</span></h6>";
                            } else if ($RS == 1) {
                                $etapa = "<h6><span class='badge badge-success badge-pill'>Solicitud Alta</span></h6>";
                            } else if ($AP == 1) {
                                $etapa = "<h6><span class='badge badge-success badge-pill'>Alta Proyecto</span></h6>";
                            } else if ($CI == 1) {
                                $etapa = "<h6><span class='badge badge-success badge-pill'>Código Identificador</span></h6>";
                            } else if ($SU == 1) {
                                $etapa = "<h6><span class='badge badge-success badge-pill'>Supervisión</span></h6>";
                            } else {
                                $etapa = "<h6><span class='badge badge-Warning badge-pill'>Sin Ubicación</span></h6>";
                            }

                            // Bitacora Fecha
                            if ($e != '') {
                                $bitacora = "<strong>$e</strong>";
                            } else {
                                $bitacora = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
                            }


                            // Bitacora Actividad
                            if (!empty($f_r)) {
                                $fechaBitacora = "<strong>$f_r</strong>";
                            } else if (!empty($f_m)) {
                                $fechaBitacora = "<strong>$f_m</strong>";
                            } else if (!empty($f_b)) {
                                $fechaBitacora = "<strong>$f_b</strong>";
                            } else {
                                $fechaBitacora = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
                            }

                            // validar columna estado del proyecto
                            if ($Eliminado == 0) {
                                $validaEstadoProyecto = "<h6><span class='badge badge-danger badge-pill'>Eliminado</span></h6>";
                            } else {
                                $validaEstadoProyecto = "<h6><span class='badge badge-success badge-pill'>Activo</span></h6>";
                            }

                            // Capturista
                            if (!empty($capturistaR) or !empty($capturistaM) or !empty($capturistaB)) {
                                $capturista = $capturistaR . ' ' . $capturistaM . ' ' . $capturistaB;
                            } else if ((empty($row['id_capB']) or $row['id_capB'] == 0) and (empty($row['id_capM']) or $row['id_capM'] == 0) and  (empty($row['id_capR']) or $row['id_capR'] == 0)) {
                                $capturista = "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>";
                            }

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
                                    <?php echo $validaEstadoProyecto ?>
                                </td>
                                <td>
                                    <?php echo $etapa ?>
                                </td>
                                <td>
                                    <?php echo $bitacora ?>
                                </td>
                                <td>
                                    <?php echo $fechaBitacora ?>
                                </td>
                                <td>
                                    <?php echo "<strong>$capturista</strong>" ?>
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
                            <th>Estado del Proyecto</th>
                            <th>Etapa del Proyecto (actual)</th>
                            <th>Bitacora</th>
                            <th>Fecha Actividad</th>
                            <th>Capturista Actividad</th>
                        </tr>
                    </tfoot>
                </table>
                <br>
                <hr>
                <br>
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
                <table id="tableVarios5" class="table table-responsive table-sm table-bordered table-striped" style="width: 100%;">
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
                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Registros Incidencias</strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto,
                V.placa, Co.color, M.marca, Mo.modelo, An.anio,
                I.incidencia, I.fecha_creacion, I.folio,
                I.com, I.sup, I.id_incidencia,
                U.nombres, U.aPaterno, U.aMaterno
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                LEFT JOIN incidencias I ON P.id_proyecto = I.id_proyecto
                LEFT JOIN usuarios U ON I.id_capC = U.id_usuario
                WHERE P.id_proyecto = '$id_proyecto' and I.borrado = 0";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <table id="tableVarios6" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Núm. Proyecto</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Placas</th>
                            <th>Color</th>
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
                                <td>
                                    <span class='badge badge-dark badge-pill'><?php echo $id_proyecto ?></span>
                                </td>
                                <td>
                                    <?php echo $row['nProyecto'] ?>
                                </td>
                                <td>
                                    <?php echo $row['marca'] ?>
                                </td>
                                <td>
                                    <?php echo $row['modelo'] ?>
                                </td>
                                <td>
                                    <?php echo $row['anio'] ?>
                                </td>
                                <td>
                                    <?php echo $row['placa'] ?>
                                </td>
                                <td>
                                    <?php echo $row['color'] ?>
                                </td>
                                <td>
                                    <?php echo $row['folio'] ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['incidencia'])) ? 'Sin Registro' : $row['incidencia']; ?>
                                </td>
                                <td>
                                    <?php
                                    if ($c == 1) {
                                        echo 'Comprobación';
                                    } else if ($s == 1) {
                                        echo 'Supervisión';
                                    } else {
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
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Placas</th>
                            <th>Color</th>
                            <th>Núm. Folio</th>
                            <th>Incidencia</th>
                            <th>Solicitado en</th>
                            <th>Capturista Incidencia</th>
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
<script src="../ajax/tableVarios.js"></script>
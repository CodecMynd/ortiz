<?php
require '../components/head-main.php';
?>
<!-- Modal -->
<div class="modal fade" id="modal-verGralRecPzsDanadas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">4.1.2 Ver Generales Recepción de Piezas Dañadas <small>(Consulta Rapida)</small></h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
                <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                <?php
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                V.placa, Co.color, M.marca, Mo.modelo, An.anio,
                R.linkRecPzsDanadas
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
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
                <br>
                <hr>
                <h5 class="text-center"><strong> Solicitud(es) de Pieza(s)</strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas,
                S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
                U.nombres, U.aPaterno, U.aMaterno
                from proyectos P 
                LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
                LEFT JOIN usuarios U ON S.id_capC = U.id_usuario
                WHERE P.id_Proyecto = $id_proyecto AND P.proyectoActivo = 1 ORDER BY S.folio_solicitud DESC";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                            $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
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
                                <td style="width: 15%;">
                                    <?php echo $row['nProyecto'] ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['folio_solicitud'])) ? 'Sin Registro' : $row['folio_solicitud']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['cantidad'])) ? 'Sin Registro' : $row['cantidad']; ?>
                                </td>
                                <td style="width: 15%;">
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
        </div>
    </div>
</div>
<?php
// Scripts principales
// require '../components/scripts-main.php';
// require '../components/scripts-dataTables.php';
?>
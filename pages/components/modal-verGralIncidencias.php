
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
                <?php
                $cont = 0;
                $id_proyecto = $_REQUEST['id_proyecto'];
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
                <table id="tableSm" class="table table-sm table-bordered table-striped" style="width: 100%;">
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
                                <td >
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
                                    <?php echo $row['folio']?>
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
        </div>
    </div>
</div>
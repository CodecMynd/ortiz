<!-- Modal -->
<div class="modal fade" id="modalSelectProyectoSolCamSemanaSolAltas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecciona: Proyectos Para Solicitar Cambio Semana Solicitud de Alta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- consulta sql -->
            <?php
            $cont = 0;
            $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, 
            V.placa, M.marca, Mo.modelo, A.anio, Co.color,
            R.id_regSolicitud, R.folioRegSolicitud, SA.semana
            FROM proyectos P 
            INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
            INNER JOIN marcas M ON V.id_marca = M.id_marca 
            INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
            INNER JOIN anios A ON V.id_anio = A.id_anio 
            INNER JOIN colores Co ON V.id_color = Co.id_color 
            INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto
            INNER JOIN semanasolalta SA ON R.id_semana = SA.id_semSolAlta
            WHERE P.estadoProyectoEliminado = 1 ORDER BY R.id_regSolicitud DESC";
            $resultado = mysqli_query($conexion, $query);
            ?>
            <div class="modal-body">
                <div class="card-body">
                    <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Folio Solicitud Alta</th>
                                <th>Semana Solicitud de Alta</th>
                                <th>Núm. Orden</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Año</th>
                                <th>Placa</th>
                                <th>Color</th>
                                <th>Descarga</th>
                                <!-- <th>Acciones</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td>
                                        <?php $cont++;
                                        echo $cont;
                                        ?>
                                    </td>
                                    <td>
                                        <span class='badge badge-dark badge-pill'><?php echo$row['id_proyecto'] ?></span>
                                    </td>
                                    <td style="width: 15%;">
                                        <?php echo $row['nProyecto']; ?>
                                    </td>
                                    <td style="width: 20%;">
                                        <?php echo "<strong>{$row['folioRegSolicitud']}</strong>" ?>
                                    </td>
                                    <td style="width: 15%;">
                                        <?php echo "<strong>{$row['semana']}</strong>" ?>
                                    </td>
                                    <td style="width: 10%;">
                                        <?php echo $row['nOrden'] ?>
                                    </td>
                                    <td style="width: 10%;">
                                        <?php echo $row['marca'] ?>
                                    </td>
                                    <td style="width: 10%;">
                                        <?php echo $row['modelo'] ?>
                                    </td>
                                    <td style="width: 10%;">
                                        <?php echo $row['anio'] ?>
                                    </td>
                                    <td style="width: 10%;">
                                        <?php echo $row['placa'] ?>
                                    </td>
                                    <td style="width: 40%;">
                                        <?php echo $row['color']; ?>
                                    </td>
                                    <td class="row justify-content-center">
                                        <button class='btn btn-secondary btn-sm cargarProyectoSolSemana' data-dismiss="modal" data-id_proyecto="<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-download"></i></button>
                                    </td>
                                </tr>
                            <?php
                            }
                            desconectar();
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Folio Solicitud Alta</th>
                                <th>Semana Solicitud de Alta</th>
                                <th>Núm. Orden</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Año</th>
                                <th>Placa</th>
                                <th>Color</th>
                                <th>Descarga</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

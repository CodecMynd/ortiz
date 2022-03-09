<!-- Modal -->
<div class="modal fade" id="modalSelecSuperCodIdentificador" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecciona: Registros Alta Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            $cont = 0;
            $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.proyCodIdentificador , V.placa, M.marca, Mo.modelo, A.anio, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, RA.id_regAlta, RA.folioRegAlta, RA.observAudiFinal, LV.link, Co.color, RC.valorCobro, RC.codIdentificador, RC.supervisado
                FROM proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                INNER JOIN anios A ON V.id_anio = A.id_anio 
                INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
                INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
                INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
                INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
                INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
                WHERE proyCodIdentificador = 1 AND supervisado = 0 ORDER BY nProyecto ASC";
            $resultado = mysqli_query($conexion, $query);
            ?>
            <div class="card-body">
                <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Código Identificador</th>
                            <th>Núm. Folio de Alta</th>
                            <th>Núm. Folio Solicitud Alta</th>
                            <th>Núm. Proyecto</th>
                            <th>Núm. Orden</th>
                            <th>Valor Venta Alta</th>
                            <th>Valor Cobro</th>
                            <th>Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado->fetch_assoc()) {
                            $idP = $row['id_proyecto'];
                            $folioRegAlta = $row['folioRegAlta'];
                            $id_regAlta = $row['id_regAlta'];
                        ?>
                            <tr>
                                <td>
                                    <?php $cont++;
                                    echo $cont;
                                    ?>
                                </td>
                                <td style="width: 25;">
                                    <?php echo $row['codIdentificador'] ?>
                                </td>
                                <td>
                                    <?php echo $row['folioRegAlta'] ?>
                                </td>
                                <td>
                                    <?php echo $row['folioRegSolicitud'] ?>
                                </td>
                                <td>
                                    <?php echo $row['nProyecto']; ?>
                                </td>
                                <td>
                                    <?php echo $row['nOrden'] ?>
                                </td>
                                <!-- <td>
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
                                </td> -->
                                <td>
                                    <?php echo $row['valorVentaAlta'] ?>
                                </td>
                                <td>
                                    <?php echo $row['valorCobro'] ?>
                                </td>
                                <td class="row justify-content-center">
                                    <button class='btn btn-secondary btn-sm cargarSuperCodIdentificador' data-dismiss="modal" data-id_proyecto="<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-download"></i></button>
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
                            <th>Código Identificador</th>
                            <th>Núm. Folio de Alta</th>
                            <th>Núm. Folio Solicitud Alta</th>
                            <th>Núm. Proyecto</th>
                            <th>Núm. Orden</th>
                            <th>Valor Venta Alta</th>
                            <th>Valor Cobro</th>
                            <th>Descargar</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
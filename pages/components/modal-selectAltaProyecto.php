<!-- Modal -->
<div class="modal fade" id="modalSelectSolicitudAltaProyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecciona: Registro de Solicitud Alta Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            $cont = 0;
            $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.proyectoActivo, P.registroSolicitud, V.placa, M.marca, Mo.modelo, A.anio, R.folioRegSolicitud 
            FROM proyectos P 
            INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
            INNER JOIN marcas M ON V.id_marca = M.id_marca 
            INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
            INNER JOIN anios A ON V.id_anio = A.id_anio 
            INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
            INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto
            WHERE P.registroSolicitud = 1 AND P.estadoProyectoEliminado = 1 ORDER BY nProyecto ASC;";
            $resultado = mysqli_query($conexion, $query);
            ?>
            <div class="card-body">
                <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Núm. Folio Solicitud Alta</th>
                            <th>Núm. Proyecto</th>
                            <th>Núm. Orden</th>
                            <th>Placas</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Descargar</th>
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
                                <td><span class='badge badge-dark badge-pill'><?php echo $row['id_proyecto'] ?></span></td>
                                <td style="width:20%">
                                    <?php echo $row['folioRegSolicitud'] ?>
                                </td>
                                <td style="width:15%">
                                    <?php echo $row['nProyecto']; ?>
                                </td>
                                <td style="width:15%">
                                    <?php echo $row['nOrden'] ?>
                                </td>
                                <td>
                                    <?php echo $row['placa'] ?>
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
                                <td class="row justify-content-center">
                                    <button class='btn btn-secondary btn-sm cargarAltaProyecto' data-dismiss="modal" data-id_proyecto="<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-download"></i></button>
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
                            <th>Núm. Folio Solicitud Alta</th>
                            <th>Núm. Proyecto</th>
                            <th>Núm. Orden</th>
                            <th>Placas</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Descargar</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalSelectProyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecciona: Proyecto Activo para realizar Solicitud</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- consulta sql -->
            <?php
            $cont = 0;
            $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, V.placa, M.marca, Mo.modelo, A.anio, C.nombres, C.aPaternoCliente, C.aMaternoCliente, Co.color
            FROM proyectos P 
            INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
            INNER JOIN marcas M ON V.id_marca = M.id_marca 
            INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
            INNER JOIN anios A ON V.id_anio = A.id_anio 
            INNER JOIN colores Co ON V.id_color = Co.id_color 
            INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
            WHERE P.proyectoActivo = 1 AND P.registroSolicitud = 0 AND P.estadoProyectoEliminado = 1 ORDER BY nProyecto ASC;";
            $resultado = mysqli_query($conexion, $query);
            ?>
            <div class="modal-body">
                <div class="card-body">
                    <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Núm. Proyecto</th>
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
                                    <td style="width: 50%;">
                                        <?php echo $row['nProyecto']; ?>
                                    </td>
                                    <td style="width: 50%;">
                                        <?php echo $row['nOrden'] ?>
                                    </td>
                                    <td style="width: 40%;">
                                        <?php echo $row['marca'] ?>
                                    </td>
                                    <td style="width: 40%;">
                                        <?php echo $row['modelo'] ?>
                                    </td>
                                    <td style="width: 40%;">
                                        <?php echo $row['anio'] ?>
                                    </td>
                                    <td style="width: 40%;">
                                        <?php echo $row['placa'] ?>
                                    </td>
                                    <td style="width: 40%;">
                                        <?php echo $row['color']; ?>
                                    </td>
                                    <td class="row justify-content-center">
                                        <button class='btn btn-secondary btn-sm cargarProyecto' data-dismiss="modal" data-id_proyecto="<?php echo $row['id_proyecto'] ?>"><i class="fa-solid fa-download"></i></button>
                                    </td>
                                </tr>
                            <?php
                                require '../components/modal-eliminarProyecto.php';
                            }
                            desconectar();
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Orden</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Año</th>
                                <th>Placa</th>
                                <th>Color</th>
                                <th>Descarga</th>
                                <!-- <th>Acciones</th> -->
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

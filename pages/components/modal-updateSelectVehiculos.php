<!-- Modal -->
<div class="modal fade" id="modalUpdateSelectVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecciona un Vehículo para Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- consulta sql -->
            <?php
            $cont = 0;
            $query1 = "SELECT M.marca, Mo.modelo, A.anio, V.placa, C.color, V.id_vehiculo, V.id_vehiculo
                                FROM vehiculos V INNER JOIN marcas M ON V.id_marca = M.id_marca
                                 INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                 INNER JOIN anios A ON V.id_anio = A.id_anio
                                 INNER JOIN colores C ON V.id_color = C.id_color
                                  ";
            $resultado1 = mysqli_query($conexion, $query1);
            ?>

            <div class="card-body">
                <table id="tableVehiculos" class="table table-sm table-bordered table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Placas</th>
                            <th>Color</th>
                            <th>Selecciona</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado1->fetch_assoc()) {
                            $vehiculo = $row['marca'] . ' | ' . $row['modelo'] . ' | ' . $row['anio'] . ' | ' . $row['placa'] . ' | '. $row['color'];
                        ?>
                            <tr>
                                <td>
                                    <?php $cont++;
                                    echo $cont;
                                    ?>
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
                                    <button class='btn btn-success btn-sm updateCargarVehiculo' data-id_vehiculo="<?php echo $row['id_vehiculo'] ?>">Cargar</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Placas</th>
                            <th>Color</th>
                            <th>Selecciona</th>
                        </tr>
                    </tfoot>
                </table>
                <div class="col-md-2">
                    <a data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar"><i class="fa-solid fa-xmark"></i> Salir</a>
                </div>
            </div>
        </div>
    </div>
</div>
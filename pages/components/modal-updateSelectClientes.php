<!-- Modal -->
<div class="modal fade" id="modalUpdateSelectCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Selecciona un Cliente para Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- consulta sql -->
            <?php
            $cont = 0;
            $query = "SELECT id_cliente, nombres, aPaternoCliente, aMaternoCliente, cel, status FROM clientes ORDER BY nombres DESC";
            $resultado = mysqli_query($conexion, $query);
            ?>
            <div class="modal-body">
                <div class="card-body">
                    <table id="tablePermisos" class="table table-sm table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre Cliente</th>
                                <th>Celular</th>
                                <th>Estado</th>
                                <th>Selecciona</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $resultado->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td>
                                        <?php $cont++;
                                        echo $cont;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $nombres = $row['nombres'];
                                        $aPaterno = $row['aPaternoCliente'];
                                        $aMaterno = $row['aMaternoCliente'];
                                        echo $nomCompClie = $nombres . ' ' . $aPaterno . ' ' . $aMaterno;
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row['cel'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row['status'] == 1) {
                                            echo '<span class="badge badge-pill badge-danger">En uso</span>';
                                        } else {
                                            echo '<span class="badge badge-pill badge-success">Libre</span>';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <button class='btn btn-success btn-sm UpdateCargarCliente' data-id_cliente="<?php echo $row['id_cliente'] ?>">Cargar</button>
                                    </td>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombre Cliente</th>
                                <th>Celular</th>
                                <th>Estado</th>
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
</div>
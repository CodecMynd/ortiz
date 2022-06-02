<?php
require '../components/head-main.php';
?>
<!-- Modal -->
<div class="modal fullscreen-modal fade" id="modal-verGralRecPzsDanadas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                R.linkRecPzsDanadas, T.tecArmador, ASE.asesor
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                LEFT join tecarmadores T ON R.id_tecArmador = T.id_tecArmador
                LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
	            LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
                WHERE P.id_Proyecto =   $id_proyecto";
                $resultado1 = mysqli_query($conexion, $query1);
                $row1 = $resultado1->fetch_assoc();

                ?>
                <table id="tableRegProyectos" class="table table-responsive table-sm table-bordered table-striped" style="width: 100%;">
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
                <table class="table table-responsive table-sm table-bordered table-striped" style="width: 100%;">
                    <thead class="thead-dark">
                        <tr>
                            <th>Link de Desarmado</th>
                            <th>Asesor</th>
                            <th>Técnico Armador</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo (empty($row1['linkRecPzsDanadas'])) ? 'Sin Registro' : $row1['linkRecPzsDanadas'] ?></td>
                            <td><?php echo (empty($row1['asesor'])) ? 'Sin Registro' : $row1['asesor'] ?></td>
                            <td><?php echo (empty($row1['tecArmador'])) ? 'Sin Registro' : $row1['tecArmador'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <h5 class="text-center"><strong> Solicitud(es) de Pieza(s)</strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId,
                S.id_solPzsDanadas, S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
                S.borrado, S.enUso, S.regCompraInicial,
                U.nombres, U.aPaterno, U.aMaterno,
                RC.id_regCompraInicial,RC.precio, RC.modalidadPago, RC.borrado AS borradoRegComInicial,
                RC.fecha_creacion AS fechaCompra, PR.nomProvee,
                UCI.nombres AS nomc, UCI.aPaterno AS patc, UCI.aMaterno as matc
                from proyectos P 
                LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
                LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
                LEFT JOIN usuarios U ON S.id_capC = U.id_usuario
                LEFT JOIN regcomprainicial RC ON S.id_solPzsDanadas = RC.id_solPzsDanadas
                  LEFT JOIN usuarios UCI ON RC.id_capC = UCI.id_usuario
                LEFT JOIN proveedores PR ON RC.id_proveedor = PR.id_proveedor
                WHERE P.id_Proyecto = $id_proyecto AND P.proyectoActivo = 1 AND S.borrado = 0 ORDER BY S.fecha_creacion DESC";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <div class="container">
                    <div id="table_refresh">
                        <table id="tableUpdateRecPzsDanadas" class="table table-responsive table-sm table-bordered table-striped" style="width: 100%;">
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
                                    <th>Proveedor</th>
                                    <th>Modo de Pago</th>
                                    <th>Costo Credito</th>
                                    <th>Costo Contado</th>
                                    <th>Fecha Registro Compra Inicial</th>
                                    <th>Capturista Registro Compra Inicial</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $resultado->fetch_assoc()) {
                                    $id_proyecto = $row['id_proyecto'];
                                    $nP = $row['nProyecto'];
                                    $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                    $captCompra = $row['nomc'] . ' ' . $row['patc'] . ' ' . $row['matc'];
                                    $linkId = (empty($row['linkId'])) ? '' : $row['linkId'];
                                    $id_solPzsDanadas = $row['id_solPzsDanadas'];
                                    $folio_solicitud = $row['folio_solicitud'];
                                    $id_regCompraInicial = $row['id_regCompraInicial'];
                                    $nomProvee = $row['nomProvee'];
                                    $regCompraInicial = $row['regCompraInicial'];

                                    // costo Credito o contado
                                    if ($row['modalidadPago'] == 'Crédito') {
                                        $Credito = $row['precio'];
                                        $Contado = 0;
                                    } else if ($row['modalidadPago'] == 'Contado') {
                                        $Credito = 0;
                                        $Contado = $row['precio'];
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
                                            <?php echo (empty($row['folio_solicitud'])) ? 'Sin Registro' : "<h6><span class='badge badge-success badge-pill'>{$row['folio_solicitud']}</span></h6>" ?>
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
                                        <td>
                                            <?php echo (empty($row['nomProvee'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['nomProvee']; ?>
                                        </td>
                                        <td>
                                            <?php echo (empty($row['modalidadPago'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['modalidadPago']; ?>
                                        </td>
                                        <td style="width:8%">
                                            <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Credito</strong>" ?>
                                        </td>
                                        <td style="width:8%">
                                            <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Contado</strong>" ?>
                                        </td>
                                        <td>
                                            <?php echo (empty($row['fechaCompra'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['fechaCompra']; ?>
                                        </td>
                                        <td>
                                            <?php echo (empty($captCompra)) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $captCompra ?>
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
                                    <th>Proveedor</th>
                                    <th>Modo de Pago</th>
                                    <th class="suma"></th>
                                    <th class="suma"></th>
                                    <th>Fecha Registro Compra Inicial</th>
                                    <th>Capturista Registro Compra Inicial</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Consulta: Registros Solicitudes de Piezas Eliminadas del Número de Proyecto: <?php echo $row1['nProyecto'] ?> </strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId,
             S.id_solPzsDanadas, S.folio_solicitud, S.cantidad, S.descripcion, S.minVideo, S.fecha_creacion,
             S.borrado, S.enUso, S.regCompraInicial, S.fecha_borrado,
             U.nombres, U.aPaterno, U.aMaterno,
             RC.id_regCompraInicial,RC.precio, RC.modalidadPago, RC.borrado AS borradoRegComInicial,
             RC.fecha_creacion AS fechaCompra, PR.nomProvee,
             U.nombres AS nomS, U.aPaterno AS patS, U.aMaterno as matS,
             US.nombres AS nomB, US.aPaterno AS patB, US.aMaterno AS matB,
             UC.nombres AS nomC, UC.aPaterno AS patC, UC.aMaterno AS matC
             from proyectos P 
             LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
             LEFT JOIN solpzsdanadas S ON R.id_recPzsDanadas = S.id_recPzsDanadas
             LEFT JOIN usuarios U ON S.id_capC = U.id_usuario
             LEFT JOIN regcomprainicial RC ON S.id_solPzsDanadas = RC.id_solPzsDanadas
             LEFT JOIN usuarios US ON S.id_capB = US.id_usuario
             LEFT JOIN proveedores PR ON RC.id_proveedor = PR.id_proveedor
             LEFT JOIN usuarios UC ON RC.id_capC = UC.id_usuario
             WHERE P.id_Proyecto = $id_proyecto AND P.proyectoActivo = 1 AND S.borrado = 1 ORDER BY S.fecha_borrado DESC";
                $resultado = mysqli_query($conexion, $query); ?>
                <div id="table_refresh2">
                    <table id="tableUpdateRecPzsDanadasEliminados" class="table table-responsive table-sm table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Folio</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Minuto de Video</th>
                                <th>Capturista que Eliminó</th>
                                <th>Fecha Eliminación</th>
                                <th>Capturista Solicitante</th>
                                <th>Fecha Solicitud</th>
                                <th>Proveedor</th>
                                <th>Modo de Pago</th>
                                <th>Costo Credito</th>
                                <th>Costo Contado</th>
                                <th>Fecha Registro Compra Inicial</th>
                                <th>Capturista Registro Compra Inicial</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $resultado->fetch_assoc()) {
                                $id_proyecto = $row['id_proyecto'];
                                $nP = $row['nProyecto'];
                                $solicitanteS = $row['nomS'] . ' ' . $row['patS'] . ' ' . $row['matS'];
                                $solicitanteB = $row['nomB'] . ' ' . $row['patB'] . ' ' . $row['matB'];
                                $captCompra = $row['nomC'] . ' ' . $row['patC'] . ' ' . $row['matC'];
                                $linkId = (empty($row['linkId'])) ? '' : $row['linkId'];
                                $id_solPzsDanadas = $row['id_solPzsDanadas'];
                                $folio_solicitud = $row['folio_solicitud'];

                                // costo Credito o contado
                                if ($row['modalidadPago'] == 'Crédito') {
                                    $Credito = $row['precio'];
                                    $Contado = 0;
                                } else if ($row['modalidadPago'] == 'Contado') {
                                    $Credito = 0;
                                    $Contado = $row['precio'];
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
                                        <?php echo (empty($row['folio_solicitud'])) ? 'Sin Registro' : "<h6><span class='badge badge-danger badge-pill'>{$row['folio_solicitud']}</span></h6>" ?>
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
                                        <?php echo (empty($solicitanteB)) ? 'Sin Registro' : $solicitante; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['fecha_borrado'])) ? 'Sin Registro' : $row['fecha_borrado']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($solicitanteS)) ? 'Sin Registro' : $solicitante; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['nomProvee'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['nomProvee']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['modalidadPago'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['modalidadPago']; ?>
                                    </td>
                                    <td style="width:8%">
                                        <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Credito</strong>" ?>
                                    </td>
                                    <td style="width:8%">
                                        <?php echo (empty($row['modalidadPago'])) ? 0 : "<strong>$Contado</strong>" ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['fechaCompra'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['fechaCompra']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($captCompra)) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $captCompra ?>
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
                                <th>Capturista que Eliminó</th>
                                <th>Fecha Eliminación</th>
                                <th>Capturista Solicitante</th>
                                <th>Fecha Solicitud</th>
                                <th>Proveedor</th>
                                <th>Modo de Pago</th>
                                <th class="suma"></th>
                                <th class="suma"></th>
                                <th>Fecha Registro Compra Inicial</th>
                                <th>Capturista Registro Compra Inicial</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <?php
                desconectar();
                ?>
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
// require '../ajax/plugins-datatable.php';
?>
<script src="../ajax/formUpdateRecPzsDanadas.js"></script>
<script src="../ajax/tableVarios.js"></script>
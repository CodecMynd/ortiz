<?php
require '../components/head-main.php';
?>
<script>
    function abrirModal1(id_proyecto, nProyecto, id_regSolpzadicional, folioPzAdicional) {
        $("#btnModal-eliminarAgregadoPzsAdicionales").click();
        $("#id_proyecto").val(id_proyecto);
        $("#nProyecto").val(nProyecto);
        $("#id_regSolpzadicional").val(id_regSolpzadicional);
        $("#folioPzAdicional").val(folioPzAdicional);
        $("#folioPzAdicionalText").html(folioPzAdicional);
        $("#tituloModal").html(nProyecto);
    }
    </script>
<!-- Modal -->
<div class="modal fullscreen-modal fade verGralRegSolPzsAdicionales" id="modal-verGralRegSolPzsAdicionales" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">4.2.2 Ver Generales Solicitud de Piezas Adicionales</h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
            </div>
            <!-- consulta sql -->
            <div class="modal-body">
                <h5 class="text-center"><strong> Consulta: Registros del Proyecto</strong></h5>
                <?php
                $id_proyecto = $_REQUEST['id_proyecto'];
                $query1 = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
                V.placa, Co.color, M.marca, Mo.modelo, An.anio,
				A.asesor, T.tecArmador
                from proyectos P 
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
                INNER JOIN colores Co ON V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca 
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios An ON V.id_anio = An.id_anio 
                LEFT JOIN registrosolicitudpzsadicionales R ON P.id_proyecto = R.id_proyecto
                LEFT JOIN asesores A ON R.id_asesor = A.id_asesor
                LEFT JOIN tecarmadores T ON R.id_tecArmador = T.id_tecArmador
                WHERE P.id_Proyecto = $id_proyecto";
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
                            <th>Asesor</th>
                            <th>Técnico Armador</th>
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
                            <td><?php echo (empty($row1['asesor'])) ? 'Sin Registro' : $row1['asesor'] ?></td>
                            <td><?php echo (empty($row1['tecArmador'])) ? 'Sin Registro' : $row1['tecArmador'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <hr>
                <h5 class="text-center"><strong> Solicitud(es) de Pieza(s) Adicional(es)</strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
                V.placa, M.marca, Mo.modelo, A.anio, Co.color,
                R.id_regSolpzadicional, R.folioPzAdicional, R.cantidad, R.precio, R.modalidadPago, R.enUso, 
                R.fecha_creacion, R.motivo, R.descripcionpzadicional,
                TA.tecArmador, ASE.asesor,
                U.nombres, U.aPaterno, U.aMaterno,
                PR.nomProvee
                FROM proyectos P
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
                INNER JOIN colores Co On V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios A ON V.id_anio = A.id_anio
                LEFT JOIN registrosolicitudpzsadicionales R ON P.id_proyecto = R.id_proyecto
                LEFT JOIN tecarmadores TA ON R.id_tecArmador = TA.id_tecArmador
                LEFT JOIN asesores ASE ON R.id_asesor = ASE.id_asesor
                LEFT JOIN usuarios U ON R.id_capC = U.id_usuario
                LEFT JOIN proveedores PR ON R.id_proveedor = PR.id_proveedor
                WHERE P.id_proyecto = 1 AND R.borrado = 0";
                $resultado = mysqli_query($conexion, $query);
                ?>
                <div class="container">
                    <table id="tableVarios1" class="table table-sm table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Folio Pieza Adicional</th>
                                <th>Motivo</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Proveedor</th>
                                <th>Modo de Pago</th>
                                <th>Costo Credito</th>
                                <th>Costo Contado</th>
                                <th>Fecha Solicitud Pieza Adicional</th>
                                <th>Capturista Solicitud Pieza Adicional</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $resultado->fetch_assoc()) {
                                $id_proyecto = $row['id_proyecto'];
                                $nP = $row['nProyecto'];
                                $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                $folioPzAdicional = $row['folioPzAdicional'];
                                $nomProvee = $row['nomProvee'];
                                $id_regSolpzadicional = $row['id_regSolpzadicional'];


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
                                        <?php echo $row['nProyecto'] ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($folioPzAdicional)) ? 'Sin Registro' : "<h6><span class='badge badge-success badge-pill'>{$folioPzAdicional}</span></h6>" ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['motivo'])) ? 'Sin Registro' : $row['motivo']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['cantidad'])) ? 'Sin Registro' : $row['cantidad']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['descripcionpzadicional'])) ? 'Sin Registro' : $row['descripcionpzadicional']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($nomProvee)) ? 'Sin Registro' : $nomProvee  ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['modalidadPago'])) ? 'Sin Registro' : $row['modalidadPago']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($Credito)) ? 0 : $Credito ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($Contado)) ? 0 : $Contado ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['fecha_creacion'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['fecha_creacion']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración  tabla Marcas"> Acciones</span>
                                                </button>
                                                <ul class='dropdown-menu text-center' style='columns:2; min-width:2em;'>
                                                    <li class="dropdown-item">
                                                        <span data-toggle="tooltip" title="4.2.3 Eliminar Agregado de Solicitud de Piezas Adicionales (Eliminar toda la fila)">
                                                            <?php
                                                            if ($super == 1) {
                                                                echo "<a href='#' onclick='abrirModal1(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_regSolpzadicional . "\",\"".$folioPzAdicional."\")' class='btn btn-secondary'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            } else if ($super == 1) {
                                                                echo  "<a class='btn btn-outline-danger' id='eliAgregadoSolpzsAdicionales' data-toggle='tooltip' data-placement='bottom' title='Primero Borra Registro de Compra Inicial'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            } else if ($eliAgregadoSolpzsAdicionales == 1) {
                                                                echo "<a href='#' onclick='abrirModal1(\"" . $id_proyecto . "\",\"" . $nP . "\", \"" . $id_regSolpzadicional . "\",\"".$folioPzAdicional."\")' class='btn btn-secondary'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            } else {
                                                                echo  "<a class='btn btn-outline-danger' id='eliAgregadoSolpzsAdicionales' data-toggle='tooltip' data-placement='bottom' title='Sin Permiso'><i class='fa-solid fa-trash-alt'></i></a>";
                                                            }
                                                            ?>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Folio Pieza Adicional</th>
                                <th>Motivo</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Proveedor</th>
                                <th>Modo de Pago</th>
                                <th class="suma">Costo Credito</th>
                                <th class="suma">Costo Contado</th>
                                <th>Fecha Solicitud Pieza Adicional</th>
                                <th>Capturista Solicitud Pieza Adicional</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                    <button id="btnModal-eliminarAgregadoPzsAdicionales" class="btn btn-white" data-toggle="modal" data-target=".eliminarAgregadoPzsAdicionales"></button>
                    <?php
                    require '../components/modal-eliminarAgregadoPzsAdicionales.php';
                    ?>
                </div>
                <br>
                <hr>
                <br>
                <h5 class="text-center"><strong> Consulta: Registros Solicitudes de Piezas Adicionales Eliminadas del Número de Proyecto: <?php echo $row1['nProyecto'] ?> </strong></h5>
                <?php
                $cont = 0;
                $query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.estadoProyectoEliminado,
                V.placa, M.marca, Mo.modelo, A.anio, Co.color,
                R.folioPzAdicional, R.cantidad, R.precio, R.modalidadPago, R.enUso, 
                R.fecha_creacion, R.motivo, R.descripcionpzadicional,
                TA.tecArmador, ASE.asesor,
                U.nombres, U.aPaterno, U.aMaterno,
                PR.nomProvee
                FROM proyectos P
                INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
                INNER JOIN colores Co On V.id_color = Co.id_color
                INNER JOIN marcas M ON V.id_marca = M.id_marca
                INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
                INNER JOIN anios A ON V.id_anio = A.id_anio
                LEFT JOIN registrosolicitudpzsadicionales R ON P.id_proyecto = R.id_proyecto
                LEFT JOIN tecarmadores TA ON R.id_tecArmador = TA.id_tecArmador
                LEFT JOIN asesores ASE ON R.id_asesor = ASE.id_asesor
                LEFT JOIN usuarios U ON R.id_capC = U.id_usuario
                LEFT JOIN proveedores PR ON R.id_proveedor = PR.id_proveedor
                WHERE P.id_proyecto = 1 AND R.borrado = 1";
                $resultado = mysqli_query($conexion, $query); ?>
                <div class="container">
                    <table id="tableVarios2" class="table table-sm table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Folio Pieza Adicional</th>
                                <th>Motivo</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Proveedor</th>
                                <th>Modo de Pago</th>
                                <th>Costo Credito</th>
                                <th>Costo Contado</th>
                                <th>Fecha Solicitud Pieza Adicional</th>
                                <th>Capturista Solicitud Pieza Adicional</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $resultado->fetch_assoc()) {
                                $id_proyecto = $row['id_proyecto'];
                                $nP = $row['nProyecto'];
                                $solicitante = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];
                                $folioPzAdicional = $row['folioPzAdicional'];
                                $nomProvee = $row['nomProvee'];


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
                                        <?php echo $row['nProyecto'] ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($folioPzAdicional)) ? 'Sin Registro' : "<h6><span class='badge badge-danger badge-pill'>{$folioPzAdicional}</span></h6>" ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['motivo'])) ? 'Sin Registro' : $row['motivo']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['cantidad'])) ? 'Sin Registro' : $row['cantidad']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['descripcionpzadicional'])) ? 'Sin Registro' : $row['descripcionpzadicional']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($nomProvee)) ? 'Sin Registro' : $nomProvee  ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['modalidadPago'])) ? 'Sin Registro' : $row['modalidadPago']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($Credito)) ? 0 : $Credito ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($Contado)) ? 0 : $Contado ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($row['fecha_creacion'])) ? "<h6><span class='badge badge-danger badge-pill'>N/A</span></h6>" : $row['fecha_creacion']; ?>
                                    </td>
                                    <td>
                                        <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Núm. Proyecto</th>
                                <th>Núm. Folio Pieza Adicional</th>
                                <th>Motivo</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Proveedor</th>
                                <th>Modo de Pago</th>
                                <th class="suma">Costo Credito</th>
                                <th class="suma">Costo Contado</th>
                                <th>Fecha Solicitud Pieza Adicional</th>
                                <th>Capturista Solicitud Pieza Adicional</th>
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

<script src="../ajax/tableGralPzsAdicionales.js"><script/>
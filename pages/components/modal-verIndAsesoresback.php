<?php

if ($super == 1 or $indMensajes == 1) {
?>
    <style>
        .celda {
            background-color: #5A6268;
            color: #fff;
            font-size: 40;
            font-weight: 900;
            text-align: center;
        }
    </style>
    <div class="modal fade verIndAsesores" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Estatus Comprobados / No Comprobados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                $query = "SELECT asesor FROM asesores GROUP BY asesor";
                $respuesta = mysqli_query($conexion, $query);
                ?>
                <div class="modal-body">
                    <table id="tableIndicadorAsesor" class="table table-sm table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Asesor</th>
                                <!-- <th>Total de Registros</th> -->
                                <th>Comprobados</th>
                                <th>Sin Comprobar</th>
                                <th>Sin Registro</th>
                                <th>Suma <small>Sin Comprobar/Sin Registro</small></th>
                                <th>Fecha Actual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = $respuesta->fetch_assoc()) {
                                $asesor = $row['asesor'];

                                $query2 = "SELECT 
                                         (SELECT count(asesor)
                                         FROM verificacion
                                         WHERE FV = '$fecha_mensaje' AND asesor = '$asesor'
                                         ) AS count_1, 
                                        
                                         (SELECT count( asesor)
                                         FROM verificacion
                                         WHERE FV <> '$fecha_mensaje' AND asesor = '$asesor'
                                         ) AS count_2,
                                        
                                         (SELECT count(asesor)
                                          FROM verificacion
                                          WHERE FV IS NULL AND asesor = '$asesor'
                                         ) AS count_3;";
                                $resultado2 = mysqli_query($conexion, $query2);

                                while ($row2 = $resultado2->fetch_assoc()) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $asesor ?>
                                        </td>
                                        <td>
                                            <?php echo $row2['count_1'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row2['count_2'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row2['count_3'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row2['count_2'] + $row2['count_3'] ?>
                                        </td>
                                        <td>
                                            <?php echo $fecha_mensaje ?>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Asesor</th>
                                <!-- <th>Total de Registros</th> -->
                                <th class="suma"></th>
                                <th class="suma"></th>
                                <th class="suma"></th>
                                <th class="suma"></th>
                                <th>Fecha Actual</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<!-- SELECT P.id_proyecto,                                     
MAX(CV.fecha_hoyV) AS FV, MAX(CV.fecha_hoyS) AS FS, MAX(CV.id_comverifdiariaveh) AS id_comverifdiariaveh,
ASE.asesor
FROM proyectos P
LEFT JOIN comverifdiariaveh CV ON P.id_proyecto = CV.id_proyecto
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 GROUP BY P.id_proyecto -->
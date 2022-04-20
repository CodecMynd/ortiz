<?php

// // total de asesor Alcalde
// $count_reg_asesor1 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Alcalde'");
$count_reg_asesor1SI = mysqli_query($conexion, "SELECT id_proyecto, asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'Alcalde'");
$count_reg_asesor1NO = mysqli_query($conexion, "SELECT id_proyecto, asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'Alcalde'");
$count_reg_asesor1NULL = mysqli_query($conexion, "SELECT id_proyecto, asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'Alcalde'");

// // total de asesor Hilario
// $count_reg_asesor2 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Hilario'");
$count_reg_asesor2SI = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'Hilario'");
$count_reg_asesor2NO = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'Hilario'");
$count_reg_asesor2NULL = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'Hilario'");

// // total de asesor 	UDG
// $count_reg_asesor3 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'UDG'");
$count_reg_asesor3SI = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'UDG'");
$count_reg_asesor3NO = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'UDG'");
$count_reg_asesor3NULL = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'UDG'");

// total de asesor 	Tlaquepaque A
// $count_reg_asesor4 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Tlaquepaque A'");
$count_reg_asesor4SI = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'Tlaquepaque A'");
$count_reg_asesor4NO = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'Tlaquepaque A'");
$count_reg_asesor4NULL = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'Tlaquepaque A'");

// total de asesor Tlaquepaque B
// $count_reg_asesor5 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Tlaquepaque B'");
$count_reg_asesor5SI = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'Tlaquepaque B'");
$count_reg_asesor5NO = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'Tlaquepaque B'");
$count_reg_asesor5NULL = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'Tlaquepaque B'");

// total de asesor Modificación Sistema
// $count_reg_asesor6 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Modificación Sistema'");
$count_reg_asesor6SI = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'Modificación Sistema'");
$count_reg_asesor6NO = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'Modificación Sistema'");
$count_reg_asesor6NULL = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'Modificación Sistema'");

// total de asesor Proveedor Externo Prolongado
// $count_reg_asesor7 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Proveedor Externo Prolongado'");
$count_reg_asesor7SI = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'Proveedor Externo Prolongado'");
$count_reg_asesor7NO = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'Proveedor Externo Prolongado'");
$count_reg_asesor7NULL = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'Proveedor Externo Prolongado'");

// total de asesor Tlaquepaque C
// $count_reg_asesor8 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Tlaquepaque C'");
$count_reg_asesor8SI = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV = '$fecha_mensaje' AND asesor = 'Tlaquepaque C'");
$count_reg_asesor8NO = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV <> '$fecha_mensaje' AND asesor = 'Tlaquepaque C'");
$count_reg_asesor8NULL = mysqli_query($conexion, "SELECT asesor, FV FROM verificacion WHERE FV IS NULL AND asesor = 'Tlaquepaque C'");

// total de asesor Sin Asesor
//  $count_reg_asesor8 = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor = 'Tlaquepaque C'");
 $count_reg_asesor9SI = mysqli_query($conexion, "SELECT asesor FROM verificacion WHERE asesor IS NULL ");



?>
<style>
    .celda{
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
                        <tr>
                            <td style="width: 25%;">Alcalde</td>
                            <td style="width: 15%;"><strong><?php echo mysqli_num_rows($count_reg_asesor1SI) ?></strong></h6></td>
                            <td style="width: 15%;"><?php echo mysqli_num_rows($count_reg_asesor1NO) ?></td>
                            <td style="width: 15%;"><?php echo mysqli_num_rows($count_reg_asesor1NULL) ?></td>
                            <td class="celda" style="width: 20%;"><?php echo mysqli_num_rows($count_reg_asesor1NO)+mysqli_num_rows($count_reg_asesor1NULL) ?></td>
                            <td style="width: 10%;"><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>Hilario</td>
                            <td><strong><?php echo mysqli_num_rows($count_reg_asesor2SI) ?></strong></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor2NO) ?></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor2NULL) ?></td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor2NO)+mysqli_num_rows($count_reg_asesor2NULL) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>UDG</td>
                            <td><strong><?php echo mysqli_num_rows($count_reg_asesor3SI) ?></strong></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor3NO) ?></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor3NULL) ?></td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor3NO)+mysqli_num_rows($count_reg_asesor3NULL) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>Tlaquepaque A</td>
                            <td><strong><?php echo mysqli_num_rows($count_reg_asesor4SI) ?></strong></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor4NO) ?></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor4NULL) ?></td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor4NO)+mysqli_num_rows($count_reg_asesor4NULL) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>Tlaquepaque B</td>
                            <td><strong><?php echo mysqli_num_rows($count_reg_asesor5SI) ?></strong></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor5NO) ?></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor5NULL) ?></td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor5NO)+mysqli_num_rows($count_reg_asesor5NULL) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>Modificación Sistema</td>
                            <td><strong><?php echo mysqli_num_rows($count_reg_asesor6SI) ?></strong></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor6NO) ?></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor6NULL) ?></td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor6NO)+mysqli_num_rows($count_reg_asesor6NULL) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>Proveedor Externo Prolongado</td>
                            <td><strong><?php echo mysqli_num_rows($count_reg_asesor7SI) ?></strong></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor7NO) ?></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor7NULL) ?></td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor7NO)+mysqli_num_rows($count_reg_asesor7NULL) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>Tlaquepaque C</td>
                            <td><strong><?php echo mysqli_num_rows($count_reg_asesor8SI) ?></strong></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor8NO) ?></td>
                            <td><?php echo mysqli_num_rows($count_reg_asesor8NULL) ?></td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor8NO)+mysqli_num_rows($count_reg_asesor8NULL) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
                        <tr>
                            <td>Sin Asesor</td>
                            <td> 0 </td>
                            <td> 0 </td>
                            <td> <?php echo mysqli_num_rows($count_reg_asesor9SI) ?> </td>
                            <td class="celda"><?php echo mysqli_num_rows($count_reg_asesor9SI) ?></td>
                            <td><?php echo $fecha_mensaje?></td>
                        </tr>
   
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

<!-- SELECT P.id_proyecto,                                     
MAX(CV.fecha_hoyV) AS FV, MAX(CV.fecha_hoyS) AS FS, MAX(CV.id_comverifdiariaveh) AS id_comverifdiariaveh,
ASE.asesor
FROM proyectos P
LEFT JOIN comverifdiariaveh CV ON P.id_proyecto = CV.id_proyecto
LEFT JOIN comasesor CA ON P.id_proyecto = CA.id_proyecto
LEFT JOIN asesores ASE ON CA.id_asesor = ASE.id_asesor
WHERE P.proyectoActivo = 1 AND P.estadoProyectoEliminado = 1 OR P.registroSolicitud = 1 GROUP BY P.id_proyecto -->
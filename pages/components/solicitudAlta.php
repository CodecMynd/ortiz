<?php
ob_start();
?>
<!--<!DOCTYPE html>
<html lang="es">-->

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Solicitud Alta </title>

    <!-- Favicon -->
    <link rel="icon" href="../../src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="shortcut icon" href="../../src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="apple-touch-icon" href="../../src/img/logos/favicon.png" type="image/gif">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/bootstrap/bootstrap-5.0.2.min.css">
    <script src="../../plugins/bootstrap/bootstrap.min.js"></script>
    <style>
        /** 
                Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
                puede ser de altura y anchura completas.
             **/
        @page {
            margin: 0cm 0cm;
        }

        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            margin-top: 3.5cm;
            margin-left: 1cm;
            margin-right: 2.2cm;
            margin-bottom: 1cm;
            font-family: sans-serif;

        }

        /** Definir las reglas del encabezado **/
        header {
            position: fixed;
            top: .5cm;
            left: 1.3cm;
            right: 0cm;
            height: 3cm;
        }

        /** Definir las reglas del pie de página **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }

        ul li {
            list-style-type: none;
            text-align: right;
            font-size: 12px;
            font-weight: 100;
            font-family: sans-serif;
        }

        .inputRespG {
            width: 17.7em;
            height: 5px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 13px;
            font-weight: 100;
            margin-bottom: 20px;
            font-family: sans-serif;
            padding-bottom: 10px;
        }

        .inputRespM {
            width: 16.1em;
            height: 5px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 13px;
            font-weight: 100;
            margin-bottom: 20px;
            font-family: sans-serif;
            padding-bottom: 10px;
        }

        .inputRespC {
            width: 7em;
            height: 5px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 13px;
            font-weight: 100;
            margin-bottom: 20px;
            font-family: sans-serif;
            padding-bottom: 10px;
        }

        .inputRespA {
            width: 9em;
            height: 5px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 13px;
            font-weight: 100;
            margin-bottom: 20px;
            font-family: sans-serif;
            padding-bottom: 10px;
        }

        input[type=text] {
            border: 0;
            border-bottom: .5px solid gray;
        }

        tr td {
            font-size: 15px;
            color: #000;
            font-weight: 100;
            font-family: sans-serif;
        }

        .titulo {
            font-size: 18px;
            color: #000;
            font-weight: 200;
            left: 0;
            margin-top: 0;
            margin-bottom: 0;
            font-family: sans-serif;
        }

        hr {
            border: 1px solid gray;
            width: 106%;
            margin: 0;
        }

        textarea {
            width: 52em;
            height: 55px;
            border: none;
            border-bottom: .5px solid gray;
            font-size: 14px;
            font-weight: 100;
            font-family: sans-serif;
            padding: 10px 5px;
        }

        .firma {
            padding-top: 90px;
            padding-left: 40%;
            width: 105px;
            height: 50px;
            text-align: center;
        }

        .logoHeader {
            float: left;
            width: 35%;
            outline: none;
        }

        .titleHeader {
            text-align: right;
            float: left;
            width: 60%;
            outline: none;
        }

        .lineaHeader {
            /* position: fixed; */
            top: .5cm;
            left: 1cm;
            right: 0cm;
            height: 0cm;
            width: 100px;
        }

        .linea {
            border-top: 1px solid gray;
            width: 200px;
            text-align: center;
        }

        .contenedor-div {
            position: relative;
        }

        .capturista {
            position: absolute;
            bottom: 60px;
            left: 30px;
            font-size: 8px;
            color: gray;
        }

        .recuadro {
            border: 1px solid gray;
            padding: 15px 5px;
            border-radius: 25px;
            margin-top: 20px;
        }
    </style>
</head>
<?php
require '../components/head-main.php';

$id_proyecto = $_GET['id'];
// $id_proyecto = 1;
// $query = "SELECT id_proyecto FROM proyectos WHERE id_proyecto = $id_p";
// $respuesta = mysqli_query($conexion, $query);
// $rowP = $respuesta->fetch_assoc();
// $id_proyecto = $rowP['id_proyecto'];



$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, P.valorVenta, 
V.placa, M.marca, Mo.modelo,A.anio, C.color,
RS.folioRegSolicitud,RS.valorVentaAlta,RS.fecha_creacion, RS.inspecCalidad,RS.observCliente,
S.semana, U.nombres, U.aPaterno, U.aMaterno,
TA.tecArmador, TM1.tecMontador AS TM1, TM2.tecMontador AS TM2, TM3.tecMontador AS TM3, TM4.tecMontador AS TM4
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
INNER JOIN colores C ON V.id_color = C.id_color
INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto
INNER JOIN semanasolalta S ON RS.id_semana = S.id_semSolAlta
INNER JOIN usuarios U ON P.id_capC = U.id_usuario
INNER JOIN tecarmadores TA ON RS.tecArmador = TA.id_tecArmador
INNER JOIN tecmontadores TM1 ON RS.tecMontador1 = TM1.id_tecMontador
INNER JOIN tecmontadores TM2 ON RS.tecMontador2 = TM2.id_tecMontador
INNER JOIN tecmontadores TM3 ON RS.tecMontador3 = TM3.id_tecMontador
INNER JOIN tecmontadores TM4 ON RS.tecMontador4 = TM4.id_tecMontador
WHERE P.id_proyecto = ' . $id_proyecto . ' ';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();


$marca = $row['marca'];
$modelo = $row['modelo'];
$anio = $row['anio'];
$placa = $row['placa'];
$color = $row['color'];
$km = $row['km'];

$capturista = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];

$tipoReparacion = $row['tipoReparacion'];
$km = $row['km'];
$valorVenta = $row['valorVenta'];
$valorVentaAlta = $row['valorVentaAlta'];

?>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        <div class="logoHeader"><img src="../../src/img/logos/headerSolicitudAltaLogo.png" /></div>
        <div class="titleHeader">
            <h2>Solicitud de Alta</h2>
        </div>
    </header>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="lineaHeader"><img src="../../src/img/logos/headerSolicitudAltaLinea.png" /></div>
        <div class="container-fluid" style="width:107%">
            <div class="col-md-12">
                <ul class="float-right">
                    <li>Núm. Folio Solicitud Alta<input type="text" value="<?php echo $row['folioRegSolicitud'] ?>" style="width:115px"> </li>
                    <li>Fecha Solicitud Alta <input type="text" value="<?php echo $row['fecha_creacion'] ?>" style="width:115px;"></li>
                    <li>Número de Orden <input type="text" value="<?php echo $row['nOrden'] ?>" style="width:115px"></li>
                    <li>Número de Proyecto <input type="text" value="<?php echo $row['nProyecto'] ?>" style="width:115px"> </li>
                </ul>
            </div>
        </div>

        <div class="container ">
            <div class="col-12">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="titulo">Proyecto</th>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12">
                    <hr>
                </div>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Marca</td>
                            <td>Modelo</td>
                            <td>Año</td>
                            <td>Placa</td>
                            <td>Color</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $marca ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $modelo ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $anio ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $placa ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $color ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="titulo">Generales</th>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12">
                    <hr>
                </div>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Núm. Folio Solicitud de Alta</td>
                            <td>Núm Proyecto</td>
                            <td>Núm. de Orden</td>
                            <td>Tipo Reparación</td>
                            <td>Kilometraje</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['folioRegSolicitud'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['nProyecto'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['nOrden'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['tipoReparacion'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['km'] ?>"></td>

                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td>Valor Venta Inicial</td>
                            <td>Valor Venta Alta</td>
                            <td>Semana Solicitud de Alta</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $valorVenta ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $valorVentaAlta ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['semana'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Observación Inspección de Control de Calidad</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"><?php echo $row['inspecCalidad'] ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Observaciones Para el Cliente</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"><?php echo $row['observCliente'] ?></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-sm recuadro">
                    <tbody>
                        <tr>
                            <td>Técnico Armador </td>
                            <td>Técnico Montador 1</td>
                            <td>Técnico Montador 2</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespG" value="<?php echo $row['tecArmador'] ?>"></td>
                            <td><input type="text" class="inputRespG" value="<?php echo $row['TM1'] ?>"></td>
                            <td><input type="text" class="inputRespG" value="<?php echo $row['TM2'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Técnico Montador 3</td>
                            <td>Técnico Montador 4</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespG" value="<?php echo $row['TM3'] ?>"></td>
                            <td><input type="text" class="inputRespG" value="<?php echo $row['TM4'] ?>"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </main>
    <div class="contenedor-dv">
        <span class="capturista"><?php echo $nomComp . '-' . $row['fecha_creacion'] ?></span>
    </div>
    <footer>
        <img src="../../src/img/logos/footer.png" width="100%" />
    </footer>
</body>

</html>



<?php
$html = ob_get_clean();
// echo $html;

require '../../plugins/dompdf/autoload.inc.php';

use Dompdf\Dompdf; // Cargar Dompdf
$dompdf = new Dompdf();

// Mostrar imagenes
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);


$dompdf->loadHtml($html); // loadHtml es el contenido a mostrar
$dompdf->setPaper('letter'); //hoja tamaño carta
//$dompdf->setPaper('A4', 'Landscape'); //tamaño oficio 

$dompdf->render(); //poner visible
$dompdf->stream("Registro_Solicitud_Alta", array("Attachment" => true)); // nombre del archivo, array attachment => true para descagar en automatico

?>
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
    <title>Alta de Proyecto </title>

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
            width: 49em;
            height: 5px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 15px;
            margin-bottom: 20px;
            font-family: sans-serif;
            padding-bottom: 15px;
        }

        .inputRespM {
            width: 16.1em;
            height: 5px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 13px;
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
            font-family: sans-serif;
            padding-bottom: 20px;
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
    </style>

</head>
<?php
require '../components/head-main.php';

$id_proyecto = $_GET['id'];
// $id_proyecto = 1;

$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, V.placa, M.marca, Mo.modelo, A.anio, Co.color, R.folioRegSolicitud, R.valorVentaAlta, R.inspecCalidad, R.observCliente, RA.fecha_creacion, RA.observAudiFinal, S.semana, RA.folioRegAlta, LV.link 
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto 
INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores Co ON V.id_color = Co.id_color 
INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto
INNER JOIN semanas S ON R.id_semana = S.id_semana 
WHERE P.id_proyecto = ' . $id_proyecto . ' ';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();


$marca = $row['marca'];
$modelo = $row['modelo'];
$anio = $row['anio'];
$placa = $row['placa'];
$color = $row['color'];

// $capturista = $row['nombres'] . ' ' . $row['aPaterno'] . ' ' . $row['aMaterno'];

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
            <h2>Alta de Proyecto</h2>
        </div>
    </header>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="lineaHeader"><img src="../../src/img/logos/headerSolicitudAltaLinea.png" /></div>
        <div class="container-fluid" style="width:107%">
            <div class="col-md-12">
                <ul class="float-right">
                    <li>Núm. Folio Alta <input type="text" value="<?php echo $row['folioRegAlta'] ?>" style="width:115px"> </li>
                    <li>Fecha Alta <input type="text" value="<?php echo $row['fecha_creacion'] ?>" style="width:115px;"></li>
                    <li>Núm. Folio Solicitud Alta <input type="text" value="<?php echo $row['folioRegSolicitud'] ?>" style="width:115px"> </li>
                    <li>Núm. de Orden <input type="text" value="<?php echo $row['nOrden'] ?>" style="width:115px"></li>
                    <li>Núm. de Proyecto <input type="text" value="<?php echo $row['nProyecto'] ?>" style="width:115px"> </li>
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
                            <td><input type="text" class="inputRespA" value="<?php echo $modelo ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $anio ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $placa ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $color ?>"></td>
                        </tr>
                    </tbody>
                </table>
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
                            <td>Núm. Folio Alta</td>
                            <td>Núm. Folio Solicitud Alta</td>
                            <td>Núm Proyecto</td>
                            <td>Núm. de Orden</td>
                            <td>Tipo Reparación</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['folioRegAlta'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['folioRegSolicitud'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['nProyecto'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['nOrden'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['tipoReparacion'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td>Kilometraje</td>
                            <td>Semana de Alta</td>
                            <td>Valor Venta Inicial</td>
                            <td>Valor Venta Alta</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['km'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['semana'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $valorVenta ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $valorVentaAlta ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td style="width: 20em">Observación Inspección de Control de Calidad</td>
                        </tr>
                        <tr>
                            <td colspan="4"><textarea cols="160" rows="4"><?php echo $row['inspecCalidad'] ?></textarea></td>
                        </tr>
                        <tr>
                            <td style="width: 20em">Observaciones Para el Cliente</td>
                        </tr>
                        <tr>
                            <td colspan="4"><textarea cols="160" rows="4"><?php echo $row['observCliente'] ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Link de Video en Vivo Alta</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespG" value="<?php echo $row['link'] ?>"></td>
                        </tr>
                        <tr>
                            <td style="width: 20em">Observaciones Prueba Auditoria Final</td>
                        </tr>
                        <tr>
                            <td colspan="4"><textarea cols="160" rows="4"><?php echo $row['observAudiFinal'] ?></textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <div class="contenedor-dv">
        <!-- <span class="capturista"><?php echo $nomComp . '-' . $row['fecha_creacion'] ?></span> -->
        <span class="capturista"><?php echo $row['fecha_creacion'] ?></span>
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
$dompdf->stream("Alta de Proyecto", array("Attachment" => true)); // nombre del archivo, array attachment => true para descagar en automatico

?>
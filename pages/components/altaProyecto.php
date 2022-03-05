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
    <title>Alta Proyecto </title>

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
            font-size: 11px;
            font-weight: 100;
        }

        .inputRespM {
            width: 17em;
            height: 11px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 10px;
            font-weight: 100;
            margin-bottom: 20px;
        }

        .inputRespC {
            width: 9.8em;
            height: 10px;
            outline: 0;
            border-width: 0 0 .5px;
            border-color: gray;
            font-size: 10px;
            font-weight: 100;
            margin-bottom: 20px;
        }

        input[type=text] {
            border: 0;
            border-bottom: .5px solid gray;
        }

        tr td {
            font-size: 12px;
            color: #000;
        }

        .titulo {
            font-size: 14px;
            color: #000;
            font-weight: 100;
            left: 0;
        }

        hr {
            border: 1px solid gray;
            width: 106%;
        }

        textarea {
            width: 65.5em;
            height: 30px;
            border: none;
            border-bottom: .5px solid gray;
            font-size: 11px;
            font-weight: 100;
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
    </style>
</head>
<?php
require '../components/head-main.php';

$id_proyecto = $_GET['id'];
// $id_proyecto = 1;

$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, V.placa, M.marca, Mo.modelo, A.anio, Co.color, R.folioRegSolicitud, R.valorVentaAlta, RA.fecha_creacion, S.semana, U.nombres, U.aPaterno, U.aMaterno, RA.folioRegAlta, LV.link 
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN registroAlta RA ON P.id_proyecto = RA.id_proyecto 
INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo 
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
INNER JOIN anios A ON V.id_anio = A.id_anio 
INNER JOIN colores Co ON V.id_color = Co.id_color 
INNER JOIN clientes C ON P.id_cliente = C.id_cliente 
INNER JOIN registrosolicitud R ON P.id_proyecto = R.id_proyecto 
INNER JOIN semanas S ON R.id_semana = S.id_semana 
INNER JOIN usuarios U ON R.id_regSolicitud = U.id_usuario 
WHERE P.id_proyecto = ' . $id_proyecto . ' ';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();


$marca = $row['marca'];
$modelo = $row['modelo'];
$anio = $row['anio'];
$placa = $row['placa'];
$color = $row['color'];

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
            <h2>Alta de Proyecto</h2>
        </div>
    </header>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="lineaHeader"><img src="../../src/img/logos/headerSolicitudAltaLinea.png" /></div>
        <div class="container-fluid" style="width:107%">
            <div class="col-md-12">
                <ul class="float-right">
                    <li>Núm. Folio Alta <input type="text" value="<?php echo $row['folioRegAlta'] ?>" style="width:100px"> </li>
                    <li>Fecha Alta <input type="text" value="<?php echo $row['fecha_creacion'] ?>" style="width:100px;"></li>
                    <li>Núm. Folio Solicitud Alta <input type="text" value="<?php echo $row['folioRegSolicitud'] ?>" style="width:100px"> </li>
                    <li>Núm. de Orden <input type="text" value="<?php echo $row['nOrden'] ?>" style="width:100px"></li>
                    <li>Núm. de Proyecto <input type="text" value="<?php echo $row['nProyecto'] ?>" style="width:100px"> </li>
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
                            <td>Núm. Folio Alta</td>
                            <td>Núm. Folio Solicitud Alta</td>
                            <td>Núm Proyecto</td>
                            <td>Núm. de Orden</td>
                            <td>Tipo Reparación</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['folioRegAlta'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['folioRegSolicitud'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['nProyecto'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['nOrden'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['tipoReparacion'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Kilometraje</td>
                            <td>Semana</td>
                            <td>Valor Venta Inicial</td>
                            <td>Valor Venta Alta</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['km'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['semana'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $valorVenta ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $valorVentaAlta ?>"></td>
                        </tr>
                        <tr>
                            <td>Link de Video en Vivo Alta</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"><?php echo $row['link'] ?></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12">
                    <br>
                    <hr>
                </div>
            </div>
        </div>
    </main>
    <div class="contenedor-dv">
        <span class="capturista"><?php echo $capturista . '-' . $row['fecha_creacion'] ?></span>
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
$dompdf->stream("{$row['folioRegSolicitud']}", array("Attachment" => true)); // nombre del archivo, array attachment => true para descagar en automatico

?>
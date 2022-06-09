<?php
ob_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieza Entregada </title>

    <!-- Favicon -->
    <link rel="icon" href="../../src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="shortcut icon" href="../../src/img/logos/favicon.png" type="image/gif" sizes="32x32">
    <link rel="apple-touch-icon" href="../../src/img/logos/favicon.png" type="image/gif">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <style>
        /** 
                Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
                puede ser de altura y anchura completas.
             **/
        @page {
            /* margin: 0cm 0cm; */
            margin: 10px 15px;
        }

        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            margin-top: 7.5cm;
            margin-left: 1cm;
            margin-right: 2.2cm;
            margin-bottom: 4.5cm;
            font-family: sans-serif;

        }

        /** Definir las reglas del encabezado **/
        /* #header {
            position: fixed;
            top: .5cm;
            left: 2cm;
            right: 0;
            height: 3cm;
            background-color: none;
            text-align: left;
        } */

        header {
            position: fixed;
            top: 10px;
            left: 1cm;
            right: 0px;
            height: 60px;

            /** Extra personal styles **/
            background-color: none;
            color: #000;
            text-align: left;
            line-height: 35px;
        }

        /** Definir las reglas del pie de página **/

        */ #footer .page:after {
            content: counter(page, decimal);
        }

        footer {
            position: fixed;
            bottom: 5px;
            left: 0px;
            right: 0px;
            height: 190px;
            width: 100%;

            /** Extra personal styles **/
            background-color: none;
            color: #000;
            text-align: center;
            line-height: 35px;
            display: inline-block;
        }

        .clear {
            clear: both;
        }

        ul li {
            list-style-type: none;
            text-align: right;
            font-size: 12px;
            font-weight: 100;
            font-family: sans-serif;
        }


        table {
            margin-top: 15px;
            width: 102%;
            border: 1px solid #000;
            border-collapse: collapse;
        }

        th,
        td {
            width: 25%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
            padding: 1px;
            caption-side: bottom;
            text-align: center;
        }


        caption {
            padding: 0.3em;
            color: #fff;
            background: #000;
        }

        th {
            background: #eee;
            font-size: 10px;
        }

        td {
            font-size: 12px;
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
            width: 102%;
            margin: 0;
        }

        textarea {
            width: 52em;
            height: 35px;
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
            top: 5cm;
            left: 1cm;
            right: 0cm;
            height: 0cm;
            width: 100px;
        }


        .contenedor-div {
            position: relative;
        }

        .capturista {
            position: absolute;
            bottom: 1px;
            left: 30px;
            font-size: 9px;
            color: gray;
        }

        .linea {
            border-top: 1px solid gray;
            height: 2px;
            max-width: 300px;
            padding: 0px 0 5px 0;
            margin: 0px auto 0 auto;

        }

        .centrado {
            text-align: center;
        }

        .page-break {
            page-break-after: always;
        }

        #block-container {
            display: flex;
            justify-content: center;
        }
    </style>

</head>
<?php
require '../components/fechaEs.php';
require '../components/queryDomPdf.php';


$id_proyecto = $_GET['id'];
// $id_proyecto = 1;

$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
V.placa, Co.color, M.marca, Mo.modelo, An.anio,
R.linkRecPzsDanadas, R.fecha_creacion, U.nombres, U.aPaterno, U.aMaterno,
T.tecArmador, AU.folio_autoriz, PE.folioPzsSurtida
from proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co ON V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios An ON V.id_anio = An.id_anio 
LEFT JOIN recpzsdanadas R ON P.id_proyecto = R.id_proyecto
LEFT JOIN tecarmadores T ON R.id_tecArmador = T.id_tecArmador
LEFT JOIN usuarios U ON R.id_capB = U.id_usuario
INNER JOIN autorizados AU ON P.id_proyecto = AU.id_proyecto
INNER JOIN pzstregadas PE ON P.id_proyecto = PE.id_proyecto
WHERE P.id_Proyecto = $id_proyecto AND AU.borrado = 0 AND PE.borrado = 0";
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

// ----------------------------------------------------------------------------------

$query1 = "SELECT P.id_proyecto, P.nProyecto, R.id_recPzsDanadas AS linkId,
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
$resultado = mysqli_query($conexion, $query1);
?>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        <div class="logoHeader"><img src="../../src/img/logos/headerSolicitudAltaLogo.png" width="120" /></div>
        <div class="titleHeader">
            <h2>Piezas Surtidas</h2>
        </div>
        <div class="lineaHeader"><img src="../../src/img/logos/headerSolicitudAltaLinea.png" width='1040' height='4' style="position: fixed;top: 80px;left: 35px;right: 0px;" /></div>
        <div class="container">
            <div class="col-12">
                <table class="table" style="position: fixed;top: 80px;left: 35px;right: 0px; width:1040px" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Núm. de Proyecto</th>
                            <th>Número de Orden</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Placas</th>
                            <th>Color</th>
                            <th>Técnico Armador</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['nProyecto'] ?></td>
                            <td><?php echo $row['nOrden'] ?></td>
                            <td><?php echo $row['marca'] ?></td>
                            <td><?php echo $row['modelo'] ?></td>
                            <td><?php echo $row['anio'] ?></td>
                            <td><?php echo $row['placa'] ?></td>
                            <td><?php echo $row['color'] ?></td>
                            <td><?php echo (empty($row['tecArmador'])) ? 'Sin Registro' : $row['tecArmador'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table" style="position: fixed;top: 170px;left: 35px;right: 0px;width:1040px">
                    <thead>
                        <tr>
                            <th>Link de Desarmado</th>
                            <th>Fecha Registro Link</th>
                            <th>Folio Autorización</th>
                            <th>Folio Pieza Surtida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo (empty($row['linkRecPzsDanadas'])) ? 'Sin Registro' : $row['linkRecPzsDanadas'] ?></td>
                            <td><?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion'] ?></td>
                            <td><strong><?php echo $row['folio_autoriz'] ?></strong></td>
                            <td><strong><?php echo $row['folioPzsSurtida'] ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </header>

    <footer id='footer'>
        <div  style="position: fixed;font-weight: bold; font-size:15px;margin:0px;float:center;width: 100%; top: 0px;">
                <p>Acepto total de refacciones recibidas y las no reemplazadas no es motivo para falla critica y/o inmediata de la transmisión</p>
        </div>
        <div>
            <div style="position: fixed;top:75px; padding-left:100px;float:center;width: 50%;">
                <div class="linea"></div>
                <p style="font-size:15px"><strong>Entregado</strong></p>
            </div>
            <div style="position: fixed;top:75px;padding-left:90px;float:left;width: 50%;">
                <div class="linea"></div>
                <p style="font-size:15px;padding: 0px"><strong>Recibido</strong></p>
            </div>
        </div>
        <div style="clear:both"></div>
        <p class="page" style="position: fixed;top:120px;padding-left:280px;float:center;width: 50%;">Página </p>
        <div class="contenedor-dv">
            <span class="capturista"> Impreso por: <?php echo $nomComp . ' - ' . fechaEs($date) ?></span>
        </div>
    </footer>
    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <!-- <div class="lineaHeader"><img src="../../src/img/logos/headerSolicitudAltaLinea.png" width='1040' height='4' /></div> -->

        <div class="container">
            <div class="col-12">
                <table class="table" style="width:1005px">
                    <thead>
                        <tr>
                            <th>Núm. Folio</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Minuto de Video</th>
                            <th>Capturista Solicitante</th>
                            <th>Fecha Solicitud</th>
                            <!-- <th>Proveedor</th>
                            <th>Modo de Pago</th>
                            <th>Costo Crédito</th>
                            <th>Costo Contado</th> -->
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
                                    <?php echo $row['folio_solicitud'] ?>
                                </td>
                                <td style="width:10px">
                                    <?php echo (empty($row['cantidad'])) ? 'Sin Registro' : $row['cantidad']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['descripcion'])) ? 'Sin Registro' : $row['descripcion']; ?>
                                </td>
                                <td style="width:15px">
                                    <?php echo (empty($row['minVideo'])) ? 'Sin Registro' : $row['minVideo']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
                                </td>
                                <!-- <td>
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
                                </td> -->
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
                </table>

            </div>
        </div>
    </main>

</body>
<!-- <div class="page-break"></div> -->

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
$dompdf->setPaper('A4', 'landscape'); //hoja tamaño carta horizontal
//$dompdf->setPaper('A4', 'Landscape'); //tamaño oficio 

$dompdf->render(); //poner visible
$dompdf->stream("Pieza Entregada", array("Attachment" => true)); // nombre del archivo, array attachment => true para descagar en automatico

?>
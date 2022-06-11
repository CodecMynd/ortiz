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
$id_pzsEntregadasAdic = $_GET['id_pzsEntregadasAdic'];

$query = "SELECT P.id_proyecto, P.nProyecto, P.nOrden,
V.placa, Co.color, M.marca, Mo.modelo, An.anio,
C.fecha_creacion, 
R.folioPzAdicional, R.cantidad, R.motivo, R.descripcionpzadicional, R.asesor, R.tecArmador, 
AU.folio_autorizPzsAdic,
PE.folioPzsSurtidaAdic
from proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN colores Co ON V.id_color = Co.id_color
INNER JOIN marcas M ON V.id_marca = M.id_marca 
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios An ON V.id_anio = An.id_anio 
INNER JOIN cotizandopzsadic C ON P.id_proyecto = C.id_proyecto
INNER JOIN registrosolicitudpzsadicionales R ON C.id_cotizandoPzsAdic = R.id_cotizandoPzsAdic
INNER JOIN preautorizadospzsadic PR ON R.id_regSolpzadicional = PR.id_regSolpzadicional
INNER JOIN autorizadospzsadic AU ON PR.id_preAutorizadoPzsAdic = AU.id_preAutorizadoPzsAdic
INNER JOIN autoprocesurtpzsadic AUP ON AU.id_autorizadoPzsAdic = AUP.id_autorizadoPzsAdic
INNER JOIN pzstregadasadic PE ON AUP.id_AutoProceSurtPzAdic = PE.id_AutoProceSurtPzAdic
WHERE P.id_Proyecto = $id_proyecto AND PE.id_pzsEntregadasAdic = $id_pzsEntregadasAdic";
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();
?>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        <div class="logoHeader"><img src="../../src/img/logos/headerSolicitudAltaLogo.png" width="120" /></div>
        <div class="titleHeader">
            <h2>Pieza Surtida Adicional</h2>
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
                            <th>Asesor</th>
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
                            <td><?php echo (empty($row['asesor'])) ? 'Sin Asesor' : $row['asesor'] ?></td>
                            <td><?php echo (empty($row['tecArmador'])) ? 'Sin Técnico Armador' : $row['tecArmador'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table" style="position: fixed;top: 170px;left: 35px;right: 0px;width:1040px">
                    <thead>
                        <tr>
                            <th>Fecha Registro Solicitud de Pieza Adicional</th>
                            <th>Folio Pieza Adicional</th>
                            <th>Folio Autorización Pieza Adicional</th>
                            <th>Folio Pieza Surtida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion'] ?></td>
                            <td><strong><?php echo $row['folioPzAdicional'] ?></strong></td>
                            <td><strong><?php echo $row['folio_autorizPzsAdic'] ?></strong></td>
                            <td><strong><?php echo $row['folioPzsSurtidaAdic'] ?></strong></td>
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
                            <th>Cantidad</th>
                            <th>Motivo</th>
                            <th>Descripción</th>
                            <th>Asesor</th>
                            <th>Técnico Armador</th>
                            <th>Capturista Solicitante</th>
                            <th>Fecha Solicitud</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td style="width:10px">
                                    <?php echo (empty($row['cantidad'])) ? 'Sin Registro' : $row['cantidad']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['motivo'])) ? 'Sin Registro' : $row['motivo']; ?>
                                </td>  
                                <td>
                                    <?php echo (empty($row['descripcionpzadicional'])) ? 'Sin Registro' : $row['descripcionpzadicional']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['asesor'])) ? 'Sin Asesor' : $row['asesor']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['tecArmador'])) ? 'Sin Técnico Armador' : $row['tecArmador']; ?>
                                </td>
                                <td>
                                    <?php echo (empty($solicitante)) ? 'Sin Registro' : $solicitante; ?>
                                </td>
                                <td>
                                    <?php echo (empty($row['fecha_creacion'])) ? 'Sin Registro' : $row['fecha_creacion']; ?>
                                </td>

                            </tr>
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
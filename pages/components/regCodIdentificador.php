<?php
ob_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos con Código Identificador </title>

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

        .inputRespMCobro {
            width: 18em;
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
            width: 8em;
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
            width: 56em;
            height: 55px;
            border: none;
            border-bottom: .5px solid gray;
            font-size: 13px;
            font-family: sans-serif;
            padding-bottom: 25px;
        }

        .firma {
            padding-top: 40px;
            padding-left: 40%;
            width: 150px;
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
        }
    </style>

</head>
<?php
require '../components/head-main.php';

$id_proyecto = $_GET['id'];
// $id_proyecto = 1;

$query = 'SELECT P.id_proyecto, P.nProyecto, P.nOrden, P.tipoReparacion, P.km, P.valorVenta, P.diagnostico, P.descripServ1, P.descripServ2, 
V.placa, M.marca, Mo.modelo, A.anio, C.color,
RS.folioRegSolicitud, RS.valorVentaAlta, RS.inspecCalidad, RS.observCliente, 
RA.folioRegAlta, RA.observAudiFinal, S.semana, LV.link,
RC.fecha_creacion, RC.folioCodID,
U.nombres AS Unombre, U.aPaterno AS Upaterno, U.aMaterno AS Umaterno, 
CL.nombres, CL.aPaternoCliente, CL.aMaternoCliente, SC.semanaCobro,
D.valCobProyBase, D.codIdProyBase, D.valCobProyExtra, D.codIdProyExtra, D.valCobComBan, D.codIdComBan, D.valCobPen, D.codIdPension, D.valCobOtros, D.codIdOtros,
FB.formaPago AS formabase, FE.formaPago AS formaExtra, FC.formaPago AS formaBanca, FP.formaPago AS formaPension, FO.formaPago AS formaOtro
FROM proyectos P 
INNER JOIN vehiculos V ON P.id_vehiculo = V.id_vehiculo 
INNER JOIN marcas M ON V.id_marca = M.id_marca
INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo
INNER JOIN anios A ON V.id_anio = A.id_anio
INNER JOIN colores C ON V.id_color = C.id_color
INNER JOIN registrosolicitud RS ON P.id_proyecto = RS.id_proyecto
INNER JOIN semanas S ON RS.id_semana = S.id_semana
INNER JOIN registroalta RA ON P.id_proyecto = RA.id_proyecto
INNER JOIN linkvideos LV ON RA.id_link = LV.id_linkVideo
INNER JOIN registrocodidenti RC ON P.id_proyecto = RC.id_proyecto
INNER JOIN semanascobro SC ON RC.id_semanaCobro = SC.id_SemanaCobro
INNER JOIN desglocecodid D on P.id_proyecto = D.id_proyecto
INNER JOIN formapagos FB ON D.id_pagoProyBase = FB.id_formaPago
INNER JOIN formapagos FE ON D.id_pagoProyExtra = FE.id_formaPago
INNER JOIN formapagos FC ON D.id_pagoComBan = FC.id_formaPago
INNER JOIN formapagos FP ON D.id_pagoPension = FP.id_formaPago
INNER JOIN formapagos FO ON D.id_pagoOtros = FO.id_formaPago
INNER JOIN usuarios U ON P.id_capC = U.id_usuario
INNER JOIN clientes CL ON P.id_cliente = CL.id_cliente
WHERE P.id_proyecto =' . $id_proyecto . ' ';
$respuesta = mysqli_query($conexion, $query);
$row  = $respuesta->fetch_assoc();

$marca = $row['marca'];
$modelo = $row['modelo'];
$anio = $row['anio'];
$placa = $row['placa'];
$color = $row['color'];

$capturista = $row['Unombre'] . ' ' . $row['Upaterno'] . ' ' . $row['Umaterno'];
$cliente = $row['nombres'] . ' ' . $row['aPaternoCliente'] . ' ' . $row['aMaternoCliente'];

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
            <h2>Entrega de Vehículo</h2>
        </div>
    </header>


    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="lineaHeader"><img src="../../src/img/logos/headerSolicitudAltaLinea.png" /></div>
        <div class="container-fluid" style="width:107%">
            <div class="col-md-12">
                <ul class="float-right py-0">
                    <li>Código Identificador <input type="text" value="<?php echo $row['codIdProyBase'] ?>" style="width:115px"> </li>
                    <li>Núm. Código Identificador <input type="text" value="<?php echo $row['folioCodID'] ?>" style="width:115px"> </li>
                    <li>Fecha Registro <input type="text" value="<?php echo $row['fecha_creacion'] ?>" style="width:115px;"></li>
                    <li>Núm. Folio Alta <input type="text" value="<?php echo $row['folioRegAlta'] ?>" style="width:115px"> </li>
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
                            <th class="titulo">Cliente</th>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12">
                    <hr>
                </div>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td><input type="text" class="inputRespG" value="<?php echo $cliente ?>"></td>
                        </tr>
                    </tbody>
                </table>
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
                            <td>Núm. Folio Código ID</td>
                            <td>Núm. Folio Alta</td>
                            <td>Núm. Folio Solicitud Alta</td>
                            <td>Núm Proyecto</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['folioCodID'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['folioRegAlta'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['folioRegSolicitud'] ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['nProyecto'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td>Núm. de Orden</td>
                            <td>Tipo Reparación</td>
                            <td>Kilometraje</td>
                            <td>Semana de Alta</td>
                            <td>Semana Cobro</td>
                            <!-- <td>Valor Venta Inicial</td> -->
                            <!-- <td>Valor Venta Alta</td> --> -->
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespA" value="<?php echo $row['nOrden'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['tipoReparacion'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['km'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['semana'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['semanaCobro'] ?>"></td>
                            <!-- <td><input type="text" class="inputRespA" value="<?php echo '$ ' . $valorVenta ?>"></td>
                            <td><input type="text" class="inputRespA" value="<?php echo '$ ' . $valorVentaAlta ?>"></td> -->
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <!-- <tr>
                            <td style="width: 20em">Observación Inspección de Control de Calidad</td>
                        </tr>
                        <tr>
                            <td colspan="4"><textarea cols="160" rows="4"><?php echo $row['inspecCalidad'] ?></textarea></td>
                        </tr> -->
                        <tr>
                            <td style="width: 20em">Observaciones Para el Cliente</td>
                        </tr>
                        <tr>
                            <td colspan="4"><textarea cols="160" rows="4"><?php echo $row['observCliente'] ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Link de Video en Vivo Alta</td>
                        </tr>
                        <br>
                        <tr>
                            <td><input type="text" class="inputRespG" value="<?php echo $row['link'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <br><br><br>
                <img src="../../src/img/logos/footer.png" width="108%" />
                <br>
                <div class="lineaHeader"><img src="../../src/img/logos/headerSolicitudAltaLinea.png" /></div>
                <div class="container-fluid" style="width:107%">
                    <div class="col-md-12">
                        <ul class="float-right py-0">
                            <li>Código Identificador <input type="text" value="<?php echo $row['codIdProyBase'] ?>" style="width:115px"> </li>
                            <li>Núm. Código Identificador <input type="text" value="<?php echo $row['folioCodID'] ?>" style="width:115px"> </li>
                            <li>Fecha Registro <input type="text" value="<?php echo $row['fecha_creacion'] ?>" style="width:115px;"></li>
                            <li>Núm. Folio Alta <input type="text" value="<?php echo $row['folioRegAlta'] ?>" style="width:115px"> </li>
                            <li>Núm. Folio Solicitud Alta <input type="text" value="<?php echo $row['folioRegSolicitud'] ?>" style="width:115px"> </li>
                            <li>Núm. de Orden <input type="text" value="<?php echo $row['nOrden'] ?>" style="width:115px"></li>
                            <li>Núm. de Proyecto <input type="text" value="<?php echo $row['nProyecto'] ?>" style="width:115px"> </li>
                        </ul>
                    </div>
                </div>
                <table class="table table-sm recuadro">
                    <tbody>
                        <tr>
                            <td>Valor Cobro Proyecto Base</td>
                            <td>Código Identificador Proyecto Base</td>
                            <td>Forma de Pago Proyecto Base</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['valCobProyBase'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['codIdProyBase'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['formabase'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Valor Cobro Proyecto Extra</td>
                            <td>Código Identificador Proyecto Extra</td>
                            <td>Forma de Pago Proyecto Extra</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['valCobProyExtra'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['codIdProyExtra'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['formaExtra'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Valor Cobro Comisión Bancaria</td>
                            <td>Código Identificador Comisión Bancaria</td>
                            <td>Forma de Pago Comisión Bancaria</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['valCobComBan'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['codIdComBan'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['formaBanca'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Valor Cobro Pensión</td>
                            <td>Código Identificador Pensión</td>
                            <td>Forma de Pago Pensión</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['valCobPen'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['codIdPension'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['formaPension'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Valor Cobro Otros</td>
                            <td>Código Identificador Otros</td>
                            <td>Forma de Pago Otros</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['valCobOtros'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['codIdOtros'] ?>"></td>
                            <td><input type="text" class="inputRespMCobro" value="<?php echo $row['formaOtro'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="firma">
                <div class="linea">
                    <h4>Firma de Recibido del Cliente</h4>
                </div>
            </div>
        </div>
    </main>
    <div class="contenedor-dv">
        <span class="capturista"><?php echo $nomComp . '-' . $row['fecha_creacion'] ?></span>
    </div>
    <footer class="capturista">
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
$dompdf->stream("Proyectos con Código Identificador", array("Attachment" => true)); // nombre del archivo, array attachment => true para descagar en automatico

?>
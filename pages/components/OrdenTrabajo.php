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
    <title>Orden de Servicio </title>

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
            margin-right: 2.5cm;
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

        .linea {
            border-top: 1px solid gray;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<?php
require '../components/head-main.php';

$id_proyecto = $_GET['id'];
// $id_proyecto = 1;
$query = "SELECT * FROM proyectos WHERE id_proyecto = $id_proyecto";
$respuesta = mysqli_query($conexion, $query);
$row = $respuesta->fetch_assoc();

$id_cliente = $row['id_cliente'];
$query = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
$respuesta = mysqli_query($conexion, $query);
$rowCliente = $respuesta->fetch_assoc();
$nomClienteCompleto = $rowCliente['nombres'] . ' ' . $rowCliente['aPaternoCliente'] . ' ' . $rowCliente['aMaternoCliente'];

$id_vehiculo = $row['id_vehiculo'];
$query = "SELECT M.marca, Mo.modelo, A.anio, V.placa, C.color, V.id_vehiculo, V.id_marca, V.id_anio, V.id_color
    FROM vehiculos V 
    INNER JOIN marcas M ON V.id_marca = M.id_marca 
    INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
    INNER JOIN anios A ON V.id_anio = A.id_anio 
    INNER JOIN colores C on V.id_color = C.id_color WHERE id_vehiculo = $id_vehiculo";
$respuesta = mysqli_query($conexion, $query);
$rowV = $respuesta->fetch_assoc();

?>

<body>
    <!-- Defina bloques de encabezado y pie de página antes de su contenido -->
    <header>
        <img src="../../src/img/logos/header.png" />
        <!-- <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/ortiz/src/img/logos/header.png" /> -->
    </header>

    <footer>
        <img src="../../src/img/logos/footer.png" width="100%" height="100%" />
        <?php echo $date ?>
    </footer>

    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="container-fluid" style="width:107%" >
            <div class="col-md-12">
                <ul class="float-right">
                    <li>Fecha Ingreso <input type="text" value="<?php echo $row['fecha_creacion'] ?>" style="width:100px;"></li>
                    <li>Número de Orden <input type="text" value="<?php echo $row['nOrden'] ?>" style="width:100px"></li>
                    <li>Número de Proyecto <input type="text" value="<?php echo $row['nProyecto'] ?>" style="width:100px"> </li>
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
                            <td>Nombre</td>
                            <td>Domicilio</td>
                            <td>Ciudad</td>
                            <td>Estado</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $nomClienteCompleto ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowCliente['calle'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowCliente['ciudad'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowCliente['estado'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Celular</td>
                            <td>Teléfono 1</td>
                            <td>Teléfono 2</td>
                            <td>Correo Electrónico</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowCliente['cel'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowCliente['tel1'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowCliente['tel2'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowCliente['email'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="titulo">Vehículo</th>
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
                            <td>Kilometraje</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowV['marca'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $rowV['modelo'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $rowV['anio'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $rowV['placa'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $rowV['color'] ?>"></td>
                            <td><input type="text" class="inputRespC" value="<?php echo $row['km'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="titulo">Servicio</th>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12">
                    <hr>
                </div>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td>Diagnostico</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"><?php echo $row['diagnostico'] ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Descripción del servicio 1</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"><?php echo $row['descripServ1'] ?></textarea></td>
                        </tr>
                        <tr>
                            <td>Descripción del servicio 2</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"><?php echo $row['descripServ2'] ?> </textarea></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="firma">
                <div class="linea">
                    <h4>Firma cliente</h4>
                </div>
            </div>
        </div>
    </main>
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
$dompdf->stream("Orden_de_Servicio.pdf", array("Attachment" => true)); // nombre del archivo, array attachment => true para descagar en automatico

?>
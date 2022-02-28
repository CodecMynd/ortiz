<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Trabajo </title>
    <!-- Theme style -->
    <link rel="stylesheet" href="../../plugins/bootstrap/bootstrap-4.3.1.css">
    <script src="../../plugins/bootstrap/bootstrap.min.js"></script>
    <style>
        ul li {
            list-style-type: none;
            text-align: right;
            font-size: 15px;
            font-weight: 100;
        }

        .datos {
            float: right;
        }

        .inputRespL{
            width: 20em;
            height: 20px;
            outline: 0;
            border-width: 0 0 1px;
            border-color: gray;
            font-size: 10px;
            margin-bottom: 25px;
        }
        .inputRespM{
            width: 15em;
            height: 20px;
            outline: 0;
            border-width: 0 0 1px;
            border-color: gray;
            font-size: 10px;
            margin-bottom: 25px;
        }
        .inputRespC{
            width: 10em;
            height: 20px;
            outline: 0;
            border-width: 0 0 1px;
            border-color: gray;
            font-size: 10px;
            margin-bottom: 25px;
        }
        .feOrPr{
            border: 0;
        }
     tr td{
         font-size: 12px;
         color: #000;
        }
        .titulo{
            font-size: 13px;
            color: #000;
            font-weight: 100;
            left: 0;
        }
    </style>
</head>

<body>
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
    <div class="container">
        <div class="row justify-content-between">
            <table class="table table-lg table-responsive">
                <tbody>
                    <tr>
                        <td style="width: 70%;">
                            <img src="http://<?php $_SERVER['HTTP_HOST']; ?>/ortiz/src/img/logos/logo.png" width="100">
                        </td>
                        <td style="width: 30%;">
                            <ul class="text-center">
                                <li>Orden de trabajo</li>
                                <li>Av. Alcalde #1011 Col. Alcalde Barranquitas</li>
                                <li>Guadalajara Jalisco, México</li>
                                <li>Tel.(33) 2101 1653</li>
                            </ul>
                            <ul>
                                <li>Fecha Ingreso <input type="text"  class="feOrPr" value="<?php echo $row['fecha_creacion'] ?>"></li>
                                <li>Número de Orden <input type="text"  class="feOrPr" value="<?php echo $row['nOrden'] ?>"></li>
                                <li>Número de Proyecto <input type="text"  class="feOrPr" value="<?php echo $row['nProyecto'] ?>"> </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-12">
                <table class="table table-lg ">
                    <tbody>
                        <tr>
                            <th class="titulo">Datos del Cliente</th>
                        </tr>
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
                            <td >Celular</td>
                            <td >Teléfono 1</td>
                            <td >Teléfono 2</td>
                            <td >Correo Electrónico</td>
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
                    <thead>
                        <tr>
                            <th class="titulo">Datos del Vehículo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >Marca</td>
                            <td >Modelo</td>
                            <td >Año</td>
                            <td >Placa</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowV['marca'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowV['modelo'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowV['anio'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowV['placa'] ?>"></td>
                        </tr>
                        <tr>
                            <td >Color</td>
                            <td >Kilometraje</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="inputRespM" value="<?php echo $rowV['color'] ?>"></td>
                            <td><input type="text" class="inputRespM" value="<?php echo $row['km'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th class="titulo">Datos del Servicio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >Diagnostico</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="200" rows="2"></textarea> </td>
                        </tr>
                        <tr>
                            <td >Descripción del servicio 1</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"></textarea> </td>
                        </tr>
                        <tr>
                            <td >Descripción del servicio 2</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea cols="160" rows="2"></textarea> </td>
                        </tr>
                    </tbody>
                </table>
                <div class="col-12 text-center">
                    <div class="firma">
                        <h4>Firma cliente</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    ?>
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
$dompdf->stream("Orden_de_Trabajo.pdf", array("Attachment" => true)); // nombre del archivo, array attachment => true para descagar en automatico




?>
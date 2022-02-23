<?php
require '../components/head-main.php';
?>
<title>1.3.2 Modificar Modelo | <?php echo $nomComp ?></title>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body class="hold-transition layout-top-nav layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        require '../components/navbar.php';
        ?>
        <div class="content-wrapper">
            <!-- titulo y brandcrumb -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row my-3 mx-5">
                        <div class="col-sm-6">
                            <h1 class="float-left m-0">1.3.2 Modificar Modelo</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <!-- Form editar usuario -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">**Todos los campos son obligatorios</h3>
                                </div>
                                <?php
                                $id_modelo = $_GET['id'];
                                $query = "SELECT * FROM modelos WHERE id_modelo = $id_modelo";
                                $respuesta = mysqli_query($conexion, $query);
                                $rowModelo = $respuesta->fetch_assoc();
                                ?>
                                <form id="formUpdateModelo">
                                    <input type="hidden" name="id_modelo" id="id_modelo" value="<?php echo $id_modelo?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-12 my-1 form-group">
                                                <div class="input-group">
                                                    <?php
                                                    $sql = "SELECT * FROM marcas  ORDER BY marca DESC";
                                                    $result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                                                    ?>
                                                    <label for="marca" class="pl-5">Marca</label>
                                                    <select name="marca" id="marca" class="form-control" title="Selecciona una Marca de la lista" style="width: 100%;">
                                                        <option value="<?php echo $rowModelo['id_marca'] ?>"><?php
                                                                                                                $marca = $rowModelo['id_marca'];
                                                                                                                $query = "SELECT * FROM marcas WHERE id_marca = $marca";
                                                                                                                $respuesta = mysqli_query($conexion, $query);
                                                                                                                $row = $respuesta->fetch_assoc();
                                                                                                                echo $row['marca'];
                                                                                                                ?>
                                                        </option>
                                                        <option disabled>_________________</option>
                                                        <?php while ($rowMarca = $result->fetch_assoc()) { ?>
                                                            <option value="<?php echo $rowMarca['id_marca'] ?>">
                                                                <?php echo $rowMarca['marca'] ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1 form-group">
                                                <div class="input-group form-floating mb-3 mt-1">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-solid fa-car"></i></span>
                                                    </div>
                                                    <input name="modelo" id="modelo" type="text" class="form-control" placeholder="Ingresa un Modelo" required maxlength="30" data-toggle="tooltip" data-placement="bottom" title="Ingresa el Modelo" value="<?php echo $rowModelo['modelo'] ?>">
                                                    <label for="floatingInput" class="pl-5">Modelo</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <hr>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Fecha<small> *Llenado en automatico</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $dateFront ?>" disabled readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 my-1">
                                                <label class="ml-5 mb-2">Capturista editor<small> *El que modifica</small></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user-pen" aria-hidden="true"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Campo en automatico" value="<?php echo $nomComp ?>" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-footer">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <buttom type="button" id="btnUpdateModelo" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Guardar "><i class="fas fa-pen"></i> Guardar</buttom>
                                            </div>
                                            <div class="col-md-2 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateModelo"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
        require '../components/footer.php';
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    ?>
</body>

</html>
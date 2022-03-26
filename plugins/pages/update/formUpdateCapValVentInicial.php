<?php
require '../components/head-main.php';
?>
<title>Captura de Valor Venta Inicial | <?php echo $nomComp ?></title>
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
                            <h1 class="float-left m-0">2.3.7.1 Captura de Valor Venta Inicial</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->
            <!-- consulta sql -->
            <?php
            $id_proyecto = $_GET['id'];
            $query = "SELECT valorVenta, nProyecto FROM proyectos WHERE id_proyecto = $id_proyecto ";
            $respuesta = mysqli_query($conexion, $query);
            $row = $respuesta->fetch_assoc();

            $query = "SELECT capValVenta_permiso FROM capvalorventas WHERE id_proyecto = $id_proyecto ";
            $respuesta = mysqli_query($conexion, $query);
            $rowV = $respuesta->fetch_assoc();
            $V = $rowV['capValVenta_permiso'];

            ?>
            <!-- Form editar marca -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header border-nav">
                                    <h3 class="card-title">Número de Proyecto: <strong><?php echo $row['nProyecto'] ?></strong> seleccionado </h3>
                                    <div class="card-tools">
                                        <h3 class="card-title"><strong># Permiso(s) para modificar: <span class="parpadea"><?php
                                                                                                                            if ($super == 1) {
                                                                                                                                echo '<span class="text-red">Admin</span>';
                                                                                                                            } else if ($perRegCapValVenInicial == 1) {
                                                                                                                                echo '<span class="text-red">+1</span>';
                                                                                                                            } else if ($V == 0) {
                                                                                                                                echo '<span class="text-red">1</span>';
                                                                                                                            } else if ($V == 1) {
                                                                                                                                echo '<span class="text-red">0</span>';
                                                                                                                            }
                                                                                                                            ?></span></strong></h3>
                                    </div>
                                </div>

                                <form id="formUpdateValVenInicial" autocomplete="off">
                                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="<?php echo $id_proyecto  ?>">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 col-sm-12 my-1">
                                                <div class="input-group form-floating mb-3">
                                                    <div class="input-group-prepend parpadea">
                                                        <span class="input-group-text mt-2">
                                                            <i class="fa-solid fa-money-bill-1-wave"></i>
                                                        </span>
                                                    </div>
                                                    <input name="valorVenta" id="currency1" type="text" class="form-control" placeholder="Valor Venta Inicial" data-toggle="tooltip" data-placement="bottom" title="Ingresa Valor en módulo 2.3.7.1 Captura Valor Venta Inicial" value="<?php echo $row['valorVenta'] ?>" <?php
                                                     if ($super == 1) {
                                                         echo '';
                                                     }else if($perRegCapValVenInicial == 1){
                                                        echo '';
                                                     }else if($V == 0){
                                                        echo '';
                                                    }else{
                                                        echo 'readonly';
                                                    }
                                                     ?>
                                                     >
                                                    <label for="floatingInput" class="pl-5">*Valor venta Inicial </label>
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
                                            <?php
                                            if ($super == 1) {
                                                echo '<div class="col-md-3 col-sm-12 align-self-center">
                                                            <buttom type="submit" id="btnUpdateValVenInicial" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Admin 2.3.7.2 Capturar Valor Venta Inicial (+1) "><i class="fas fa-pen"></i> Guardar</buttom>
                                                     </div>';
                                            } else if ($perRegCapValVenInicial == 1) {
                                                echo '<div class="col-md-3 col-sm-12 align-self-center">
                                                            <buttom type="submit" id="btnUpdateValVenInicial" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="2.3.7.2 Capturar Valor Venta Inicial (+1) "><i class="fas fa-pen"></i> Guardar</buttom>
                                                    </div>';
                                            } else if ($V == 1) {
                                                echo '<div class="col-md-3 col-sm-12 align-self-center">
                                                        <buttom id="" class="btn btn-outline-danger btn-block" data-toggle="tooltip" data-placement="bottom" title="Sin Permiso 2.3.7.2 Capturar Valor Venta Inicial (+1)"><i class="fas fa-pen"></i> Guardar</buttom>
                                                     </div>';
                                            } else {
                                                echo '<div class="col-md-3 col-sm-12 align-self-center">
                                                        <buttom type="submit" id="btnUpdateValVenInicial" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="2.3.7.2 Capturar Valor Venta Inicial (1)  "><i class="fas fa-pen"></i> Guardar</buttom>
                                                     </div>';
                                            }
                                            ?>
                                            <div class="col-md-3 col-sm-12 align-self-center">
                                                <a href="javascript:history.go(-1)" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Regresar página anterior"><i class="fa-solid fa-arrow-left"></i> Regresar</a>
                                            </div>
                                            <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                            <br>
                                            <div class="col-md-12 col-sm-12 align-self-center mt-2">
                                                <div id="respuestaUpdateValVenInicial"></div>
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
        <?php
        if ($super == 1) {
            echo '<script>
            $(document).ready(function() {
                $("#avisoCapValVenInicialAdmin").modal("toggle")
            })
            </script>';
        } else if ($perRegCapValVenInicial == 1) {
            echo '<script>
            $(document).ready(function() {
                $("#avisoCapValVenInicialPermiso").modal("toggle")
            })
            </script>';
        } else if ($V == 0) {
            echo '<script>
            $(document).ready(function() {
                $("#avisoCapValVenInicial").modal("toggle")
            })
            </script>';
        } else if ($V == 1) {
            echo '<script>
            $(document).ready(function() {
                $("#avisoCapValVenInicialSinPermiso").modal("toggle")
            })
            </script>';
        } 
        ?>
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    require '../components/modal-avisoCapValVenInicial.php';
    ?>
    <script>
        //  iniciar inputMask 
        $(document).ready(function() {
            $(":input").inputmask();
        });

        $(document).ready(function() {
            $("#currency1").inputmask({
                alias: "currency",
                prefix: ''
            });
        });
    </script>
</body>

</html>
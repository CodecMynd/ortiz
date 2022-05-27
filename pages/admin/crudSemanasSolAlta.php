<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Semanas de Solicitud de Alta | <?php echo $nomComp ?></title>
<script>
    function abrirModal(id_semSolAlta, semana) {
        $("#btnModal-eliminarSemanaSolAlta").click();
        $("#id_semSolAlta").val(id_semSolAlta);
        $("#semana").val(semana);
        $("#tituloModal1").html(semana);
    }
</script>

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
                    <div class="row my-3 mx-1">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tabla 1.6.3 Semanas de Solicitud de Alta</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Semanas de Solicitud de Alta </h3>
                                    <div class="card-tools">

                                        <?php if ($super == 1 or $regSemSolAlta == 1) {
                                            echo '<a type="button" class="btn btn-secondary" href="../adds/formAddSemanaSolAlta.php" data-toggle="tooltip" data-placement="left" title="1.6.3.1 Registro Semana Solicitud de Alta"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana Solicitud de Alta</a>';
                                        } else {
                                            echo '<a type="button" class="btn btn-outline-danger" id="regSemSolAlta" data-toggle="tooltip" data-placement="left" title="1.6.3.1 Registro Semana Solicitud de Alta"><i class="fa-solid fa-calendar-days"></i>&nbsp;&nbsp; Registro Semana Solicitud de Alta</a>';
                                        }
                                        ?>

                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                if ($super == 1) {
                                    $query = "SELECT id_semSolAlta , semana FROM semanasolalta WHERE borrado = 0 ORDER BY semana DESC";
                                } else if ($verTablaSemSolAlta == 1) {
                                    $query = "SELECT id_semSolAlta , semana FROM semanasolalta WHERE borrado = 0 ORDER BY semana DESC";
                                } else {
                                    $query = "SELECT id_semSolAlta ,semana FROM semanasolalta WHERE id_semSolAlta  = 0";
                                }
                                $resultado = mysqli_query($conexion, $query);
                                ?>

                                <div class="card-body">
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablaSemSolAlta == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php  } ?>
                                    <table id="tableSm" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Semana de Solicitud de Alta</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) {
                                                $id_semSolAlta = $row['id_semSolAlta'];
                                                $semana = $row['semana'];
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['semana'] ?>
                                                    </td>
                                                    <td class="row justify-content-center">
                                                        <span data-toggle="tooltip" title="1.6.3.2  Eliminar SeSemana Solicitud de Alta">
                                                            <?php if ($super == 1 or $eliSemSolAlta   == 1) {
                                                                echo "<a href='#' onclick='abrirModal(\"" . $id_semSolAlta . "\",\"" . $semana . "\")' class='btn btn-secondary'><i class='fas fa-trash-alt'></i></a>";
                                                            } else {
                                                                echo '<a class="btn btn-outline-danger" id="eliSemanaCobro"><i class="fas fa-trash-alt"></i></a>';
                                                            } ?>
                                                        </span>
                                                        </li>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Semana de Solicitud de Alta</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <button id="btnModal-eliminarSemanaSolAlta" class="btn btn-white" data-toggle="modal" data-target=".eliminarSemanaSolAlta"></button>
                                    <?php
                                    require '../components/modal-eliminarSemanaSolAlta.php';
                                    desconectar();
                                    ?>
                                </div>
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
    // Scripts dataTables
    require '../components/scripts-dataTables.php';
    ?>
    <script>
        // 4.1.2 Eliminar Link de Desarmado
        $('#btnDeleteSemanaSolAlta').click(function() {
            var param = $('#formDeleteSemanaSolAlta').serialize();
            $.ajax({
                    url: '../delete/deleteSemanaSolAlta.php',
                    cache: false,
                    type: 'POST',
                    data: param,

                    success: function(vs) {
                        $('#formDeleteSemanaSolAlta')[0].reset();
                        $("#tableSm").load(" #tableSm");
                    }
                })
                .done(function(res) {
                    $('#respuestaDeleteSemanaSolAlta').html(res)
                })
        });
    </script>

</body>

</html>
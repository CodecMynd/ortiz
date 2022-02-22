<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Vehículos | <?php echo $nomComp ?></title>
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
                            <h1 class="m-0">Tabla Vehículos</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /titulo y brandcrumb -->

            <!-- Table usuarios -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Vehículos dadas de alta en el sistema</h3>
                                    <div class="card-tools">
                                        <a type="button" class="btn btn-secondary" href="../adds/formAddVehiculo.php" data-toggle="tooltip" data-placement="left" title="2.1.1 Registro Vehículo">
                                            <i class="fa-solid fa-car"></i> Registro de Vehículos</a>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <!-- consulta sql -->
                                <?php
                                $cont = 0;
                                $query = "SELECT M.marca, Mo.modelo, A.anio, V.placa, V.id_vehiculo 
                                FROM vehiculos V INNER JOIN marcas M ON V.id_marca = M.id_marca
                                 INNER JOIN modelos Mo ON V.id_modelo = Mo.id_modelo 
                                 INNER JOIN anios A ON V.id_anio = A.id_anio;";
                                $resultado = mysqli_query($conexion, $query);
                                ?>

                                <div class="card-body">
                                    <table id="tablePermisos" class="table table-sm table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = $resultado->fetch_assoc()) { 
                                                $vehiculo = $row['marca'].' | '.$row['modelo'].' | '.$row['anio'].' | '.$row['placa'];
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php $cont++;
                                                        echo $cont;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['marca'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['modelo'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['anio'] ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['placa'] ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cog"></i><span data-toogle="tooltip" title="Botónes de administración tabla Usuarios"> Acciones</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <div class="btn-group">
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.1.2 Modificar Vehículo">
                                                                                <a class="btn btn-secondary" href="../update/formUpdateVehiculo.php?id=<?php echo $row['id_vehiculo'] ?>"><i class="fas fa-edit"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <span data-toggle="tooltip" title="2.1.3  Eliminar Vehiculo">
                                                                                <a class="btn btn-secondary" data-toggle="modal" data-target=".eliminarVehiculo-<?php echo $row['id_vehiculo'] ?>"><i class="fas fa-trash-alt"></i>
                                                                                </a>
                                                                            </span>
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                                require '../components/modal-eliminarVehiculo.php';
                                            }
                                            desconectar();
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placas</th>
                                                <th>Acciones</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="respuestaBorrarModelo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /table usuario -->
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

</body>

<script>
    $('.btnBorrarVehiculo').click(function (e) {
    e.preventDefault();
    if (confirm("¿Estás seguro de eliminar esta registro Vehículo? Una vez borrado ya no se podrá recuperar la información.")) {
        var id = $(this).attr("id");

        var dataString = 'id=' + id;
        url = "../delete/deleteVehiculo.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function (data) {
                window.location.href = "crudVehiculos.php";
                $('#respuesta').html(data);
            }
        });
    }
    return false;
});
</script>
</html>
<?php
require '../components/head-main.php';
require '../components/head-dataTables.php';
?>
<title>CRUD Desarmadas Autorizadas por dar de Alta | <?php echo $nomComp ?></title>
<!-- <style>
    @media (min-width:320px) and (max-width:425px) {
        .content-header {
            margin-bottom: 90px;
            width: 100%;

        }

        .content-header h1 {
            font-size: 20px;
            padding: 10px 10px 5px;
            text-align: center;
        }
    }
</style> -->
<link rel="stylesheet" href="../../src/css/btnRecPzsDanadas.css">

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
                        <div class="col-sm-8">
                            <h1 class="m-0">Tabla 4.1.1 Desarmadas Autorizadas por dar de Alta</h1>
                        </div>
                        <div class="col-sm-4">
                            <h5 class="float-right">Mi Usuario: <strong><?php echo $nomComp ?></strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contador de Registros Table Cotizando -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card card-secondary card-outline collapsed-card">
                                <div class="card-header">
                                    <h2 class="card-title"><strong>Tablas Consultadas</strong></h2>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool text-dark parpadea" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row justify-content-center">

                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Activos</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Solicitud Alta</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Alta Proyecto</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-check fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Código ID</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-screwdriver-wrench"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Supervisión</h6>
                                                    <div class="text-center"><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-6 col-md-3">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-trash-can"></i></span>
                                                <div class="info-box-content">
                                                    <h6 class="info-box-number text-center">Proyectos Eliminados</h6>
                                                    <div class="text-center "><i class="fa-solid fa-circle-xmark fa-2x"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer" style="height: 50px;">
                                    <marquee width="100%" behavior="alternate">
                                        <marquee behavior="alternate">
                                            <p>Consulta optimizada, ultima actualización: <strong>21/06/2022</strong></p>
                                        </marquee>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Table Autorizado -->
            <section class="content" id="Autorizado3">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Autorizado <span><b>(Proyectos Activos)</b></span></h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableAutorizado3' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla:<strong> 3. Autorizado</strong></h3>
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablasDesarmadosAutoAlta == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableAutorizado3" class="display compact table-bordered table-striped" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placa</th>
                                                <th>Color</th>
                                                <th>Valor Venta Inicial</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Solicitudes de Piezas y Registros de Compras</th>
                                                <th>Suma Total Costo Crédito</th>
                                                <th>Suma Total Costo Contado</th>
                                                <th>Gran Total Costo</th>
                                                <th>Núm. Folio Autorizado de Pieza</th>
                                                <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                <th>Cronometro Pre-Autorización / Autorización</th>
                                                <th>Asesor</th>
                                                <th>Técnico Armador</th>
                                                <th>Fecha Registro Link Desarmado</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>Núm. Proyecto</th>
                                                <th>Núm. Orden</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Año</th>
                                                <th>Placa</th>
                                                <th>Color</th>
                                                <th class='suma'>Valor Venta Inicial</th>
                                                <th>Estado del Proyecto</th>
                                                <th>Solicitudes de Piezas y Registros de Compras</th>
                                                <th class='suma'>Suma Total Costo Crédito</th>
                                                <th class='suma'>Suma Total Costo Contado</th>
                                                <th class='suma'>Gran Total Costo</th>
                                                <th>Núm. Folio Autorizado de Pieza</th>
                                                <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                <th>Cronometro Pre-Autorización / Autorización</th>
                                                <th>Asesor</th>
                                                <th>Técnico Armador</th>
                                                <th>Fecha Registro Link Desarmado</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Table  Proceso de Surtido de Piezas -->
            <section class="content" id="ProcesoSurtidoPz3">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Proceso de Surtido de Piezas <span><b>(Proyectos Activos)</b></span></h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableAutoProceSurtPzs3' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 4. Proceso de Surtido de Piezas</strong></h3>
                                    <?php
                                    if ($super == 1) {
                                    } else if ($verTablasDesarmadosAutoAlta == 0) { ?>
                                        <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                        <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                    <?php } ?>
                                    <table id="tableAutoProceSurtPzs3" class="display compact table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th class='suma'>Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Table Piezas Entregadas -->
            <section class="content" id="pzsEntregadas3">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Entregadas <span><b>(Proyectos Activos)</b></span></h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablepzsEntregadas3' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 5. Piezas Entregadas </strong></h3>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablasDesarmadosAutoAlta == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablepzsEntregadas3" class="display compact table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th class="suma">Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------------------------------------------------------------------------------------------------------------------- -->

            <!-- Table Piezas Firmadas de Recibido -->
            <section class="content" id="pzsFirmadasRec3">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Firmadas de Recibido <span><b>(Proyectos Activos)</b></span></h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tablePzsFirmadasRec3' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 6. Piezas Firmadas de Recibido </strong></h3>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablasDesarmadosAutoAlta == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tablePzsFirmadasRec3" class="display compact table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th class="suma">Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Supervisión de Surtido de Piezas -->
            <section class="content" id="SuperSurtPzs3">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <div class="card border-card">
                                <div class="card-header">
                                    <h3 class="card-title">Proyectos en Piezas Firmadas de Recibido <span><b>(Proyectos Activos)</b></span></h3>
                                    <div class="card-tools">
                                        <button class="btn btn-secondary" id='refresh_tableSuperSurtPzs' data-toggle="tooltip" data-placement="bottom" title="Actualizar Tabla"><i class="fa-solid fa-table"></i></button>
                                        <a href="javascript:location.reload()" class="btn btn-secondary btn-inline" data-toggle="tooltip" data-placement="bottom" title="Actualizar página"><i class="fa-solid fa-arrows-rotate"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center">Tabla<strong> 7. Supervisión de Surtido de Piezas </strong></h3>

                                        <?php
                                        if ($super == 1) {
                                        } else if ($verTablasDesarmadosAutoAlta == 0) { ?>
                                            <div class="ribbon ribbon-top-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-top-right"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-left"><span>Sin permiso</span></div>
                                            <div class="ribbon ribbon-bottom-right"><span>Sin permiso</span></div>
                                        <?php } ?>
                                        <table id="tableSuperSurtPzs3" class="display compact table-bordered table-striped" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th>Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th>Suma Total Costo Crédito</th>
                                                    <th>Suma Total Costo Contado</th>
                                                    <th>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>ID</th>
                                                    <th>Núm. Proyecto</th>
                                                    <th>Núm. Orden</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Año</th>
                                                    <th>Placa</th>
                                                    <th>Color</th>
                                                    <th class="suma">Valor Venta Inicial</th>
                                                    <th>Estado del Proyecto</th>
                                                    <th>Solicitudes de Piezas y Registros de Compras</th>
                                                    <th class='suma'>Suma Total Costo Crédito</th>
                                                    <th class='suma'>Suma Total Costo Contado</th>
                                                    <th class='suma'>Gran Total Costo</th>
                                                    <th>Núm. Folio Pieza Entregada</th>
                                                    <th>Núm. Folio Proceso Surtido Pieza</th>
                                                    <th>Núm. Folio Autorizado de Pieza</th>
                                                    <th>Cronometro Link Desarmado / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Autorización / Pzs. Firmadas Recibido</th>
                                                    <th>Cronometro Pre-Autorización / Autorización</th>
                                                    <th>Cronometro Link Desarmado / Pre-Autorización</th>
                                                    <th>Asesor</th>
                                                    <th>Técnico Armador</th>
                                                    <th>Fecha Registro Link Desarmado</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php
        require '../components/footer.php';
        desconectar();
        ?>
        <!-- <div id="divModal"></div>
        <div id="divModalPreAuto"></div>
        <div id="divModalProceSurtPzs"></div>
        <div id="divModalPzasEntregadas"></div>
        <div id="divModalPzasFirmadasRec"></div>
        <div id="divModalSuperSurtPzs"></div> -->
    </div>
    <?php
    // Scripts principales
    require '../components/scripts-main.php';
    // Scripts dataTables
    require '../ajax/plugins-datatable.php';
    // btn navegacion
    require '../components/btnDesarmadasAutoAlta.php';
    ?>
    <script src="../ajax/tableAutorizado3.js"></script>
    <script src="../ajax/tableAutoProceSurtPzs3.js"></script>
    <script src="../ajax/tablePzsEntregadas3.js"></script>
    <script src="../ajax/tablePzsFirmadasRec3.js"></script>
    <script src="../ajax/tableSuperSurtPzs3.js"></script>
    <script>
        // Actualizar tablas independientes
        $(document).ready(function() {

            tableAutorizado3 = $("#tableAutorizado3").DataTable();
            $("#refresh_tableAutorizado3").on("click", function() {
                tableAutorizado3.ajax.reload();
            });

            tableAutoProceSurtPzs3 = $("#tableAutoProceSurtPzs3").DataTable();
            $("#refresh_tableAutoProceSurtPzs3").on("click", function() {
                tableAutoProceSurtPzs3.ajax.reload();
            });

            tablepzsEntregadas3 = $("#tablepzsEntregadas3").DataTable();
            $("#refresh_tablepzsEntregadas3").on("click", function() {
                tablepzsEntregadas3.ajax.reload();
            });

            tablaPzsFirmadasRec3 = $("#tablaPzsFirmadasRec3").DataTable();
            $("#refresh_tablaPzsFirmadasRec3").on("click", function() {
                tablaPzsFirmadasRec3.ajax.reload();
            });

            tableSuperSurtPzs3 = $("#tableSuperSurtPzs3").DataTable();
            $("#refresh_tableSuperSurtPzs3").on("click", function() {
                tableSuperSurtPzs3.ajax.reload();
            });

        });
    </script>

</body>

</html>
<div class="modal fade generarSuperCodIdentificador" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="margin-auto__content">
                    Número de Proyecto: <span id="tituloModal2"></span>
                </strong>
            </div>
            <div class="modal-body text-center">
                <form id="formGenerarSuperCodIdentificador">

                    <table id="tableRegProyectos" class="table table-sm table-bordered table-striped" style="width: 100%;">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Núm. de Proyecto</th>
                                <th>Folio Código Identificador</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Año</th>
                                <th>Color</th>
                                <th>Placas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="width: 5%;"><span class='badge badge-dark badge-pill' id="id_proyectoText"></span></th>
                                <td style="width: 10%;"><span id="nProyectoText"></span></td>
                                <td style="width: 10%;"><span id="folioCodIDText"></span></td>
                                <td><span id="marcaText"></span></td>
                                <td><span id="modeloText"></span></td>
                                <td><span id="anioText"></span></td>
                                <td><span id="colorText"></span></td>
                                <td><span id="placaText"></span></td>
                            </tr>
                        </tbody>
                    </table>


                    <input type="hidden" name="id_proyecto2" id="id_proyecto2" value="">
                    <input type="hidden" name="nProyecto2" id="nProyecto2" value="">
                    <input type="hidden" name="id_regcodidenti2" id="id_regcodidenti2" value="">

                    <button type="button" id="btnGenerarSuperCodIdentificador" class="btn btn-secondary"><i class="fa-solid fa-check"></i></i> Supervisar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </form>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaGenerarSuperCodIdentificador"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.7.1 Generar Supervisión de Registro con Código Identificador </h5>
            </div>
        </div>
    </div>
</div>
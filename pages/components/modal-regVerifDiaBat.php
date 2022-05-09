<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regVerifDiaBat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registrar Link de Comprobación Diaria del Número de Proyecto: <strong><span id="tituloModal1"></span></strong>
                </h5>
            </div>
            <form id="formNuevoRegVerifDiaBat">
                <div class="modal-body">
                    <div class='row justify-content-center'>
                        <input type="hidden" name="id_proyecto1" id="id_proyecto1" value="">
                        <input type="hidden" name="nProyecto1" id="nProyecto1" value="">
                        <div class='col-md-12 col-sm-12 my-1'>
                            <div class='input-group form-floating mb-3' style='border: 1px solid #CED4DA;'>
                                <div class='input-group-prepend'>
                                    <span class='input-group-text mt-2'>
                                        <i class="fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input name='linkverifDiaBat' id='linkverifDiaBat' type='text' class='form-control' placeholder='Registrar Link de Comprobación' data-toggle='tooltip' data-placement='bottom' title='Registrar Link de Comprobación Diaria de Baterias'>
                                <label for='floatingInput' class='pl-5'>*Link de Comprobación Diaria de Baterias</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <h5 class="text-center font-weight-bold">Incidencias Baterias</h5>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12">
                            <button type="button" class="btn btn-permisos">
                                <div class="info-box">
                                    <span class="info-box-icon bg-secondary"><i class="fa-solid fa-check"></i></span>
                                    <div class="info-box-content">
                                        <h6><strong>¿Reportar Incidencia?</strong></h4>
                                            <span class="info-box-text"> <input type="checkbox" name="com" id="com" data-toggle="toggle" data-on="Incidencia" data-off="Sin Incidencia" data-width="150" data-height="10" data-onstyle="success" data-offstyle="danger" value="1" onchange="javascript:showContentCom()"></span>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class='col-md-12 col-sm-12 my-1' id="contentCom" style="display: none">
                            <div class='form-group-input' style='border: 1px solid #CED4DA;'>
                                <label class='pl-2 mb-2'>Comentar Incidencia (Comprobación)</label>
                                <span data-toggle='tooltip' title='max. 200 caracteres'>
                                    <div class='input-group'>
                                        <div class='input-group-prepend'>
                                            <span class='input-group-text'><i class='fa-solid fa-comments'></i></span>
                                        </div>
                                        <textarea name='incidencia' id='incidencia' class='form-control' rows='2' placeholder='Max. 200 caracteres' maxlength="200"></textarea>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-left">
                    <button type="button" id="btnNuevoRegVerifDiaBat" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaNuevoRegVerifDiaBat"></div>
                </div>
            </div>
            <div class="pie">
                <h5>2.3.3.1 Registro Comprobación Verificación Diaria Baterías</h5>
            </div>
        </div>
    </div>
</div>
<script>
       function showContentCom() {
        element = document.getElementById("contentCom");
        check = document.getElementById("com");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    } 
</script>
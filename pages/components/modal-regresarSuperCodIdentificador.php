<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<div class="modal fade regresarSuperCodIdentificador" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar este Registro de Supervisión de Código Identificador?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong class="margin-auto__content">
                    <span id="tituloModal1"></span>
                </strong>
            </div>
            <form id="formRegresarSuperCodIdentificador" action="../update/updateRegresarSuperCodIdentificador.php" method="post">
                <!-- <form id="formRegresarSuperCodIdentificador"> -->
                <div class="modal-footer">
                    <input type="hidden" name="id_proyecto" id="id_proyecto" value="">
                    <button type="submit" id="btnRegresarSuperCodIdentificador" class="btn btn-secondary btn-block"><i class="fa-solid fa-ban"></i> Eliminar</buttom> <br>
                        <button data-dismiss="modal" class="btn btn-secondary btn-block" data-toggle="tooltip" data-placement="bottom" title="Cancelar">Salir</button>
                </div>
            </form>

            <div class="pie">
                <h5>2.7.2 Eliminar Supervisión de Registro Código Identificador</h5>
            </div>
        </div>
    </div>
</div>
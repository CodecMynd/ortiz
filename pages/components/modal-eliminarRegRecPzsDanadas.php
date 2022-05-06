<div class="modal fade eliminarRegRecPzsDanadas" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ¿Deseas eliminar Link de Desarmado del Número de Proyecto: ?
                </h5>
            </div>
            <div class="modal-body text-center">
                <strong><strong><span id="tituloModal3"></span></strong></strong>
            </div>
            <form id="formDeleteLinkSolPzsDanadas">
                <input type="hidden" name="id_recPzsDanadas3" id="id_recPzsDanadas3">
                <div class="modal-footer text-left">
                    <button type="button" id="btnDeleteLinkSolPzsDanadas" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Salir</button>
                </div>
            </form>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div id="respuestaDeleteLinkSolPzsDanadas"></div>
                </div>
            </div>
            <div class="pie">
                <h5>4.1.2 Eliminar Link de Desarmado</h5>
            </div>
        </div>
    </div>
</div>
<script>
    // 4.1.2 Eliminar Link de Desarmado
    $('#btnDeleteLinkSolPzsDanadas').click(function() {
        var param = $('#formDeleteLinkSolPzsDanadas').serialize();
        $.ajax({
                url: '../delete/deleteLinkSolPzsDanadas.php',
                cache: false,
                type: 'POST',
                data: param,

                success: function(vs) {
                    $('#formDeleteLinkSolPzsDanadas')[0].reset();
                    $("#table_refresh").load(" #table_refresh");
                }
            })
            .done(function(res) {
                $('#respuestaDeleteLinkSolPzsDanadas').html(res)
            })
    });
</script>
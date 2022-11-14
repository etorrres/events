<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Realiza tu pregunta</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <form action="php/pregunta_new.php" method="POST">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Mi pregunta:</label>
                    <input type="text" class="form-control" name="pregunta">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success waves-effect waves-light">Enviar</button>
            </div>
            <input hidden type="text" class="form-control" name="id_evento" value="<?php echo $id_evento;?>">
            <input hidden type="text" class="form-control" name="id_user" value="<?php echo $id_usr;?>">
            </form>
        </div>
    </div>
</div>
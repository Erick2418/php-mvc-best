<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content" action="index.php?c=usuario&a=guardar" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button class="close text-right" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <input type="text" id="user" name="user" class="form-control form-control-sm" required placeholder="Usuario">
                    <input type="text" id="pass" name="pass" class="form-control form-control-sm" required placeholder="Contraseña">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="Guardar">Close</button>
            </div>
        </form>
    </div>
</div>
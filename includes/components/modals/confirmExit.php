<!-- Confirm Exit Modal -->
<div class="modal" id="confirmExitModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-file-earmark-arrow-up"></i>Exit Survey?</h5>
                <button type="button" class="close" onclick="confirmExitModal()">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h6>Are you sure you wish to exit? <br> All unsaved data will be lost.</h6>
            </div>
            <div class="modal-footer">
                <a href = "index.php"><button type="button" class="btn btn-outline-primary" >Confirm</button></a>
                <button type="button" class="btn btn-primary"  onclick="confirmExitModal()">Go back</button>

            </div>
        </div>
    </div>
</div>
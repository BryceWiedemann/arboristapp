<!-- Survey Stats Modal -->
<div class="modal" id="statsModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-file-earmark-arrow-up"></i>Statistics</h5>
                <button type="button" class="close" onclick="statsModal()">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" onload="tableEntries()">

                <h6>Trees Observed: <span id="totalRows"></span></h6>

            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

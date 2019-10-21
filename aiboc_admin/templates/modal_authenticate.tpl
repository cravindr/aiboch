<!-- Modal -->
<div id="modalauth" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  data-dismiss="modal">&times;</button>
                <div id="modal_header"></div>
            </div>
            <div class="modal-body" id="modelmsg">
            <h2>You don't have permission to access this page.. </h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

{*
<style>
    .modal{
        max-height:90%;
    }
    .modal-header{
        height:6% !important;
    }
    .modal-body{
        height:82%;
        overflow:auto;
    }
    .modal-footer{
        height:12%;
    }
    .modal-content {
        height:100%;
        overflow:auto;
    }
</style>
*}
<script>
    $(function () {
        $("#modalauth").modal("show");
    });
</script>
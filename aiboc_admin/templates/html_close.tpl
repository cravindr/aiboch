<!-- Modal -->
<div id="profileuploadmodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" id="uploadmsg">
              <div class="container">
                    <div class="row well">
                        <div class="col-md-offset-4 col-md-6">
                            <form method="post" action="profile_image_save.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" id="profileimg" name="profileimg">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-lg pull-right">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</html>

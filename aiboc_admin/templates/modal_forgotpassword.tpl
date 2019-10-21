<!-- Modal -->
<div id="modalforgotpass" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Forget Password reset form</h4></center>
            </div>
            <div class="modal-body">
                <div id="forgotresult"></div>
               <form method="post" action="forgotpassword.php">
                   <div class="form-group">
                       <label>Email Address OR Mobile Number:</label>
                       <input type="text" id="email" name="email" class="form-control" placeholder="Email Address OR Mobile Number">
                   </div>
                   <div class="form-group">
                      <center><button class="btn btn-success">Submit</button></center>
                   </div>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<style>
    .modal-title{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
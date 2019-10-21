<?php
/* Smarty version 3.1.30, created on 2016-12-09 11:33:41
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\tenant_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584a8885777e06_12928360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08644c9e6b1351518ee48e1bb0cd4155a54f0c80' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\tenant_form.tpl',
      1 => 1481279595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584a8885777e06_12928360 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-lg-12 well">
        <h2 id="titleregbuild">New Tenant Registration</h2>

        <form id="validate" name="validate" method="post" action="tenant_reg_save.php">
            <div class="col-lg-5">

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control validate[required]" placeholder="Your Full Name" >
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" id="email" class="form-control validate[required,custom[email],ajax[ajaxAdminTenantEmailCheck]]" placeholder="Your Email Address"  >
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control validate[required,custome[ajax[ajaxAdminTenantMobileCheck]]] placeholder="Your Mobile Number" >
                </div>
                <div class="form-group">
                    <label>Bank Name:</label>
                    <input type="text" name="bankname" id="bankname" class="form-control validate[required]" placeholder="Bank Name" >
                </div>
                <div class="form-group">
                    <label>Presently Working Branch:</label>
                    <input type="text" name="workingbranch" id="workingbranch" class="form-control validate[required]" placeholder="Your Working Branch" >
                </div>
                <div class="form-group">
                    <label>Transferred Branch:</label>
                    <input type="text" name="transferedbranch" id="transferedbranch" class="form-control validate[required]" placeholder="Transferred Branch" >
                </div>
                <div class="form-group">
                    <label>Transferred Place:</label>
                    <input type="text" name="transferedplace" id="transferedplace" class="form-control validate[required]" placeholder="Transferred Branch" >
                </div>
                <div class="form-group">
                    <label>Scale / Grade:</label>
                    <input type="text" name="grade" id="grade" class="form-control validate[required]" placeholder="Scale / Grade" >
                </div>
                <div class="form-group">
                    <label>Quarters Eligible Amount:</label>
                    <input type="text" name="qeamount" id="qeamount" class="form-control validate[required]" placeholder="Quarters Eligible Amount" >
                </div>

                <div class="form-group">
                    <label>	Maximum Offered able Amount:</label>
                    <input type="text" name="maamount" id="maamount" class="form-control validate[required]" placeholder="Maximum Afferdable Amount" >
                </div>

                <div class="form-group">
                    <label>Other Expectation:</label>
                    <textarea rows="3" name="otherexp" id="otherexp" class="form-control " placeholder="Other Expectation"></textarea>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Employee Code:</label>
                    <input type="text" name="empcode" id="empcode" class="form-control" placeholder="Employee Code" >
                </div>

                <div class="form-group">
                    <label>Address:</label>
                    <textarea rows="3" name="address" id="address" class="form-control " placeholder="Give your Address"></textarea>
                </div>
                <div class="form-group">
                    <label>Place:</label>
                    <input type="text" name="place" id="place" class="form-control " placeholder="Your Place" >
                </div>
                <div class="form-group">
                    <label>City:</label>
                    <input type="text" name="city" id="city" class="form-control"  placeholder="Your City"  >
                </div>
                <div class="form-group">
                    <label>State:</label>
                    <input type="text" name="state" id="state" class="form-control " placeholder="Your State" >
                </div>
                <div class="form-group">
                    <label>Pin Code:</label>
                    <input type="text" name="pin" id="pin" class="form-control " placeholder="Your Place Pin Code" >
                </div>



                <div class="form-group">
                    <label></label>
                    <button class="btn btn-primary pull-right">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $("#validate").validationEngine();

        $('#city').typeahead({
            name: 'city',
            remote: 'city.php?query=%QUERY',
            limit: 10

        });
        $('#state').typeahead({
            name: 'state',
            remote: 'state.php?query=%QUERY',
            limit: 10

        });
    });
<?php echo '</script'; ?>
>

<style>
    .twitter-typeahead .tt-query,
    .twitter-typeahead .tt-hint {
        margin-bottom: 0;
    }
    .tt-hint {
        display: block;
        width: 100%;
        height: 38px;
        padding: 7px 11px;
        font-size: 14px;
        line-height: 1.428571429;
        color: #999;
        vertical-align: middle;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    }
    .tt-dropdown-menu {
        min-width: 200px;
        margin-top: 0px;
        padding: 5px 0;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        background-clip: padding-box;

    }
    .tt-suggestion {
        display: block;
        padding: 3px 20px;
    }
    .tt-suggestion.tt-is-under-cursor {
        color: #fff;
        background-color: #428bca;
    }
    .tt-suggestion.tt-is-under-cursor a {
        color: #fff;
    }
    .tt-suggestion p {
        margin: 0;
    }


</style><?php }
}

<form name="validate" id="validate" method="post" action="tenant_edit_update.php">
    <input type="hidden" name="id" id="id" value="{$id}">
    <input type="hidden" name="statusval" id="statusval" value="{$status}">

    <table id="tenant_table_modal" class="table table-bordered">
        <tr>
            <td>  Name    </td>
            <td><input type="text" id="name" name="name" value="{$name}" class="form-control validate[required]" >  </td>
        </tr>
        <tr>
            <td>  Mobile    </td>
            <td> <input type="text" id="mobile" name="mobile" value="{$mobile}" class="form-control validate[required]">    </td>
        </tr>
        <tr>
            <td>  Email Id    </td>
            <td> <input type="text" id="emailid" name="emailid" value="{$emailid}" class="form-control validate[required]">    </td>
        </tr>
        <tr>
            <td>   Scale / Grade     </td>
            <td>  <input type="text" id="grade" name="grade" value="{$grde}" class="form-control validate[required]">  </td>
        </tr>
        <tr>
            <td>  Bank Name    </td>
            <td><input type="text" id="bank_name" name="bank_name" value="{$bank_name}" class="form-control validate[required]">     </td>
        </tr>
        <tr>
            <td>  Working Branch    </td>
            <td> <input type="text" id="working_branch" name="working_branch" value="{$working_branch}" class="form-control validate[required]">  </td>
        </tr>
        <tr>
            <td>  Transferred Branch    </td>
            <td>  <input type="text" id="transfered_branch" name="transfered_branch" value="{$transfered_banch}" class="form-control validate[required]">  </td>
        </tr>
        <tr>
            <td>  Transferred Place    </td>
            <td>  <input type="text" id="transfered_place" name="transfered_place" value="{$transfered_place}" class="form-control validate[required]">   </td>
        </tr>
        <tr>
            <td>  Quarters Eligibility Amount    </td>
            <td>  <input type="text" id="qeamount" name="qeamount" value="{$qeamount}" class="form-control validate[required]">  </td>
        </tr>
        <tr>
            <td>  Max.Affordable  Amount    </td>
            <td>  <input type="text" id="maamount" name="maamount" value="{$maamount}" class="form-control validate[required]">  </td>
        </tr>

        <tr>
            <td>  Others    </td>
            <td>  <input type="text" id="others" name="others" value="{$others}" class="form-control">  </td>
        </tr>
        <tr>
            <td>  Emp Code    </td>
            <td>  <input type="text" id="empcode" name="empcode" value="{$empcode}" class="form-control">  </td>
        </tr>
        <tr>
            <td>  Perma.Address    </td>
            <td> <textarea  id="address" name="address" class="form-control">{$address}</textarea>   </td>
        </tr>
        <tr>
            <td>  Place    </td>
            <td>  <input type="text" id="place" name="place" value="{$place}" class="form-control"> </td>
        </tr>
        <tr>
            <td>  City    </td>
            <td>  <input type="text" id="city" name="city" value="{$city}" class="form-control">  </td>
        </tr>
        <tr>
            <td>  State    </td>
            <td>  <input type="text" id="state" name="state" value="{$state}" class="form-control">  </td>
        </tr>
        <tr>
            <td>  OTP    </td>
            <td>  <input type="text"  id="otp" name="otp" value="{$otp}" class="form-control">  </td>
        </tr>


        <tr>
            <td>  Status    </td>
            <td>
                <select id="status" name="status" class="selectpicker form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </td>
        </tr>



    </table>
    <center>
    <table>
        <tr>
            <td style="align-items: center" >
               <button class="btn btn-primary" name="submit" id="submit"  >Submit</button>
            </td>
        </tr>
    </table>
    </center>
</form>
<style>
    tr:nth-child(even){
        background-color: #f5f5f5;
    }
    #tenant_table_modal>tbody>tr>td {
       padding: 2px;
    }

</style>

<script type="text/javascript">
    $(function () {
        $("#validate").validationEngine();
        $('.selectpicker').selectpicker();
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

</script>





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


</style>
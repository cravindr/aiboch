<?php

/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 10/31/2016
 * Time: 1:11 PM
 */
require_once ("Database.php");
class Tenant
{
    var $tenant_id;
    var $name;
    var $mobile;
    var $emailid;
    var $password;
    var $scale_grade;
    var $bank_name;
    var $working_branch;
    var $transfered_banch;
    var $transfered_place;
    var $qeamount;
    var $maamount;
    var $others;
    var $empcode;
    var $address;
    var $place;
    var $city;
    var $state;
    var $pin;
    var $otp;
    var $cdate;
    var $mdate;
    var $status;
    var $database;
    var $login_status;

    public function __construct()
    {
        $this->database=new Database();
    }


    public function Save()
    {
        $qry="INSERT INTO tenant_register (`name`,
 `mobile`,
  `emailid`,
  `password`,
  `scale_grade`,
  `bank_name`,
  `working_branch`,
  `transfered_banch`,
  `transfered_place`,
  `qeamount`,
  `maamount`,
  `others`,
  `empcode`, 
  `address`,
  `place`,
  `city`,
  `state`,
  `pin`,
  `cdate`,
  `mdate`,
   `status`)
 VALUES('$this->name',
        '$this->mobile',
        '$this->emailid',
        MD5('$this->password'),
        '$this->scale_grade',
        '$this->bank_name',
        '$this->working_branch',
        '$this->transfered_banch',
        '$this->transfered_place',
        '$this->qeamount',
        '$this->maamount',
        '$this->others',
        '$this->empcode',
        '$this->address',
        '$this->place',
        '$this->city',
        '$this->state',
        '$this->pin',
        '$this->cdate',
        '$this->mdate',
        '$this->status' ) ";


        $this->database->Query($qry);


        if($this->database->result==1)
        {
            return $this->database->inserted_id;
        }
        else
        {
            return ;
        }

    }

    public function  Update()
    {
        $qry="UPDATE tenant_register SET
                                    
                                    `name`='$this->name',
                                    `mobile`='$this->mobile',
                                    `emailid`='$this->emailid',
                                    `scale_grade`='$this->scale_grade',
                                    `bank_name`='$this->bank_name',
                                    `working_branch`='$this->working_branch',
                                    `transfered_banch`='$this->transfered_banch',
                                    `transfered_place`='$this->transfered_place',
                                    `qeamount`='$this->qeamount',
                                    `maamount`='$this->maamount',
                                    `others`='$this->others',
                                    `empcode`='$this->empcode',
                                    `address`='$this->address',
                                    `place`='$this->place',
                                    `city`='$this->city',
                                    `state`='$this->state',
                                    `pin`='$this->pin',
                                    `otp`='$this->otp',
                                    `mdate`='$this->mdate',
                                    `status`='$this->status' WHERE `tenant_id`='$this->tenant_id' ";

        $this->database->Query($qry);


        if($this->database->result==1)
        {
            return 1;
        }
        else
        {
            return 0 ;
        }
    }

    public static function  Login($username,$password)
    {
    $ins=new self();

        $qry="SELECT * from tenant_register where (emailid='$username' OR mobile='$username') AND (password=MD5('$password') OR otp='$password') AND status='active'  ";

        $ins->database->Query($qry);
        if($ins->database->rows==1)
        {

        $row=mysqli_fetch_object($ins->database->result);

            $ins->tenant_id = $row->tenant_id;
            $ins->name = $row->name;
            $ins->mobile = $row->mobile;
            $ins->emailid = $row->emailid;
            $ins->scale_grade = $row->scale_grade;
            $ins->bank_name = $row->bank_name;
            $ins->working_branch = $row->working_branch;
            $ins->transfered_banch = $row->transfered_banch;
            $ins->transfered_place = $row->transfered_place;
            $ins->qeamount = $row->qeamount;
            $ins->maamount = $row->maamount;
            $ins->others = $row->others;
            $ins->empcode = $row->empcode;
            $ins->address = $row->address;
            $ins->place = $row->place;
            $ins->city = $row->city;
            $ins->state = $row->state;
            $ins->pin = $row->pin;
            $ins->cdate = $row->cdate;
            $ins->mdate = $row->mdate;
            $ins->status = $row->status;
            $ins->login_status="true";

            $ins->ClearOTP($ins->tenant_id); // CLEAR THE OTP IF LOGIN SUCCESS
            return $ins;

        }
        else
        {
            $ins->login_status="false";
        }

    }

    public  static function ChangePassword($tenant_id,$current_pass,$new_pass)
    {
        $ins=new self();
$qry="Update tenant_register set password=md5('$new_pass') where tenant_id=$tenant_id and password=md5('$current_pass')";
        $ins->database->Query($qry);

        if($ins->database->rows==1)
        {
           return 1;
        }
        else
        {
            return 0;
        }
    }


    public function ClearOTP($tenant_id)
    {
    $qry="Update tenant_register set otp='' WHERE tenant_id='$tenant_id' "   ;
        $this->database->Query($qry);
    }

    public static  function GenerateOTP($mobile_no)
    {
        $ins=new self();
        $otp=rand(111111,999999);
        $qry="UPDATE tenant_register SET otp='$otp' WHERE (mobile='$mobile_no' or emailid='$mobile_no') and status='active'";
        $ins->database->Query($qry);
        if($ins->database->rows==1)
        {
            return $otp;
        }
    }

    public static function UpdateEnquiry($enquiryid,$comments)
    {
        $ins=new self();
        $qry="Update tenant_enquiry set comments=concat('$comments <hr>',comments )  WHERE enquiry_id=$enquiryid";

        $ins->database->Query($qry);
        return $ins->database->result;

    }

    public static function SelectEnquiry($enquiryid)
    {
        $ins=new self();
        $qry="SELECT * FROM tenant_enquiry WHERE enquiry_id='$enquiryid'";

        $ins->database->Query($qry);
        $row=mysqli_fetch_object($ins->database->result);
        return $row->comments;
    }

    public static function DeleteEnquiry($enquiryid)
    {
        $ins=new self();
        $qry="DELETE FROM tenant_enquiry WHERE enquiry_id='$enquiryid'";

        $ins->database->Query($qry);

        return $ins->database->result;
    }

    public static function ValidateEmailID($email)
    {
        $qry = "SELECT * FROM `tenant_register` WHERE `emailid` = '$email'";

        $ins = new self();

        $ins->database->Query($qry);

        return $ins->database->rows;
    }
    public static function ValidateMobile($mobile)
    {
        $qry = "SELECT * FROM `tenant_register` WHERE `mobile` = '$mobile'";

        $ins = new self();

        $ins->database->Query($qry);

        return $ins->database->rows;
    }

    public static function Delete($id)
    {
        $ins = new self();

        $qry = "DELETE FROM `tenant_register` WHERE `tenant_id` = '$id'";

        return $ins->database->Query($qry);
    }

    public static function GetTenantById($id)
    {
        $qry="SELECT * FROM tenant_register WHERE tenant_id='$id'";

        $ins=new self();
        $ins->database->Query($qry);

        if($ins->database->rows==1)
        {

            $row=mysqli_fetch_object($ins->database->result);

            $ins->tenant_id = $row->tenant_id;
            $ins->name = $row->name;
            $ins->mobile = $row->mobile;
            $ins->emailid = $row->emailid;
            $ins->scale_grade = $row->scale_grade;
            $ins->bank_name = $row->bank_name;
            $ins->working_branch = $row->working_branch;
            $ins->transfered_banch = $row->transfered_banch;
            $ins->transfered_place = $row->transfered_place;
            $ins->qeamount = $row->qeamount;
            $ins->maamount = $row->maamount;
            $ins->others = $row->others;
            $ins->empcode = $row->empcode;
            $ins->address = $row->address;
            $ins->place = $row->place;
            $ins->city = $row->city;
            $ins->state = $row->state;
            $ins->pin = $row->pin;
            $ins->otp=$row->otp;
            $ins->cdate = $row->cdate;
            $ins->mdate = $row->mdate;
            $ins->status = $row->status;

            return $ins;

        }

    }


    public static function UpdateEnquiryAdmin($enquiryid,$comments,$status)
    {
        $ins=new self();
        $qry="Update tenant_enquiry set comments=concat('$comments <hr>',comments ),
        `status`='$status'
        WHERE enquiry_id=$enquiryid";

        $ins->database->Query($qry);
        return $ins->database->result;

    }

    public static function Status($id)
    {
        $ins = new self();

       $status = $ins->GetTenantById($id);

        if($status->status == "active")
        {
            $qry = "UPDATE `tenant_register` SET `status`= 'inactive' WHERE `tenant_id` = '$id'";
        }
        else
        {
            $qry = "UPDATE `tenant_register` SET `status`= 'active' WHERE `tenant_id` = '$id'";
        }
            return $ins->database->Query($qry);
    }
}
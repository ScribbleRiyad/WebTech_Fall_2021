<?php
    include('../control/db.php');

    $validatefirstname="";
    $validatelastname="";
    $validateemail="";
    $validateradio="";
    $validateMobileNumber="";
    $validateHsc="";
    $validateSsc="";
    $validateGender="";
    $validateDateOfBirth="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $firstname = $_REQUEST['firstname'];
            $lastname = $_REQUEST['lastname'];
            $email = $_REQUEST['email'];
            $MobileNumber = $_REQUEST['MobileNumber'];
            $Hsc = $_REQUEST['Hsc'];
            $Ssc = $_REQUEST['Ssc'];
            $gender = $_REQUEST['gender'];
            $DateofBirth = $_REQUEST['DateofBirth'];

            if(empty($firstname) || strlen($firstname)<5){
                $validatefirstname="Please re-enter the firstname";
            }
            else{
                $validatefirstname=$firstname;
            }
            if(empty($lastname) || strlen($lastname)<5){
                $validatelastname="Please re-enter the lastname";
            }
            else{
                $validatelastname=$lastname;
            }
            if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)){
                $validateemail="Please re-enter the email";
            }
            else{
                $validateemail=$email;
            }
            if(empty($MobileNumber) || strlen($MobileNumber)<11)){
                $validateMobileNumber="Please re-enter the MobileNumber";
            }
            else{
                $validateMobileNumber=$MobileNumber;
            }
            if(empty($Hsc) || strlen($Hsc)<1){
                $validateHsc="Please re-enter the Hsc GpA";
            }
            else{
                $validateHsc=$lastname;
            }
            if(empty($Ssc) || strlen($Ssc)<1){
                $validateSsc="Please re-enter the Ssc GpA";
            }
            else{
                $validateSsc=$Ssc;
            }
            if(!isset($_POST['gender'])){
                $validateGender = "you can select only one";
            }
            else{
                $gender = null;
            }
            
            if(!isset($_POST['DateOfBirth'])){
                $validateDateOfBirth = "select your birth date";
            }
            
            $connection = new db();
            $conobj=$connection->OpenCon();

            $userQuery=$connection->RegUser($conobj,"registration",$firstname,$lastname,$email,$MobileNumber,$Hsc,$Ssc,$gender,$DateOfBirth);
            
            $connection->CloseCon($conobj);
            
    }

?>

<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "AIUB";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }


 function New_Students($conn,$table,$firstname,$lastname,$email,$MobileNumber,$Hsc,$Ssc,$gender,$DateofBirth){
    $sql="INSERT INTO New_Students(firstname,lastname, email, MobileNumber, Hsc,Ssc, gender, DateofBirth)
    VALUES ('$firstname','$lastname','$email','$MobileNumber','$Hsc','$Ssc','$gender','$DateofBirth')";    
    $res = $conn->query($sql);
    if($res){
        echo "new record inserted";
    }
    else{
        echo "error occurred".$conn->connect_error;
    }
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>

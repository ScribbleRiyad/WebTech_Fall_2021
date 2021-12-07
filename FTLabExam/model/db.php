<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mysql";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function SearchEmployee($conn,$table,$eid)
 {
$result = $conn->query("SELECT * FROM $table WHERE ID='$eid'");
 return $result;
 }

 function UpdateEmployee($conn,$table,$ename,$edep,$edate,$esalary,$eid)
 {
     $sql = "UPDATE $table SET E_Name ='$ename', Department='$edep', JoiningDate='$edate',Salary='$esalary' WHERE ID='$eid'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>

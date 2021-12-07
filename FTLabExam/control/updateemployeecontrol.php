<?php
include('../model/db.php');

$ename=$edep= $edate=$esalary=$eid="";
 if(isset($_POST["search"]))
 {
     
 $eid=$_POST["eid"];
   
 $connection = new db();
 $conobj=$connection->OpenCon();
 
 $userQuery=$connection->SearchEmployee($conobj,"employee",$eid);
 
 if ($userQuery->num_rows > 0) {
 
     // output data of each row
     while($row = $userQuery->fetch_assoc()) {
       $ename=$row["E_Name"];
       $edep=$row["Department"];
       $edate=$row["JoiningDate"];
       $esalary=$row["Salary"];
       $eid=$row["ID"];
    
   } 
 } 
   else {
     echo "0 results";
   }
  }
  
  if (isset($_POST['update'])){
    $ename=$_POST['ename'];
    $edep=$_POST['edep'];
    $edate=$_POST['edate'];
    $esalary=$_POST['esalary'];
    $eid=$_POST['eid'];
  $connection = new db();
  $conobj=$connection->OpenCon(); 
  $userQuery=$connection->UpdateEmployee($conobj,"employee",$ename,$edep,$edate,$esalary,$eid);
  if($userQuery==TRUE)
  {
      echo "update successful"; 
  }
  else
  {
      echo "could not update";    
  }
  $connection->CloseCon($conobj);
  
  }else{

  }


  

  

 

?>

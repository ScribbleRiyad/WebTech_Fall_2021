
<?php
include('config.php');
$Name='';
$Department='';
$JoiningDate='';
$Salary='';
$id='';
if(isset($_POST['search'])){
    $id=$_POST['yourid'];
    $stmt = "SELECT * FROM `employee` WHERE `ID`= '$id' ";
    $sel=mysqli_query($con,$stmt);
    if($row1 = mysqli_fetch_assoc($sel)){
     $Name=$row1['Name'];
     $Department=$row1['Department']; 
     $JoiningDate=$row1['JoiningDate']; 
     $Salary=$row1['Salary'];
  }
}

if(isset($_POST['update']))
{
    $id=$_POST['uid'];
    // echo $id;
    $Name=$_POST['name'];
    $Department=$_POST['department'];
    $JoiningDate=$_POST['date'];
    $Salary=$_POST['salary'];
    $stmt1 = " UPDATE `employee` SET `Name`='$Name',`Department`='$Department',`JoiningDate`='$JoiningDate',`Salary`='$Salary' WHERE `ID` ='$id' ";
    $update_q=mysqli_query($con,$stmt1);

    if($update_q){
       echo "Updated record!";
      }
    else{
        echo "Please search your id first with correct value!!!";
      }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTLabExam</title>

</head>
<body >
 <h1>Update employee</h1>
    <form method="post" action="index.php" id="form1">
             <p>Search by ID:</p>  
             <p>               
               <input type="text" id="yourid" name="yourid"  placeholder="Id" >
             </p>
            <input type="submit" id="search" name="search" value="Search" >

    </form>

  <form method="post" action="index.php" id="form2">   
        <p>Name:</p>  
             <p>               
               <input type="text" id="name" name="name"  placeholder="Name" value="<?php echo $Name;?>">
             </p>
             <p>Department:</p>  
             <p>               
               <input type="text" id="department" name="department"  placeholder="department" value="<?php echo $Department;?>" >
             </p>              
            <p>Joining Date:</p>  
             <p>      

               <input type="text" id="date" name="date"   value="<?php echo $JoiningDate;?>">
             </p> 
            <p>Salary:</p>  
             <p>               
               <input type="text" id="salary" name="salary"  placeholder="Salary" value="<?php echo $Salary;?>">
             </p> 
            <input type="submit" id="update" name="update" value="Update" >
            <input type="hidden" name="uid" value="<?php echo $id;?>">
        </form>

    </body>
</html>

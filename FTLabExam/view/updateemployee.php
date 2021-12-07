<?php
session_start(); 
include ("../control/updateemployeecontrol.php");

?>


<!DOCTYPE html>
<html>
<body>
<h2>Update Employee</h2>
<br>
<fieldset>
    <legend> Search By ID </legend>
<form method="post" action="">

Employee ID<input type="text" name="eid"><br>
<br>
<input type="submit" name="search" value="Search">
</form>
</fieldset>
<br>
<br>
<fieldset>
    <legend> Update Employee </legend>
<form method="post" action="" onsubmit="return formHandleEmployee()">
 Name: <input type="text" name="ename" id="ename" value="<?php echo $ename; ?>"><br>
 <br>
 Department: <input type="text" name="edep" id="edep" value="<?php echo $edep; ?>"><br>
 <br>
 Joining Date: <input type="datetime" name="edate" id="edate" value="<?php echo $edate; ?>"><br>
 <br>
 Salary: <input type="text" name="esalary" id="esalary" value="<?php echo $esalary; ?>"><br>
 <br>
<input type="hidden" name="eid" id="eid" value="<?php echo $eid; ?>">
<input type="submit" name="update" value="Update">
</form>
</fieldset>
<p id="para"></p> 

<!-- Java Script File -->
<script src="../JS/validationHandle.js"></script>
</body>
</html>

<?php


?>   


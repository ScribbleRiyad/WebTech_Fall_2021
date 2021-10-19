<?php
include('../control/Validation.php');
?>

<!DOCTYPE html>
<html>
<body>
<h1>Please Fill Up The Form </h1>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" >
	
<table>

<tr>
 <td> <label for="firstname">First name:</label><br></td>
 <td> <input type="text" id="firstname" name="firstname" minlength="5" ></td>
 <?php echo $validatefirstname ?><br>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td><label for="lastname">Last name:</label></td>
 <td><input type="text" id="lastname" name="lastname" minlength="5"></td>
 <?php echo $validatelastname ?><br>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="email">Email:</label></td>
 <td> <input type="text" id="email" name="email"></td>
 <?php echo $validateemail ?><br>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>



  <td>Gender:</td>
  <td><input type="radio" id="gender" name="gender" value="Male">
  <label for="gender">Male</label>
  <input type="radio" id="gender" name="gender" value="Female">
  <label for="gender">Female</label>
<?php echo $validateemail ?><br>


</tr>

<tr>
 <td><label for="MobileNumber">Mobile No:</label></td>
 <td> <input type="text" id="MobileNumber" name="MobileNumber"></td>
 <?php echo $validateMobileNumber ?><br>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
  <td>
  <label for="DateofBirth">Date of Birth:</label></td>
  <td>
  <input type="date" id="DateofBirth" name="DateofBirth"></td>
  <?php echo $validateDateofBirth ?><br>

  
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
</tr>

<tr>
 <td><label for="Hsc">HSC Result:</label></td>
 <td> <input type="text" id="Hsc" name="Hsc"></td>
 <?php echo $validateHsc?><br>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
</tr>

<tr>
 <td><label for="Ssc">SSC Result:</label></td>
 <td> <input type="text" id="Ssc" name="Ssc"></td>
 <?php echo $validateSsc ?><br>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
  
  <tr>
  <td>Select a Course You Want To Enroll:</td>
  <td>
  

<select name="course" id="course">
  <option value="SELECT">Select</option>
  <option value="CSE">CSE</option>
  <option value="EEE">EEE</option>
  <option value="BBA">BBA</option>
  <option value="LAW">LAW</option>
</select>
</td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
  
  <tr>
  <td>Chosee a Enrolling Year:</td>
  <td>
  

<select name="course" id="course">
  <option value="SELECT">Select</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2024</option>
</select>
</td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
  
  <tr>
  <td>Chosee a Enrolling Season:</td>
  <td>
  

<select name="course" id="course">
  <option value="SELECT">Select</option>
  <option value="Spring">Spring</option>
  <option value="Summer">Summer</option>
  <option value="Fall">Fall</option>
  
</select>
</td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>


  <tr>
   
  <td><button type="button" onclick="alert('Data Successfully Submitted')">Insert Data</button></td>
  </tr>
  </table>
</form>

</body>
</html>

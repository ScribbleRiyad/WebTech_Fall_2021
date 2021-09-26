<?php include "control/results.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="" method="post">
	<form>
<table>

<tr>
 <td> <label for="firstname">First name:</label><br></td>
 <td> <input type="text" id="firstname" name="firstname" minlength="5" ></td><?php echo $validatefirstname; ?>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td><label for="lastname">Last name:</label></td>
 <td><input type="text" id="lastname" name="lastname" minlength="5"></td><?php echo $validatelastname; ?>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="email">Email:</label></td>
 <td> <input type="email" id="email" name="email"></td><?php echo $validateemail; ?>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="age">Age:</label></td>
 <td> <input type="age" id="age" name="age"></td><?php echo $validateage; ?>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
  <td> <label for="pwd">Password:</label></td>
  <td><input type="pwd" id="pwd" name="pwd" minlength="8"></td><?php echo $validatepassword; ?>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>



  <td>Designation:</td>
  <td><input type="radio" id="Programmer" name="Programmer" value="Junior Programmer">
  <label for="Programmer">Junior Programmer</label>
  <input type="radio" id="Programmer" name="Programmer" value="Senior Programmer">
  <label for="Programmer">Senior Programmer</label>
  <input type="radio" id="Programmer" name="Programmer" value="Project Lead">
  <label for="Programmer">Project Lead.</label></td>
<?php echo $validateradio; ?>
</tr>
   
<tr>
  <td><p></p><br></Td>
</tr>

<tr>
   <td>Preferred Languague:</td>
   <td>
  <input type="checkbox" id="Languague1" name="Languague1" value="Java">
  <label for="Languague1"> JAVA</label>
  <input type="checkbox" id="Languague2" name="Languague2" value="PHP">
  <label for="Languague2"> PHP</label>
  <input type="checkbox" id="Languague3" name="Languague3" value="C++">
  <label for="Languague3"> C++</label>
  </td>
  <?php echo $validatecheckbox; ?>
  <?php echo $L1;?>

<?php echo $L2;?>

<?php echo $L3;?>
</tr>
  
  <tr>
  <td><p></p><br></Td>
  </tr>
  
<tr>
<td>
  <label for="myfile">Please Choose a file:</label></td>
  <td><input type="file" id="myfile" name="myfile"></td>
  </td>
  <?php echo $validatefile; ?>
  </tr>
  <tr>
  <td><p></p><br></Td>
  </tr>
  <tr>
   
  <td><input type="submit"> <input type="Reset"></td>
  </tr>
  </table>
</form>

</body>
</html>

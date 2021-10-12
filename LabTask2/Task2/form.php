<!DOCTYPE html>
<html>
<body>
<h1>Registration form </h1>
<form action="process.php" method="POST">
	<form>
<table>

<tr>
 <td> <label for="firstname">First name:</label><br></td>
 <td> <input type="text" id="firstname" name="firstname" minlength="5" ></td>
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
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="email">Email:</label></td>
 <td> <input type="email" id="email" name="email"></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
 <td><label for="age">Age:</label></td>
 <td> <input type="age" id="age" name="age"></td>
</tr>

<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>

<tr>
  <td> <label for="pwd">Password:</label></td>
  <td><input type="pwd" id="pwd" name="pwd" minlength="8"></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>



  <td>Designation:</td>
  <td><input type="radio" id="designation" name="designation" value="Junior Programmer">
  <label for="designation">Junior Programmer</label>
  <input type="radio" id="designation" name="designation" value="Senior Programmer">
  <label for="designation">Senior Programmer</label>
  <input type="radio" id="designation" name="designation" value="Project Lead">
  <label for="designation">Project Lead.</label></td>

</tr>
   
<tr>
  <td><p></p><br></Td>
</tr>

<tr>
   <td>Preferred Languague:</td>
   <td>
  <input type="checkbox" id="Languague1" name="languague" value="Java">
  <label for="Languague1"> JAVA</label>
  <input type="checkbox" id="Languague2" name="languague" value="PHP">
  <label for="Languague2"> PHP</label>
  <input type="checkbox" id="Languague3" name="languague" value="C++">
  <label for="languague3"> C++</label>
  </td>
  
</tr>
  
  <tr>
  <td><p></p><br></Td>
  </tr>
  
<tr>
<td>
  <label for="myfile">Please Choose a file:</label></td>
  <td><input type="file" id="myfile" name="myfile"></td>
  </td>
  
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

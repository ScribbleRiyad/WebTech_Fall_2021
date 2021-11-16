<!DOCTYPE html>
<html>
<body>



<div class="header">
  <h1>Riyad Management System</h1>
  <h3>We Creat Future</h3>
</div>

<div class="topnav">
  <a href="#home">Home</a>
  <a href="#about">About Us</a>
  <a href="#shop">Shop</a>
 
  
</div>



<div class="reg">
<h2>Registration form </h2>
</div>
<form action="process.php" method="POST">
<link rel="stylesheet" type="text/css" href="style.css">

	<form>
<table>

<tr>
 <td> <label for="firstname">First name:</label><br></td>
 <td> <input type="text" id="firstname" name="firstname" minlength="2" ></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td></td>
</tr>
<tr>
 <td><label for="lastname">Last name:</label></td>
 <td><input type="text" id="lastname" name="lastname" minlength="2"></td>
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
    
   
  <td>
    <div>

<button class="button">Submit</button>
<button class="button2">Reset</button>

</div>
  
  </tr>
  </table>
</form>

</body>
</html>




  

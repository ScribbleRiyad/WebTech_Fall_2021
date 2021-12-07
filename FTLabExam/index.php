<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JavaScript Form Validation using a sample registration form</title>
    <meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
    <meta name="description"
        content="This document is an example of JavaScript Form Validation using a sample registration form. " />
    <link rel='stylesheet' href='js-form-validation.css' type='text/css' />
</head>

<body onload="document.registration.userid.focus();">
    <h1>Update Employee</h1>

    <form name='registration' onSubmit="return formValidation()" method="get" action="search.php">
        <label for="firstname">Search By ID:</label><br />
        <input type="text" name="search" /><br /><br />
        <input type="submit" name="search" value="Search" /><br /><br /><br />

    </form>
    <label for="name">Name: </label><br />
    <input type="text" name="name" title="Name must be more then 8 characters" /><br />

    <label for="department">Department: </label><br />
    <input type="text" name="department" title="Department name must not be empty" /><br />

    <label for="joiningdate">Joinning Date: </label><br />
    <input type="date" name="date" value="dd/mm/yyyy" title="Joining data must not be empty" /><br />

    <label for="salary">Salary: </label><br />
    <input type="text" name="salary" title="Salary must be numeric" /><br /><br />


    <input type="submit" name="update" value="Update" /></li>
    <script src="index.js"/>
    <div>
        <?php include 'search.php';?>
    </div>

</body>

</html>

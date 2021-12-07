<?php
$con=mysqli_connect("localhost","root","","mydb");
if(!$con){
    echo "Database is not connected.".mysqli_connect_errno();
}
?>

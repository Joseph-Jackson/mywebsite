<?php
$servername = 'localhost';
$username= 'root';
$password= '';
$dbname= 'php_learning';

//establish connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check if connected

if (!$conn) 
{
                 die(mysqli_error($conn));
}

 ?>
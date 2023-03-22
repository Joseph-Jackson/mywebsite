 
<?php 
 include('connection.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$save = "INSERT INTO student (Fname,Lname,Email) Values ('$firstname','$lastname','$email')";

//check if data inserted successfully
$data=mysqli_query($conn,$save);
if ($data) 
{
echo "<script>alert('New record inserted as successfully')</script>";

}
else{

	echo "Error occured no data inserted ".$sql."<br>".mysqli_error($conn);
}


?>
<?php
include('connection.php');
if(isset($_GET['deleteid']))
{
$id = $_GET['deleteid'];
$del = "delete from users where user_id =$id";
$res = mysqli_query($conn,$del);
if ($res) 
{
	header('location:display_user');
}
else{
	die(mysqli_error($conn));
}

}

?>
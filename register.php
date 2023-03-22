<?php
include('connection.php');

if (isset($_POST['save'])) 
{
	$fname  = $_POST['firstname'];
		$lname  = $_POST['lastname'];
			$mobile  = $_POST['mobile'];
				$address  = $_POST['address'];

				$sql="insert into users(Firstname,Lastname,Mobile,Address) values ('$fname','$lname','$mobile','$address')";
				$result = mysqli_query($conn,$sql);
				if ($result) {

					echo "<script>alert('data inserted successfully')</script>";
					header('location:display_user.php');
				}
				else
				{
				 die(mysqli_error($conn));
				}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School management system</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container my-5" >
	<h1>Register here</h1>
	<form  method="post">
		<div class="form-group">
			<label>First name</label>
			<input type="text" autocomplete="off" name="firstname" placeholder="Enter First name" class="form-control">
		</div>
		<div class="form-group">
			<label>Last name</label>
			<input type="text" autocomplete="off" name="lastname" placeholder="Enter Last name" class="form-control">
		</div>
		<div class="form-group">
			<label>Mobile number</label>
			<input type="text" autocomplete="off" name="mobile" placeholder="Enter Mobile number" class="form-control">
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" autocomplete="off" name="address" placeholder="Enter Address" class="form-control">
		</div>
		<button type="submit" name="save" class="btn btn-primary">Save</button>
	</form>
</div>
</body>
</html>



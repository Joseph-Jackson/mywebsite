<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display users</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div class="container">

	<button class="btn btn-primary my-5"><a href="register.php" class="text-white" style="text-decoration: none;">Add user</a></button>
	<table class="table table-striped table-hover">
   <thead>
    <tr>
      <th >S/N</th>
      <th >First Name</th>
      <th >Last Name</th>
      <th>Mobile number</th>
      <th >Address</th>
      <th >Operations</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
   <?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
if ($result) {

	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['user_id'];
		$fname = $row['Firstname'];
		$lname = $row['Lastname'];
		$mobile = $row['Mobile'];
		$address = $row['Address'];

		echo'<tr>
			<th>'.$id.'</th>
			<td>'.$fname.'</td>
			<td>'.$lname.'</td>
			<td>'.$mobile.'</td>
			<td>'.$address.'</td>
			 <td>
    <button class="btn btn-success"><a href="update_user.php?updateid='.$id.'" class="text-white" style = "text-decoration:none"; >Edit</a></button>
    <button class="btn btn-danger"><a href="delete_user.php?deleteid='.$id.'" class="text-white" style = "text-decoration:none";>Delete</a></button>
	</td>
		</tr>';
	}

}


    ?>
   
  </tbody>
	</table>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student form</title>
	<style>
		h1{
			text-align: center;
			color: blue;
			font-family: verdana;
			font-size: 20px;

		}
		form{
			text-align: center;
			width: 50%;
			height: 300px;
			background-color: green;
			color: yellow;
		}
		input{
			font-size: 17px;
			width: 30%;
			height: 27px;
			stroke: 2px yellow;

		}
table{ 
border: 2px solid gray;
width: 70%;
height: auto;
background-color: lightgray;
padding: 17px;
border-collapse: collapse;
text-align: center;


}
tr,th,td{ 
border: 2px solid gray;
border-collapse: collapse;


 }
	</style>

</head>
<body>
<center>

<form method="POST" action="student.php">
	<br>
	<h1>Student registration form</h1>

	<br><br>
	<div class="form-group">
	<input type="text" name="firstname" class="form-control" placeholder="enter first name" minlength="4">
	</div>
	<br>
	<div class="form-group">
	<input type="text" name="lastname" class="form-control" placeholder="enter Last name" minlength="4">
	</div>
	<br>
	<div class="form-group">
	<input type="email" name="email" class="form-control" placeholder="enter Valid email" minlength="7">
	</div>
	<br>
	<div class="form-group">
	<input type="submit" name="submit" class="form-control btn-primary" >
	</div>

</form>
</center>
<?php 
	include('connection.php');
	$sql=  "SELECT * FROM student";
	$data = mysqli_query( $conn,$sql);
	
	if( mysqli_num_rows( $data) > 0){ 
		?>

<?php
echo"<h1>List of Registered student</h1>
";
echo"<center>";
echo "<table>";
echo "<tr>";
echo "<th>S/NO</th>";
echo "<th>First name</th>";
echo "<th>Last Name</th>";
echo "<th>Email</th>";
echo "<th>Edit</th>";

echo "</tr>";
while($row =mysqli_fetch_assoc($data)){


echo "<tr>";
echo" <td>".$row['id']."</td>";
echo "<td>".$row['Fname']."</td>";
echo "<td>".$row['Lname']."</td>";
echo "<td>".$row['Email']."</td>";
?>
<td><a style="text-align: center;" class="btn btn-primary" href="update.php?getid=<?php echo($row['id']); ?>">Edit</a></td>
<?php
echo "</tr>";

}

echo "</table>";
echo"</center>";


}
else{
	echo"no data found";
}
?>
</body>
</html>
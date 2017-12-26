<html>
<head><title>inserting data to database</title></head>
<body>

<?php
	$name=trim($_POST['name']);
	$marks=trim($_POST['marks']);
	$id=trim($_POST['id']);
	if(!$name || !$marks || !$id)
	{
		echo "please enter all required field";
		exit;
	}
	@ $connect = new mysqli('localhost','ashfak.shaon','shaonna','mysql');
	if(mysqli_connect_errno())
	{
		echo "connecting to the database failed please try again";
		exit;
	}
	$query="insert into info_student values('".$name."','".$id."','".$marks."')";
	$result=$connect->query($query);
	if($result)
	{
		echo " <br> $connected->affected_rows names inserted into database </br>";
	}
	else
		echo "<br> An error has occured the entries was not added </br>";
		
	$connect->close();
	?>

</body>
</html>

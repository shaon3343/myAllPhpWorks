<html><head><title> connect and fetch</title>
</head>
<body>
<?php
	$connect=new mysqli('localhost','ashfak.shaon','shaonna','mysql');
	if(mysqli_connect_errno())
	{
		echo "cannot connect to the database";
		exit;
	}
	$query = "select * from info_student where id like 3343";
	$result=$connect->query($query);
	$no_rows= $result->num_rows;
	echo "......Total student found. :-->";
	echo  $no_rows;
	
	for ($i=0; $i <$no_rows ; $i++) 
	{
		$j=$i+1;
		$row = $result->fetch_assoc();
	//	echo "<br> ($i+1) Name: </br>";
		echo "<br>$j</br>";
	//	echo htmlspecialchars(stripslashes($row['name']));
		echo $row['name'];
	//	echo "<strong><br> id: </br> </strong>";
//		echo stripslashes($row['id']);
		echo " <br>......</br>";

	}
	$result->free();
	$connect->close();
?>
</body>
</html>
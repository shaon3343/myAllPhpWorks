<html>

<head>
	<title>load Goods</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>

<body>
<?php
	$connect=new mysqli('localhost','root','rootroot','shaonTest');
	$connect->query("set character_set_results='utf8'");
	if(mysqli_connect_errno())
	{
		echo "cannot connect to the database";
		exit;
	}
	
	$query = "select * from Warehouse";
	$result=$connect->query($query);
	$no_rows= $result->num_rows;
	
	echo"<form method=\"post\" action=\"ComputeExpense.php\" target=\"_parent\"> \n";
	echo "<h2> পন্য নির্বাচন করুনঃ  </h2>\n 
    <select name=\"GoodsName\" onchange=\" echo \"printTable()\";\" xml:lang=\"en\" > \n
    <option value=\" \"> \"------পন্য নির্বাচন করুন ----\" </option>";
    
    //this.form.submit();
	
	for ($i=0; $i <$no_rows ; $i++) 
	{
		$row = $result->fetch_assoc();
		
		echo "<option value="; echo $row[GoodsName]; echo ">"; echo $row[GoodsName]; echo "</option>";
		echo "<br>";
		//	echo $row['GoodsName'];
	}
	
	echo "</select> \n
		</form>";
	function printTable(){
			echo "shaon";
			
		}
	$result->free();
	$connect->close();
?>
</body>
</html>

<?php
	require_once('HeaderPrint.php');
	require_once('FooterPrint.php');
	$hp = new HeaderPrint();
	$hp->print_header();
	header('Content-type: text/html; charset=utf8');
	$connect = new mysqli('localhost','root','rootroot','shaonTest');
	
	if(mysqli_connect_errno()) 
	{
		echo "Cannot connect to Database";
		exit;
	}
	$connect->query("set character_set_results= utf8");
	$connect->query("SET NAMES utf8");
	$dt = $_POST['date'];
	$pr = $_POST['price'];
	$qquery="INSERT INTO RoadVehicle VALUES('".$dt."','".$pr."')";
	$result=$connect->query($qquery);
	if($result)
	{
		echo " <br> $connect->affected_rows টি  পন্য ডাটাবেজে রাখা হয়েছে ।   </br>";
	}
	else
		echo "<br> কস্কি মবিন !!! কিছু একটা গোলমাল হইসে !!  </br>";
//	echo $result;
	echo "<br> আরো ডাটাবেজে রাখবেন ? </br>";
	
	echo "<form method=\"POST\" action=\"vara.php\"> \n
		<input type = \"submit\" value = \"ইয়েস !\">\n
		</form>";
	
	$connect->close();
	$fp = new FooterPrint();
	$fp->printFooter();

?>

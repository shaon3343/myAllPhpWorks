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
//	mysql_query ("set character_set_results='utf8'"); 
	$name=trim($_POST['GoodsName']);
//	echo "Name retrieved ===> $name";
	echo "<br>";
	//$n="NULL";
	$qquery="INSERT INTO Warehouse VALUES(\"NULL\",'".$name."')";
	$result=$connect->query($qquery);
	if($result)
	{
		echo " <br> $connect->affected_rows টি  পন্য ডাটাবেজে রাখা হয়েছে ।   </br>";
	}
	else
		echo "<br> কস্কি মবিন !!! কিছু একটা গোলমাল হইসে !!  </br>";
//	echo $result;
	echo "<br> আরো কিছু কি ডাটাবেজে রাখবেন ? </br>";
	
	echo "<form method=\"POST\" action=\"insertGoods.php\"> \n
		<input type = \"submit\" value = \"ইয়েস !\">\n
		<input type = \"text\" name = \"duplicate\" value = '".$name."'> \n
		</form>";
	
	$connect->close();
	$fp = new FooterPrint();
	$fp->printFooter();

?>

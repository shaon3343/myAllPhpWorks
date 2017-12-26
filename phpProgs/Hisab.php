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
	$qquery="INSERT INTO Warehouse VALUES(\"NULL\" ,\"ধনে পাতা\")";
	$result=$connect->query($qquery);
	if($result)
	{
		echo " <br> $connected->affected_rows names inserted into database </br>";
	}
	else
		echo "<br> An error has occured the entries was not added </br>";
	echo $result;
//	$query="select * from Warehouse";
//	$noRows=0;
//	$result=$connect->query($query);
	
/*	mysql_query ("set character_set_results='utf8'");   

    $sql=mysql_query("select * from BengaliTel");

    $noRow=mysql_fetch_array($sql);
*/	
/*	$noRows = $result->num_rows;
	echo "Total number of phone number:";
	echo $noRows;
	echo "<br>";
	
	for ($i=0; $i <$noRows ; $i++) 
	{
		$j=$i+1;
		$row = $result->fetch_assoc();
	//	echo "<br> ($i+1) Name: </br>";
		echo "<br>$j</br>";
	//	echo htmlspecialchars(stripslashes($row['name']));
	//	echo $row['ID'];
	//	echo " <br>";
		echo $row['GoodsName'];
		echo " <br>";
	//	echo "<strong><br> id: </br> </strong>";
//		echo stripslashes($row['id']);
		echo " <br>......</br>";

	} */
//	$result->free();
	$connect->close();
	$fp = new FooterPrint();
	$fp->printFooter();

?>

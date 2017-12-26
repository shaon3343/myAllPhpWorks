<?php
	require_once('HeaderPrint.php');
	require_once('FooterPrint.php');
	$hp = new HeaderPrint();
	$hp->print_header();
	header('Content-type: text/html; charset=UTF-8');
	$connect = new mysqli('localhost','root','rootroot','shaonTest');
	
	if(mysqli_connect_errno()) 
	{
		echo "Cannot connect to Database";
		exit;
	}
	$connect->query("set character_set_results='utf8'");
//	mysql_query ("set character_set_results='utf8'"); 
	$query="select * from BengaliTel";
	$noRows=0;
	$result=$connect->query($query);
	
/*	mysql_query ("set character_set_results='utf8'");   

    $sql=mysql_query("select * from BengaliTel");

    $noRow=mysql_fetch_array($sql);
*/	
	$noRows = $result->num_rows;
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
		echo $row['name'];
		echo " <br>";
		echo $row['telephone'];
		echo " <br>";
		echo $row['Address'];
	//	echo "<strong><br> id: </br> </strong>";
//		echo stripslashes($row['id']);
		echo " <br>......</br>";

	}
	$result->free();
	$connect->close();
	$fp = new FooterPrint();
	$fp->printFooter();

?>

<?php
	require_once('HeaderPrint.php');
	require_once('FooterPrint.php');
	$hp = new HeaderPrint();
	$hp->print_header();
	header('Content-type: text/html; charset=utf8');
	$goods=trim($_POST['GoodsName']);
	
	$dt=$_POST['date'];
	$qt=$_POST['qty'];
	$pr=$_POST['price'];
	
	echo $_POST['date']."  তারিখ  "; 
	echo "আপনি  ".$goods."  কিনেছেন,   ";
	echo "প্রতি ইউনিট ".$pr." টাকা দরে  ".$qt."  ইউনিট  <br>";
	
	$cost = $pr * $qt;
	echo "আপনার  খরচ হয়েছেঃ == ".$cost." টাকা <br>";
	
	$connect = new mysqli('localhost','root','rootroot','shaonTest');
	if(mysqli_connect_errno())
	{
		echo "Cannot Connect To the Database";
	}
	$connect->query("set character_set_results=utf8");
	$connect ->query("SET NAMES utf8");
	
	$qry=" INSERT INTO Expense VALUES('".$dt."','".$goods."','".$pr."','".$qt."')";
	$result=$connect->query($qry);
	if($result)
	{
		echo " <br> $connect->affected_rows টি  পন্য ডাটাবেজে রাখা হয়েছে ।   </br>";
	}
	else
		echo "<br> কস্কি মবিন !!! কিছু একটা গোলমাল হইসে !!  </br>";
		
	echo   "<form action=\"ComputeExpense.php\"> \n
	<input type = \"submit\" value = \"আগের পেজে যান !\"  action = \"ComputeExpense.php\"> \n
	</form>";
		
	$fp = new FooterPrint();
	$fp->printFooter();
	
	
?>

<?php
	require_once('HeaderPrint.php');
	require_once('FooterPrint.php');
	$hp = new HeaderPrint();
	$hp->print_header();
	
	echo "<form method=\"POST\" action=\"InsertInWarehouse.php\"> \n
		<h2> ডাটাবেজ এ বিভিন্ন পন্য এর নাম রাখুন : </h2>\n
		<input type = \"text\" name = \"GoodsName\" > \n
		<input type = \"submit\" value = \"submit\">\n
		</form>";
		
	echo "<h2> বর্তমানে ডাটাবেজ এ আছেঃ </h2> \n";
	
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
	echo "......মোট পন্য পাওয়া গেছেঃ .... :-->";
	echo  $no_rows;
	echo "টি ";
	echo "<br>";
	$n=0;
	for ($i=0; $i <$no_rows ; $i++) 
	{
		$j=$i+1;
		$row = $result->fetch_assoc();
	//	echo "<br> ($i+1) Name: </br>";
	//	echo "<br>$j</br>";
	//	echo htmlspecialchars(stripslashes($row['name']));
		if($row['GoodsName']==$_POST['duplicate'] && $n==0)
		{
			$n=1;
			echo "<font color=\"#ff4500\" size =12 >";
			//echo $row['GoodsName'];
			echo $_POST['duplicate'];
	//		echo "&nbsp";
			echo "</font>";
		}
		else
			echo $row['GoodsName'];
		echo "&nbsp &nbsp &nbsp ";
	//	echo "<strong><br> id: </br> </strong>";
//		echo stripslashes($row['id']);
	//	echo " <br>......</br>";

	}
	$result->free();
	$connect->close();
	
	$fp = new FooterPrint();
	$fp->printFooter();
?>

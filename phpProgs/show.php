<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/xml"; charset="utf-8" />
<link rel = "stylesheet" type = "text/css" href = "/phpProgs/jquery-ui-1.8.13.custom.css" />
<script type = "text/javascript" src = "/phpProgs/jquery.min.js"></script>
<script type = "text/javascript" src = "/phpProgs/jquery-ui-1.8.13.custom.min.js"></script>
<script type = "text/javascript">
//<![CDATA[
$(init);
function init(){
$("h1").addClass("ui-widget-header");

$("#datePicker").datepicker();

}

//]]>
</script>
<title> বাজারের হিসাব নিকাশ </title>
</head>
<body>
	<h1> খরচের খেরো-খাতাঃ </h1>
<?php
	header('Content-type: text/html; charset=utf8');
	$connect=new mysqli('localhost','root','rootroot','shaonTest');
	$connect->query("set character_set_results='utf8'");
	if(mysqli_connect_errno())
	{
		echo "cannot connect to the database";
		exit;
	}
	$date1=$_POST['date1'];
	$date2=$_POST['date2'];
	$query = "select * from Expense WHERE Date between '".$date1."' and '".$date2."' ORDER BY Date DESC";
	$qvara = "select * from RoadVehicle WHERE Date between '".$date1."' and '".$date2."' ORDER BY Date DESC";
	$result=$connect->query($query);
	$no_rows= $result->num_rows;
	$total=0;
	$Qt=0;
	$pr=0;
	
	echo "<table border=\"1\">\n";
	echo "<tr><th bgcolor=\"#CCCCFF\"> তারিখঃ </th>
<th bgcolor=\"#CCCCFF\">পন্যের নামঃ </th>
<th bgcolor=\"#CCCCFF\"> প্রতি ইউনিটের দামঃ  </th>
<th bgcolor=\"#CCCCFF\">ক্রয়ের পরিমানঃ</th>
<th bgcolor=\"#CCCCFF\">মোট মুল্যঃ</th>
</tr>";

	
	for ($i=0; $i <$no_rows ; $i++) 
	{
		
		$row = $result->fetch_assoc();
		$Qt=$row['Qty'];
		$pr = $row['pricePerUnit'];
		$tot=$pr * $Qt;
		$total = $total +$tot;
		
		echo "<tr>
		<td align=\"right\">".$row['Date']."</td>
		<td align=\"right\">".$row['GoodsName']."</td>
		<td align=\"right\">".$row['pricePerUnit']."</td>
		<td align=\"right\">".$row['Qty']."</td>
		<td align=\"right\">".$tot."</td>
		</tr>";
	}
	echo "</table>";
	
	echo "<h4>গাড়ি ভাড়াঃ </h4>";
	
	echo "<table border=\"1\">\n";
	echo "<tr><th bgcolor=\"#CCCCFF\"> তারিখঃ </th>
		  <th bgcolor=\"#CCCCFF\">গাড়ি ভাড়াঃ </th>
		  </tr>";
	$result=$connect->query($qvara);
	$no_rows= $result->num_rows;
	
	$vara=0;
		for ($i=0; $i <$no_rows ; $i++) 
		{
		
		$row = $result->fetch_assoc();
		$vara=$row['Vehicle'];
		$total = $total +$vara;
		
		echo "<tr>
		<td align=\"right\">".$row['Date']."</td>
		<td align=\"right\">".$row['Vehicle']."</td>
		</tr>";
	}
	echo "</table>";
	echo "<h3>";
	echo "$date1 থেকে $date2 পর্যন্ত মোট খরচঃ : "; echo $total;echo " ৳ " ;
	echo "</h3>";
	$result->free();
	$connect->close();
?>
</body>
</html>

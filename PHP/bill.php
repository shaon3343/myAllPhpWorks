<?php


$t=1;
echo "My name is $t";
if($t==1)
{
	echo "test <br>";
	echo "fine!!! <br>";
	$ret=add_db();
	if(!$ret)
	{
		print "ERROR DB";
	}
	else
	{	
		print "Thanks";
	}
}
else 
	{
		echo "fine!!! <br>";
		echo "test <br>";
		Bill_info();
	}
function Bill_info()
{	
$self=$_SERVER['PHP_SELF'];
echo <<<EOT
<form action="$self" method="POST">
Enter BILLNO here:<br />
<textarea name="bill_no" rows="1" cols="10" wrap>
</textarea><br />
Enter DATE here:<br />
<textarea name="bill_date" rows="1" cols="15" wrap>
</textarea><br />
Enter DESCRIPTION here:<br />
<textarea name="description" rows="1" cols="40" wrap>
</textarea><br />
Enter the RECEIPTDATE here:<br />
<textarea name="recept_date" rows="1" cols="50" wrap>
</textarea><br />
<input type="submit" name="submit" value="SUBMIT">
</form>
EOT;
}
function add_db()
{
	
$bill_no=trim($_post['bill_no']);
$bill_date=trim($_post['bill_date']);
$description=trim($_post['description']);
$receipt_date=trim($_post['receipt_date']);
/*$bill_no=1;
$bill_date="2001-01-23";
$description="shaonshaon";
$receipt_date="2004-03-12";*/

mysql_connect("localhost","root","shaonna")OR die("couldnt connect"); 
echo $bill_no;
echo"<br>"
mysql_select_db("shaon");


$sql="INSERT INTO `shaon`.`bills` (`bill_no` ,`bill_date` ,`description` ,`receipt_date`)
VALUES('5', '2015-5-21', 'shaonshuktimuktajewel', '2011-05-16')";

echo $bill_no;
echo"<br>"
//$sql="INSERT INTO bills VALUES("$bill_no","$bill_date","$description","$receipt_date")";
//$retn=mysql_query($sql);

mysql_close();
return true;
}

?>

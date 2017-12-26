<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
      <?php
if($_POST[bill_no])
{
	echo "test before add to db <br>";
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
		echo "test before form creation<br>";
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
<textarea name="receipt_date" rows="1" cols="50" wrap>
</textarea><br />
<input type="submit" name="submit" value="SUBMIT">
</form>
EOT;
}
function add_db()
{

$bill_no=trim($_POST['bill_no']);
$bill_date=trim($_POST['bill_date']);
$description=trim($_POST['description']);
$receipt_date=trim($_POST['receipt_date']);

mysql_connect("localhost","root","shaonna") OR die("couldnt connect");
echo $bill_no;
echo"<br>";
echo "BOsssss I just started working $bill_no";
mysql_select_db("shaon");
$sql="INSERT INTO bills VALUES('$bill_no', '$bill_date', '$description', '$receipt_date')"; /*checked */
echo "BOsssss I just started working $bill_no";
echo"<br>";
mysql_query($sql);
$bill_no=$bill_no+1;
echo "BOsssss I just finished working $bill_no"; 
mysql_close();
return true;
}

?>

    </body>
</html>

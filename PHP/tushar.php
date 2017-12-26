<?php
	if(isset($_POST['bill_info']))
	{
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
		Bill_info();
	}
	function Bill_info()
	{
	$self=$_SERVER['PHP_SELF'];
	echo <<< EOT
	<form action="$self" method="POST">
	Enter BILLNO here:<br>
	<input type=text name="bill_no" >
	<br>
	Enter DATE here:<br>
	<input type=text name="bill_date" >
	<br>
	Enter DESCRIPTION here:<br>
	<input type=text name="description" >
	<br>
	Enter the RECEIPTDATE here:<br>
	<input type=text name="recept_date">
	<br>
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
mysql_connect('localhost','root')OR die("couldnt connect"); 
echo $bill_no;
mysql_select_db('ahsan',$db);
$sql="INSERT INTO `billinfo`(`bill_no`,`bill_date`,`description`,`receipt_date`) VALUES('$bill_no','$bill_date','$description','$receipt_date')";
mysql_query($sql);
mysql_close();
return true;
}

?>

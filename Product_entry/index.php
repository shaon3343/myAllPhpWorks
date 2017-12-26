<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
	$pid=trim($_POST['pid']);
	$type=trim($_POST['type']);
	$desc=trim($_POST['description']);
	if(!$pid || !$type || !$desc)
	{
		echo "please enter all required field";
		exit;
	}
	@ $connect = new mysqli('localhost','ashfak.shaon','shaonna','product_list');
	if(mysqli_connect_errno())
	{
		echo "connecting to the database failed please try again";
		exit;
	}
	$query="insert into prodct values('".$pid."','".$type."','".$d."')";
	$result=$connect->query($query);
	if($result)
	{
		echo " <br> $connected->affected_rows names inserted into database </br>";
	}
	else
		echo "<br> An error has occured the entries was not added </br>";

	$connect->close();
	?>
    </body>
</html>

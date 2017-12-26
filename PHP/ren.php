<?php
	if (isset($_POST['bill_no']) )
	{
		$ret = add_to_database();
		if (!$ret) 
		{
			print "Error: Database error";
		} 
		else 
		{
			print "Thank you for submission";
		}
	} 
	else
	{
		echo "ok";
		write_form();
	}

//functions
function write_form() {
	$self =$_SERVER['PHP_SELF'];
	echo <<<EOT
	<form action="$self" method="POST">
	<table>
	<tr>
	  <td>Bill No:</td>
	  <td><input type="text" name="bill_no"/></td>
	</tr>
	<tr>
	  <td>Bill Date:</td>
	  <td><input type="date" name="bill_date" /></td>
	</tr>
	<tr>
	  <td>Description:</td>
	  <td><input type="text" name="description" /></td>
	</tr>
	<tr>
	  <td>Receipt Date:</td>
	  <td><input type="date" name="receipt_date" /></td>
	</tr>
	
	
	<tr>
	  <td>&nbsp</td>
	  <td><input type="submit" /></td>
	</tr>
	</table>
   </form>
EOT;
}

function add_to_database() {
	$bill_no = trim($_POST['bill_no']);
	$bill_date = trim($_POST['bill_date']);
	$description = trim($_POST['description']);
	$receipt_date = trim($_POST['receipt_date']);
	
	echo($bill_no);
	
	
	mysql_connect("localhost","root","") or die("Coulsdn't connect to server");
	mysql_select_db("durjay");
	//check_user($username);
	//check_email($email);
	$sql = "INSERT INTO `bill_info` VALUES ('$bill_no', '$bill_date', '$description', '$receipt_date')";
	
	mysql_query($sql);
	mysql_close();
	return true;
}

//this will check whether there is user with same user name
/*function check_user($usr) {
	
	$sql = "SELECT * FROM `site_users` WHERE username='$usr'";
	$result = mysql_query($sql);
	$rows =mysql_num_rows($result);
	if ($rows>0) {
		print "The user $usr already exists. Please select another username.";
		exit;
	}
}
//checks that email is unique
function check_email($em) {
	
	$sql = "SELECT * FROM `site_users` WHERE user_email='$em'";
	$result = mysql_query($sql);
	$rows =mysql_num_rows($result);
	if ($rows>0) {
		print "The e-mail address $em already exists. Please type another e-mail address.";
		exit;
	}
}*/
?>

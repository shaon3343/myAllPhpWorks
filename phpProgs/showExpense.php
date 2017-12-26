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
$("#datePicker1").datepicker();

}

//]]>
</script>
<title> বাজারের হিসাব নিকাশ </title>
</head>
<body>
	<h1> মোট খরচের হিসাবঃ  </h1>
	<h2> কোন তারিখ থেকে কত তারিখ পর্যন্ত হিসাব দেখতে চানঃ </h2>
<?php
/*	require_once('FooterPrint.php');
	$hp = new HeaderPrint();
	$hp->print_header(); */
	header('Content-type: text/html; charset=utf8');
//	$name=trim($_POST['GoodsName']);
//	echo $name;
	echo "<form action=\"show.php\" method=\"POST\"> \n
	<table name =\"expenseTbl\"  border=\”0\”> \n
	<tr> \n
	<td align=\”center\”><input type=\”text\” id = \"datePicker\" name=\"date1\" size=\"5\" value = \"তারিখ\"/></td>
	<td align=\”center\”><input type=\”text\” id = \"datePicker1\" name=\"date2\" size=\"5\" value = \"তারিখ\"/></td>
	
	
	</tr> \n
	</table> \n
	<input type = \"submit\" value = \"submit\" >
	</form> \n";
?>
</body>
</html>

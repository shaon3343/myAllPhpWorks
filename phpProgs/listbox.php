<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>POST receive Listings</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>

<body>
	<?php
		echo "price Range: $_POST[price]";
		echo "<br>";
	//	$choice1=$_POST['Engine'];
		$choice2=$_POST['Engine'][1];
	/*	$choice3=$_POST['Engine'][2]; */
		echo "array pos 1 is: $choice2";
	/*	echo "<br>";
		echo "$choice2";
		echo "<br>";
		echo "$choice3"; */
		

	?>
</body>

</html>

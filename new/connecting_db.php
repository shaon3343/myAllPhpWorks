<head><title>connect to database</title>
<body>

<?php
	$i=10;
	$m="shaon";
 @ $connect=new mysqli("localhost","ashfak.shaon","shaonna","mysql");
if(!mysqli_connect_errno())
	{
	echo "congrats !!! connected to localhost as ashfak.shaon";
	echo "<br>ha ha ha ha...........</br>";
	echo "<br>.......... ha ha ha ha</br>"; 
	echo "<br> $i </br>";
	echo $m;
	}
else echo "connection failed";
?>
</body>
</head>

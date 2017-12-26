<html>
<head>
<title> my_first_php</title>
</head>
<body>
this is my first PHP program , and today is : 
<?php
$todaysdate=date("d",time())."-".date("m",time())."-".date("Y",time());
echo $todaysdate;
$todaysdate=" the time is :";
echo $todaysdate;
$todaysdate=date("h:i:s");
echo $todaysdate;
?>
</body>
</html>



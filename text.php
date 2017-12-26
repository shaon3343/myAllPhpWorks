<html>
<head><title>my_second</title></head>
<body>
Great Scott!!! You are 
<?php
echo $_GET['author'];
echo " and now the time is: " ;
$current_time=date(" h:i:s ");
echo $current_time;
echo " today is: ";
$todaysdate=date("d",time())."-".date("m",time())."-".date("Y",time());
echo $todaysdate;
echo "......php.....";
print_r (phpinfo());

?>
</body>
</html>

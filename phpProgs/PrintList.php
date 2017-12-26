<?php 
	class PrintList{
			public function printList(){
			
	/*		echo  "<html>
<head>
<meta http-equiv=\"content-type\" content=\"text/xml\"; charset=\"utf-8\" />
<link rel = \"stylesheet\" type = \"text/css\" href = \"/phpProgs/jquery-ui-1.8.13.custom.css\" />
<script type = \"text/javascript\" src = \"/phpProgs/jquery.min.js\"></script>
<script type = \"text/javascript\" src = \"/phpProgs/jquery-ui-1.8.13.custom.min.js\"></script>
<script type = \"text/javascript\">
//<![CDATA[
\$(init);
function init(){
\$(\"h1\").addClass(\"ui-widget-header\");
\$(\"#tabs\").tabs();
\$(\"#datePicker\").datepicker();
\$(\"#slider\").slider()
.bind(\"slide\", reportSlider);
\$(\"#selectable\").selectable();
\$(\"#sortable\").sortable();
\$(\"#dialog\").dialog();
//initially close dialog
\$(\"#dialog\").dialog(\"close\");
}
//]]>
</script>
<title> বাজারের হিসাব নিকাশ </title>
</head>
<body>";
			*/
			header('Content-type: text/html; charset=utf8');
		//	$name=trim($_POST['GoodsName']);
		//	echo $name;
			echo "
			<table name =\"expenseTbl\"  border=\”0\”> \n
			<tr> \n
			<td align=\”center\”><input type=\”text\” id = \"datePicker\" name=date size=\"5\"/></td>
			
			<td align=\"center\">  <select name=\"GoodsName\" > <option value=\" \"> \"------পন্য নির্বাচন করুন ----\" </option>";
			
			$connect=new mysqli('localhost','root','rootroot','shaonTest');
			$connect->query("set character_set_results='utf8'");
			if(mysqli_connect_errno())
			{
				echo "cannot connect to the database";
				exit;
			}
			
			$query = "select * from Warehouse";
			$result=$connect->query($query);
			$no_rows= $result->num_rows;
			
			for ($i=0; $i <$no_rows ; $i++) 
			{
				$row = $result->fetch_assoc();
				
				echo "<option value="; echo "\"".$row['GoodsName']."\""; echo ">"; echo "\"".$row['GoodsName']."\""; echo "</option>";
				echo "<br>";
				//	echo $row['GoodsName'];
			}
			
			echo "</select> </td>
			
			<td align=\”center\”><input type=\”text\” value=\"মূল্য\" name=price size=\"5\" /></td>
			<td align=\”center\”><input type=\”text\” value=\"পরিমাণ\" name=qty size=\"5\" /></td>
			
			</tr> \n
			</table> \n
			<input type = \"submit\" value = \"submit\" >";
		
			
			$result->free();
			$connect->close();
	
		}
	}
?>


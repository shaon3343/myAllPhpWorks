<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="issue_form" action="$_SERVER['PHP_SELF']" method="POST">


        <?php


         echo "<select name=\"$pid\">\n";
         echo "<option value=\"NULL\">Select Value</option>\n";

         mysql_connect("localhost","root","shaonna") or die("coudnt connect");
         mysql_select_db("dept_project");
         $sql="SELECT pid FROM issue";
         $ret=mysql_query($sql);
        //echo "<option value=\"$strA\">$strB</option>\n";
         for($i=0; $i<mysql_num_rows($ret);$i++)
         {
             $t=mysql_result($ret, $i);
             echo "<option > $t</option>\n";
         }
// echo "<br>".mysql_result($ret, $i);
         /*foreach ($res as $ind =>$content)
            echo "<br> $ind-----$content";*/
         
         
        ?>
        </form>
    </body>
</html>

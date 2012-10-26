<!--
Copyright © 2012, Chengbin WANG
All rights reserved. Not for commercial use
binbinaus@gmail.com
-->
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("addressbook", $con);

mysql_query("DELETE FROM Persons WHERE personID=$_POST[id]");
print_r($row);

mysql_close($con);

header("location: index.php");

?>

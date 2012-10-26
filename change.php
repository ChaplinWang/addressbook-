<!--
Copyright © 2012, Chengbin WANG
All rights reserved. Not for commercial use
binbinaus@gmail.com
-->

<?php

//apply valid changes which are made by EDIT.php


$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("addressbook", $con);

mysql_query("UPDATE Persons SET FirstName='$_POST[firstname]'
WHERE personID=$_POST[id]");

mysql_query("UPDATE Persons SET LastName='$_POST[lastname]'
WHERE personID=$_POST[id]");

mysql_query("UPDATE Persons SET Email='$_POST[email]'
WHERE personID=$_POST[id]");
mysql_query("UPDATE Persons SET Tel='$_POST[tel]'
WHERE personID=$_POST[id]");
mysql_query("UPDATE Persons SET Address='$_POST[address]'
WHERE personID=$_POST[id]");
mysql_close($con);


header("location: index.php");
?>

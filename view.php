<!--
Copyright © 2012, Chengbin WANG
All rights reserved. Not for commercial use
binbinaus@gmail.com

The View page display
-->

<html>
<HEAD>

<style>
body {
   background-color: #eee;
   background-image:url('angel.jpg');

   font: 62.5%/1.3 Verdana, Arial, Helvetica, sans-serif; }
#wrap {
   font-size: 130%;
   width: 550px;
   padding: 10px 50px;
   margin: 0 auto;
   border: 1px solid #ccc;
   background-color: #fff;}

/* Table Styles */
table {
   width: 70%;
   border: 1px solid #cef;
   margin: 1em 25px;
   text-align: left; }
th {
   width: 10px;
   font-weight: bold;
   background-color: #acf;
   border-bottom: 1px solid #cef; }
td,th {
   padding: 4px 5px;
   }
.odd {
   background-color: #def; }
.odd td {
   border-bottom: 1px solid #cef; }
</style>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<script>
$(document).ready(function(){
   $("tr:even").addClass("even");
   $("tr:odd").addClass("odd");
});
</script>
</HEAD>

<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("addressbook", $con);

$result = mysql_query("SELECT * FROM Persons WHERE personID=$_GET[id]");

$row = mysql_fetch_array($result);

?>

<div id="wrap">
<h1><?php echo $row['FirstName'] . " " . $row['LastName'] ?></h1>
<p>Contact details</p>

<table cellpadding='0' cellspacing='0'><tr>
<th>FirstName</th><td><?php echo $row['FirstName']?></td></tr>
<th>LastName</th><td><?php echo $row['LastName']?></td></tr>
<th>Tel</th><td><?php echo $row['Tel']?></td></tr>
<th>Email</th><td><?php echo $row['Email']?></td></tr>
<th>Home Address</th><td><?php echo $row['Address']?></td></tr>
</table>

<form action="edit.php" method="post">
<input type="hidden" name="id" value= <?php echo $row['personID']?>>
<input type="submit" value="edit"/>
</form>

<form action="delete.php" method="post">  <input type="hidden" name="id" value= "<?php echo $row['personID'] ?>"> <input type="submit" value="delete"/> </form>


<form action="index.php" method="post"><input type="submit" value="back"/> </form>
</div>
</html>

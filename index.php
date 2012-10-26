<HTML>
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
   width: 100%;
   border: 1px solid #cef;
   margin: 1em 25px;
   text-align: left; }
th {
   font-weight: bold;
   background-color: #acf;
   border-bottom: 1px solid #cef; }
td,th {
   padding: 4px 5px; }
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


<BODY>
<div id="wrap">
   <h1>List of Contacts</h1>


<?php


# connect with mysql

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE addressbook",$con))
  {
  echo "Database created<br>";
  }
else
  {
  //echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("addressbook", $con);
$sql = "CREATE TABLE Persons
(
personID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Address varchar(200),
Email varchar(40),
Tel varchar(10)
)";

// Execute query
if (mysql_query($sql,$con)){
	echo "created table";
}else{
	//echo "Error creating table: " . mysql_error();
}



mysql_select_db("addressbook", $con);

#mysql_query("INSERT INTO Persons (FirstName, LastName, Age, Email)
#VALUES ('Peter', 'Griffin',35, 'Peter@hotmail.com')");

#mysql_select_db("addressbook", $con);
#mysql_query("INSERT INTO Persons (FirstName, LastName, Address, Email)
#VALUES ('Glenn', 'Quagmire',28 look st, 'Gle@hotmail.com')");


mysql_close($con);
?>


<form action="add.php" method="post"><input type="submit" value="create new"> </form>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("addressbook", $con);

$result = mysql_query("SELECT * FROM Persons");

while($row = mysql_fetch_array($result))
  {
  if($set == 0){
  print "<table cellpadding='0' cellspacing='0'><tr>";

  echo  "<th>Name</th>
         <th>Phone Number</th>
         <th>Edit</th>
         <th>Delete</th>
         </tr>";

  	$set = 1;
  }
  $url = "http://localhost/myaddressbook/view.php";
  $contact = $row['FirstName'] . " " . $row['LastName'];

  $id = $row['personID'];
  print  "<tr><td><a href= '${url}?id=$id'>$contact</a></td>";
  print  "<td>";
  echo $row['Tel'];
  print "</td>";
  ?>

  <td>
  <form action="edit.php" method="post">  <input type="hidden" name="id" value= "<?php echo $row['personID'] ?>"> <input type="submit" value="edit"/> </form>
  </td>
  <td>
  <form action="delete.php" method="post">  <input type="hidden" name="id" value= "<?php echo $row['personID'] ?>"> <input type="submit" value="delete"/> </form>
  </td></tr>
  <?php
  }
  ?>



<!--
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});
</script>

<body>
<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>
-->

</div>

</BODY>
</HTML>

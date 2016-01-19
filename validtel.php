<?php
$q=$_GET["q"];

if(eregi("^[0-9]{10}$", $q)) {
  echo "<FONT COLOR=\"GREEN\">Valid number</FONT>";
}
else {
	echo "<FONT COLOR=\"#FF0000\">Invalid number</FONT>";

}

?>

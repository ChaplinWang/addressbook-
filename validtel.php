<!--
Copyright © 2012, Chengbin WANG
All rights reserved. Not for commercial use
binbinaus@gmail.com

AJAX for validation check
-->

<?php
$q=$_GET["q"];

if(eregi("^[0-9]{10}$", $q)) {
  echo "<FONT COLOR=\"GREEN\">Valid number</FONT>";
}
else {
	echo "<FONT COLOR=\"#FF0000\">Invalid number</FONT>";

}

?>

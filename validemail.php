<!--
Copyright © 2012, Chengbin WANG
All rights reserved. Not for commercial use
binbinaus@gmail.com

AJAX for validation check
-->
<?php
$q=$_GET["q"];

if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $q)) {
  echo "<FONT COLOR=\"GREEN\">Valid email address</FONT>";
}
else {
	echo "<FONT COLOR=\"#FF0000\">Invalid email address</FONT>";

}

?>

<!--
Copyright © 2012, Chengbin WANG
All rights reserved. Not for commercial use
binbinaus@gmail.com

AJAX for validation check
-->
<?php
$q=$_GET["q"];

if($q) {
  echo "<FONT COLOR=\"GREEN\">Valid</FONT>";
}
else {
	echo "<FONT COLOR=\"#FF0000\">NAME MUST NOT BE EMPTY</FONT>";

}

?>

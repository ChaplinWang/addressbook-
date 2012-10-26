<!--
Copyright © 2012, Chengbin WANG
All rights reserved. Not for commercial use
binbinaus@gmail.com
-->

<html>
<head>
<script type="text/javascript">
function validemail(str)
{
if (str.length==0)
  {
  document.getElementById("validemail").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("validemail").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","validemail.php?q="+str,true);
xmlhttp.send();
}

function validtel(str)
{
if (str.length==0)
  {
  document.getElementById("validtel").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("validtel").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","validtel.php?q="+str,true);
xmlhttp.send();
}


function validname(str)
{
if (str.length==0)
  {
  document.getElementById("validname").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("validname").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","validname.php?q="+str,true);
xmlhttp.send();
}

function validlastname(str)
{
if (str.length==0)
  {
  document.getElementById("validlastname").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("validlastname").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","validlastname.php?q="+str,true);
xmlhttp.send();
}


</script>


<style type='text/css'>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
</head>
<body>
<div id="stylized" class="myform">
<form id="form" name="form" method="post" action="insert.php">
<h1>New Contact</h1>
<p>PLease fill in details</p>


<label>First Name
<span class="small">Add first name</span>
</label>
<input type="text" name="firstname" onkeyup="validname(this.value)" size="20">
<p>Suggestions: <span id="validname"></span></p>

<label>Last Name
<span class="small">Add last name</span>
</label>
<input type="text" name="lastname" onkeyup="validlastname(this.value)" size="20">
<p>Suggestions: <span id="validlastname"></span></p>

<label>Email
<span class="small">Add a valid address</span>
</label>
<input type="text" name="email" onkeyup="validemail(this.value)" size="20" >
<p>Suggestions: <span id="validemail"></span></p>


<label>Phone
<span class="small"> 04******** </span>
</label>
<input type="text" name="tel" onkeyup="validtel(this.value)" size="20">
<p>Suggestions: <span id="validtel"></span></p>

<label>Address
<span class="small"> (optional) </span>
</label>
<input type="text" name="address" >

<button type="submit">Save</button>
<div class="spacer"></div>

</form>
<br>
<form id="form" name="form" method="post" action="index.php">
<button type="submit">Cancel</button></form>

</div>
</body>
</html>


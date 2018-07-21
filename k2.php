<?php
session_start();
$_SESSION["k"]=$_POST["religion"];
$_SESSION["l"]=$_POST["category"];
$_SESSION["m"]=$_POST["income"];
$_SESSION["n"]=$_POST["education"];
$_SESSION["o"]=$_POST["occupation"];
$_SESSION["p"]=$_POST["an"];
$_SESSION["q"]=$_POST["pn"];
?>
<html>
<head>
<title>
SIGN UP
</title>
</head>
<body background="1.jpg">
<pre align="center"><font size="10%" color="black">-:-APPLICATION FORM-:-</font><br>
<font size="5%" color="black">Page 3:Account Detail</font></pre><br>
<form action="k3.php" method="POST">
<table align="center"  cellpadding="10">
<tr><td ALIGN="left"><font size="5%">Account Type</font></td><td><input type="radio" name="at" value="current" required><font size="4%">Current Account</font><br><input type="radio" name="at" value="Saving"><font size="4%">Saving Account</font></td></tr>
<tr><td ALIGN="left"><font size="5%">Services Required</font></td><td>
  <input type="checkbox" name="id[]" value="atmcard"/><font size="4%">Atm Card</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="checkbox" name="id[]" value="ibanking" /><font size="4%">Internet Banking</font><br>
  <input type="checkbox" name="id[]" value="mbanking" /><font size="4%">Mobile Banking</font>
  <input type="checkbox" name="id[]" value="ealert" /><font size="4%">Email Alert</font>
  </td></tr>
</table>
<br>
<CENTER>
<input type="submit" name="next3" value="Submit" style="width:90px; height:30px; font-size:larger;background-image:url('1.jpg')">&nbsp;
<a href="right.html" target="right"><input type="button" value="Cancel" style="width: 90px; height: 30px; font-size:larger;background-image:url('1.jpg')"></a>
</center></form>
</font>
</body>
</html>


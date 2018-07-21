<?php
session_start();
$_SESSION["r"]=$_POST["at"];
$_SESSION["s"]=implode(",",$_POST["id"]);
$_SESSION["x"]="1234-56".substr($_SESSION["e"],0,2)."-".substr($_SESSION["e"],2,4)."-".substr($_SESSION["e"],6,4);
?>
<html>
<body background="1.jpg" align="center">
<br>
<br>
<font size="5%" color="black">Generate Pin for your card number for being able to use it further transactions...</font>
<br>
<br>
<form action="k4.php" method="POST">
<table align="center"  cellpadding="10">
<tr><td align="left"><font size="5%">Your Card No is:</font></td><td><font size="5%"><?php echo "{$_SESSION["x"]}";?></font></td></tr>
<tr><td ALIGN="left"><font size="5%"> Generate Pin</font> </td><td><input type="password" name="pin" required minlength="4" maxlength="4"></tr>
<tr><td ALIGN="LEFT"><font size="5%">Security Question</font></td><td><select name="sec" required>
                                 <option>--select question--</option>
                                 <option>What is ur last four digit of mobile no?</option>
                                 <option>What is ur mother name?</option>
                                 <option>What is ur DOB?</option>
                                 <option>What is ur high school roll no?</option>
                                 <option>Which is ur favourite car?</option>
                                 </select></td></tr>
<tr><td ALIGN="LEFT"><font size="5%">Security Answer</font></td><td><input type="text" name="ans"></td></tr>

</table>
<br>
<center>
<input type="submit" value="Confirm"style="width: 90px; height: 30px; font-size:larger;background-image:url('1.jpg')">&nbsp;
<a href="right.html" target="right"><input type="button" value="Cancel"style="width: 90px; height: 30px; font-size:larger;background-image:url('1.jpg')"></a>
</center>
</form>
</body>
</html>
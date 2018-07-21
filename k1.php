<?php
session_start();
$conn=mysqli_connect("localhost","root","","kapil");
$_SESSION["a"]=$_POST["n"];
$_SESSION["b"]=$_POST["fn"];
$_SESSION["c"]=$_POST["bday"];
$_SESSION["d"]=$_POST["l"];
$_SESSION["e"]=$_POST["c"];
$_SESSION["f"]=$_POST["mail"];
$_SESSION["g"]=$_POST["ms"];
$_SESSION["h"]=$_POST["add"];
$_SESSION["i"]=$_POST["city"];
$_SESSION["j"]=$_POST["pc"];

$querry="SELECT * FROM `atm` where name='{$_SESSION["a"]}' AND fname='{$_SESSION["b"]}'";
	$result=mysqli_query($conn,$querry);
	$row=mysqli_fetch_row($result);
	if($row)
	{   
        header("Location: c.html");	
	}
$querry="SELECT * FROM `atm` where contact='{$_SESSION["e"]}'";
	$result=mysqli_query($conn,$querry);
	$row=mysqli_fetch_row($result);
	if($row)
	{   
        header("Location: d.html");
	}
	mysqli_close($conn);
?>
<html>
<head>
<title>
SIGN UP
</title>
</head>
<body background="1.jpg">
<pre align="center"><font size="10%" color="black">-:-APPLICATION FORM-:-</font><br>
<font size="5%" color="black">Page 2:Additional Detail</font></pre><br>
<form action="k2.php" method="POST">
<table align="center"  cellpadding="10">
<tr><td ALIGN="left"><font size="5%">Religion</font></td><td><select name="religion" required>
                     <option>--select Relegion--</option>
                     <option>Hindu</option>
                     <option>Muslim</option>
                     <option>Sikkh</option>
                     <option>Isai</option>
                     <option>Other</option>
                      </select></td></tr>
<tr><td ALIGN="left"><font size="5%">Category</font></td><td><select name="category" required>
                     <option>--select category--</option>
                     <option>GN</option>
                     <option>OBC</option>
                     <option>SC</option>
                     <option>ST</option>
                     <option>Others</option>
                      </select></td></tr>
<tr><td align="left"><font size="5%">Income(annual)</font></td><td><input type="text" name="income" required></td></tr>
<tr><td ALIGN="left"><font size="5%">Education</font></td><td><select name="education" required>
                     <option>--select Education--</option>
                     <option>B.Tech</option>
                     <option>B.Sc</option>
                     <option>Mba</option>
                     <option>M.Tech</option>
                     <option>Other</option>
                      </select></td></tr>
<tr><td ALIGN="left"><font size="5%">Occupation</font></td><td><select name="occupation" required>
                     <option>--select Occupation--</option>
                     <option>Agriculture</option>
                     <option>Business</option>
                     <option>Service</option>
					 <option>Student</option>
                     <option>Other</option>
                      </select></td></tr>
<tr><td align="left"><font size="5%">Adhar No</font>&nbsp</td><td><input type="text" name="an" required minlength="12" maxlength="12"></td></tr>
<tr><td align="left"><font size="5%">Pan No</font></td><td><input type="text" name="pn" required minlength="10" maxlength="10"></td></tr>
</table>
<br>
<CENTER>
<input type="submit" name="next2" value="Next" style="width:90px; height:30px; font-size:larger;background-image:url('1.jpg')">
</center></form>
</font>
</body>
</html>





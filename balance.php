<?php
session_start();
$conn=mysqli_connect("localhost","root","","kapil");
$querry="SELECT `cash` FROM `atm` where card='{$_SESSION["a1"]}' AND pin='{$_SESSION["b1"]}'";
$result=mysqli_query($conn,$querry);
$row=mysqli_fetch_row($result);
mysqli_close($conn);
?>
<html>
<body background="1.jpg" align="center">
<br>
<br>
<br>
<font size="5%" color="black">Your Effective Balance  is <?php echo $row[0];?>.</font>
<br>
<br>
<br>
<CENTER>
<a href="s1.html" target="right"><input type="button" value="Back"style="width: 90px; height: 30px; font-size:larger;background-image:url('1.jpg')"></a>&nbsp;
<a href="exit.php" target="right"><input type="button" value="Log Out"style="width: 90px; height: 30px; font-size:larger;background-image:url('1.jpg')"></a>
</body>
</html>


<?php
session_start();
$conn=mysqli_connect("localhost","root","","kapil");
$_SESSION["a1"]=$_POST["cardno"];
$_SESSION["b1"]=$_POST["pinno"];
$querry="SELECT `pin` FROM `atm` where card='{$_SESSION["a1"]}'";
$result=mysqli_query($conn,$querry);
$row=mysqli_fetch_row($result);
if($_SESSION["b1"]===$row[0])
{header("Location: s1.html");}
else
{header("Location: b.html");}
mysqli_close($conn);
?>



<?php
session_start();
$_SESSION["c1"]=$_POST["wth"];
$conn=mysqli_connect("localhost","root","","kapil");
$querry="SELECT `cash` FROM `atm` where card='{$_SESSION["a1"]}' AND pin='{$_SESSION["b1"]}'";
$result=mysqli_query($conn,$querry);
$row=mysqli_fetch_row($result);
if($row[0] > $_SESSION["c1"])
{
$remain=$row[0] - $_SESSION["c1"];
$querry="UPDATE `atm` SET `cash`=$remain where card='{$_SESSION["a1"]}' AND pin='{$_SESSION["b1"]}'";
$result=mysqli_query($conn,$querry);
header("Location: withdrawal2.html");	
}
else
{
header("Location: withdrawal3.html");	
}
mysqli_close($conn);
?>



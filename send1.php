<?php
session_start();
$_SESSION["d1"]=$_POST["sc"];
$_SESSION["e1"]=$_POST["sm"];
$conn=mysqli_connect("localhost","root","","kapil");
$querry="SELECT `cash` FROM `atm` where card='{$_SESSION["a1"]}' AND pin='{$_SESSION["b1"]}'";
$result=mysqli_query($conn,$querry);
$row=mysqli_fetch_row($result);
if($row[0] > $_SESSION["e1"])
{
$remain=$row[0] - $_SESSION["e1"];
$querry="UPDATE `atm` SET `cash`=$remain where card='{$_SESSION["a1"]}' AND pin='{$_SESSION["b1"]}'";
$result=mysqli_query($conn,$querry);
$querry="SELECT `cash` FROM `atm` where card='{$_SESSION["d1"]}'";
$result=mysqli_query($conn,$querry);
$row=mysqli_fetch_row($result);
$sum= $_SESSION["e1"] + $row[0];
$querry="UPDATE `atm` SET `cash`=$sum where card='{$_SESSION["d1"]}'";
$result=mysqli_query($conn,$querry);
header("Location: send2.html");	
}
else
{
header("Location: send3.html");	
}
mysqli_close($conn);
?>



<?php
session_start();
$f1=$_POST["np"];
$g1=$_POST["cp"];
$conn=mysqli_connect("localhost","root","","kapil");
if($f1==$g1)
{
$querry="UPDATE `atm` SET `pin`=$f1 where card='{$_SESSION["a1"]}' AND pin='{$_SESSION["b1"]}'";
$result=mysqli_query($conn,$querry);
header("Location: changed.php");	
}
else
{
header("Location: notchange.html");	
}
mysqli_close($conn);
?>



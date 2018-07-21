<?php
session_start();
$k1=$_POST["fnp"];
$l1=$_POST["fcp"];
$conn=mysqli_connect("localhost","root","","kapil");
if($k1==$l1)
{
$querry="UPDATE `atm` SET `pin`=$k1 where card='{$_SESSION["j1"]}'";
$result=mysqli_query($conn,$querry);
header("Location: forget5.php");	
}
else
{
header("Location: forget6.html");	
}
mysqli_close($conn);
?>



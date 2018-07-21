<?php
session_start();
$h1=$_POST["rsec"];
$i1=$_POST["rans"];
$_SESSION["j1"]=$_POST["rcardno"];
$conn=mysqli_connect("localhost","root","","kapil");
$querry="SELECT `sequrityans` FROM `atm` where card='{$_SESSION["j1"]}' AND sequrityques='$h1'";
$result=mysqli_query($conn,$querry);
$row=mysqli_fetch_row($result);
if($row[0]==$i1)
{
header("Location: forget2.html");	
}
else
{
header("Location: forget3.html");	
}
mysqli_close($conn);
?>



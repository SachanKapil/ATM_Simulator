<?php
session_start();
$conn=mysqli_connect("localhost","root","","kapil");
$_SESSION["y"]=$_POST["pin"];
$_SESSION["bb"]=$_POST["sec"];
$_SESSION["cc"]=$_POST["ans"];

$query="INSERT INTO `atm` (`name`, `fname`, `bday`, `gender`, `contact`, `mail`, `mstatus`, `address`, `city`, `pincode`,`religion`, `category`, `income`, `education`, `occupation`, `adhar`, `pan`,`accounttype`,`card`,`pin`,`sequrityques`,`sequrityans`,`services`)
VALUES ('{$_SESSION["a"]}','{$_SESSION["b"]}','{$_SESSION["c"]}','{$_SESSION["d"]}','{$_SESSION["e"]}','{$_SESSION["f"]}','{$_SESSION["g"]}','{$_SESSION["h"]}','{$_SESSION["i"]}','{$_SESSION["j"]}','{$_SESSION["k"]}','{$_SESSION["l"]}','{$_SESSION["m"]}','{$_SESSION["n"]}','{$_SESSION["o"]}','{$_SESSION["p"]}','{$_SESSION["q"]}','{$_SESSION["r"]}','{$_SESSION["x"]}','{$_SESSION["y"]}','{$_SESSION["bb"]}','{$_SESSION["cc"]}','{$_SESSION["s"]}')";
mysqli_query($conn,$query);
mysqli_close($conn);
session_destroy();
?>
<html>
<body background="1.jpg" align="center">
<br>
<br>
<font size="5%" color="black">Your bank account is opened now.<br>Your can enjoy all facilities now.<br>plz Log in......</font>
<br>
<br>
<center>
<a href="in.html" target="right"><input type="button" value="Log In"style="width: 90px; height: 30px; font-size:larger;background-image:url('1.jpg')"></a>&nbsp;
<a href="right.html" target="right"><input type="button" value="Home"style="width: 90px; height: 30px; font-size:larger;background-image:url('1.jpg')"></a>
</center>
</body>
</html>
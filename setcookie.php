<html>
<head>
<?php

$ck=$_COOKIE["id"];
	if (@$_GET["dcie"]=="1"){
		Setcookie("id","$ck",time()-36000);
	}
	echo '<meta http-equiv="refresh" content=0;url="index.php">';
	//else{
		//Setcookie("id","$cook",time()+3600);
		//echo '<meta http-equiv="refresh" content=0;url="test.php">';
	//}
	?>
	<input type ="hidden" name="dcie" value="0">
</head>
</html>
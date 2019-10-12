<html>
	<body>
		<form action="setcookie.php"> 
			<?php 
			echo 'hi,',$_COOKIE["id"];	
		?>
		</br>
			<input type ="hidden" name="dcie" value="1">
			
			<input type ="submit" name="submit" value="logout">	
			
		</form>
	</body>
</html>

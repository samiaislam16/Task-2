<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		Enter a number :<input type="number" name="n"><br>
		
		<input type="submit" name="submit" value="submit">
	</form>

	<?php 
		if(isset($_POST["submit"])){

			if($_POST["n"]%2){
				echo "odd number";
			}
			else{
				echo "even number.";
			}
		}

	 ?>
</body>
</html>
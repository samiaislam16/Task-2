<!DOCTYPE html>
<html>
<head>
	<title>Find even or Odd</title>
</head>
<body>

	<?php
	$array=array("rahim","karim","abdul","baker");
	echo "The array is: ";

	foreach($array as $a){
		echo " ".$a;
	}

	?>


	<form method="post">


		Find :
		<input type="text" name="input"><br>
		<input type="submit" value="Find" name="find">
	</form>

	<?php 


		if(isset($_POST["find"])){
			$c=1;
			$index=0;

			foreach($array as $a){
				if($a==$_POST["input"]){
				//echo $a;
				$c=0;
				break;
				}
				$index++;

			}
			if($c==0){
			echo "found in ".$index;
			}
			else{
				echo "not found";
			}

		}

	 ?>
</body>
</html>
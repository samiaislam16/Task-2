<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		Input two numbers for length and width:<br>
		length:<input type="number" name="length"><br>
		width:<input type="number" name="width"><br>
		<input type="submit" name="submit" value="Submit">

	</form>

	<?php   
     if(isset($_POST['submit']))  
    {   
       
        $length = $_POST['length']; 
        $width = $_POST['width'];  
      $area = $width*$length;
      $perimeter= 2*($width + $length);  
  echo "The area of a rectangle is $area ";
  echo "<br>";
  echo "The perimeter of a rectangle is $perimeter"; 
}   
?>   


</body>
</html>
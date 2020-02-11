<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="post">
        Enter 1st number :<input type="number" name="n"><br>
        Enter 2nd number :<input type="number" name="n1"><br>
        Enter 3rd number :<input type="number" name="n2"><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php 
        if(isset($_POST["submit"])){

            if($_POST["n"]>$_POST["n1"] and $_POST["n"]>$_POST["n2"])
    {
        echo "Max is ".$_POST["n"];
    }
    else if($_POST["n1"]>$_POST["n2"])
    {
        echo "Max is ".$_POST["n1"];
    }
    else
    {
        echo "Max is ".$_POST["n2"];
    }





            
        }

     ?>
</body>
</html>

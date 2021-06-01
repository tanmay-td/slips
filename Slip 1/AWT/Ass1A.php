<html>
<body>
<form method="Get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Number1 <input type="text" name="t1"> <br>
    Number2 <input type="text" name="t2"> <br>
    <input type="radio" name="r" value="add"> Add <br>
    <input type="radio" name="r" value="sub"> Sub <br>
    <input type="radio" name="r" value="mul"> Mul <br>
    <input type="radio" name="r" value="div"> Div <br>
    <input type="submit" value="Submit">
</form>
<?php
     $a=$_GET['t1'];
     $b=$_GET['t2'];
     $op=$_GET['r'];

     if($op=="add")
     {
        $c=$a+$b;
        echo "Addition is $c";
     }
     if($op=="sub")
     {
        $c=$a-$b;
        echo "Subtraction is $c";
     }
     if($op=="mul")
     {
        $c=$a*$b;
        echo "Mul is $c";
     }
     if($op=="div")
     {
        $c=$a/$b;
        echo "division is $c";
     }
?>
</body>
</html>
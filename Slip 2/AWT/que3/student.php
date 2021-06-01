<?php
$a=$_GET['a'];


 echo"Roll no = ".substr($a,3)."<br>";
 $year=substr($a,2,1);
 if($year=='1')
 echo"Year = 1st <br>";
 if($year=='2')
 echo"Year = 2nd <br>";
 if($year=='3')
 echo"Year = 3rd <br>";
 $fac=substr($a,0,2);
 if($fac=='BA')
 echo"Faculty = BA";
 if($fac=='BC')
 echo"Faculty = BCA";
 if($fac=='BS')
 echo"Faculty = B.Sc.";

?>

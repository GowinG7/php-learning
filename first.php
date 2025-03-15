<?php
//Displaying some 
echo "Let's start to learn the PHP for exam preparation<br><br>";
#variable
$a = 1.1;
$b = 2.2;
$d = 6;
$r = 4;
$c = "GG";
$char = 'G';
echo "The int value is {$a}<br> The float value is {$b}<br> 
      The string value is {$c}<br> The character value is {$d}";

      echo "<br><br>Arithmetic Operator:<br>";
$pass = true;
$fail = false;
//for boolean value false it doesnot show any output(but we have to understand it as 0) but for true it displays 1 
echo "Your pass status is : {$pass}"."<br>";
echo "Your fail status is :".$fail;
echo "<br>Sum of a and b is : ";
$sum = $a + $b;
echo $sum;
$rem = $d % $r;
echo "<br>Remainder is: {$rem}";
?>
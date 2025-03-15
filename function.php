<?php
// Function is the block of code that perform specified task and can be used repeatdly in our program
// - divided complex program into smaller pieces
// - reuse of code
// - improve the code clarity
// - reduce duplication 

function one(){
    echo " Hello I am function.";
}
one();
echo "<br>";

function sum($a,$b){
    return $a + $b;
}
$c=sum(2, 5);
echo $c . "<br>";
?>
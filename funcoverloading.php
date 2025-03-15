<?php
// Function overloading is the kinds of functions in the program where functions have same function name
// but differentiate by the total numbers and types of arguments they takes
function sum($a,$b,$c){
    $d = $a + $b + $c;
    echo $d . "<br>";
}
sum(2, 3, 2);
function sum($a, $b)
{
    $c = $a + $b;
    echo $c;
}

sum(1, 6);


#php doesnot support function overloading cause it can't accept the fucntions with same name
?>

<?php
// array is special type of variable where we can store more than one Value
// at a time of same kind differentiate with their index
$num = array(1, 11, 22, 333);
echo "The number of elements in array is : " . count($num);
echo $num[0] . " is the first elements of  <br>";
echo "Displaying using for each loop<br>";
foreach($num as $a){
    echo $a . "<br>";
}
echo "<br>displaying using for loop<br>"; 
for ($i =0 ; $i < count($num);$i++){
    echo $num[$i] . "<br>";
}

echo "<br>array methods of php:<br>";
$food = array("Biryani", "Chicken Roast", "Mutton sekuwa", "Sadheko chicken");
for ($i = 0; $i < count($food);$i++){
    echo $food[$i] . "<br>";
}
array_push($food, "Mutton fry");
echo "<br>after adding new item in array<br>";
foreach($food as $a){
    echo $a . "<br>";
}
array_pop($food);
echo "<br> after popping elements<br>";
foreach($food as $a){
    echo $a . "<br>";
}
array_shift($food);
echo "<br> Shift function remove the first element of array<br>";
foreach($food as $a){
    echo $a . "<br>";
}

$b = array_reverse($food);
echo "<br> after reversing array<br>";
foreach ($b as $a) {
    echo $a . "<br>";
}

echo count($food) . " is total number of elements in array.";
?>
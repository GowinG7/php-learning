<?php
//multidimensional array is the array of arrays that helps us to group related data together
$array1 = [["hello", 1, "two"], ["Hi", 2, "Three"]];
foreach($array1 as $a){
    foreach($a as $b){
    echo $b . " ";
    }
    echo "<br>";
}

echo "<br>";
//$i for row and $j for column $array1[$i][$j]=array[row][col]
for ($i = 0; $i < count($array1);$i++){
    for($j=0;$j<count($array1[$i]);$j++){
        echo $array1[$i][$j] . " ";
    }
    echo "<br>";
}

$a = [1, 2, 3];
foreach($a as $b){
    echo $b . " ";
}
array_push($a,572);
foreach($a as $b){
    echo $b."<br>";
}
// Outer Loop: Iterates through the outer array.
// Inner Loop: Iterates through each inner array using count($array1[$i]) to get the number of elements in each sub-array.
// Output: Each element is accessed with $array1[$i][$j] and printed.

// Explanation:
// Outer for Loop ($i Loop):

// This loop iterates through the outer array ($array1).
// count($array1) gets the total number of sub-arrays inside $array1.
// $i is the index for each sub-array in $array1.
// Each iteration of this loop focuses on one sub-array (e.g., $array1[0], $array1[1], etc.).
// Inner for Loop ($j Loop):

// This loop iterates through each element of the current sub-array ($array1[$i]).
// count($array1[$i]) gets the number of elements in the current sub-array.
// $j is the index for the elements inside the current sub-array.
// Each iteration of this loop accesses and prints one element of the sub-array ($array1[$i][$j]).
?>
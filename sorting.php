<?php
$a = ["hello", "zebra", "apple", "gobin", "nine", "topper"];
echo "Orginal array:<br>";
print_r($a);
echo "<br><br>";

echo "Arranging in ascending order<br>";
sort($a);
print_r($a);
echo "<br><br>";

echo "Arranging in descending order<br>";
rsort($a);
print_r($a);
echo "<br><br>";

echo "ksort() and krsort() are used to sort the associative array, according to their key:<br><br>";
$a = ["Nepal" => "Gobinda", "India" => "Sunder Pichaie", "US" => "Jeff Bezos"];
echo "Orginal array:<br>";
print_r($a);
echo "<br><br>";

echo "Sorting associative array in ascending order:<br>";
ksort($a);
print_r($a);
echo "<br><br>";

echo "Sorting associative array in descending order:<br>";
krsort($a);
print_r($a);
?>
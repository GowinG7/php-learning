<?php
//  --> Associative array is the special type of array made of key => value pairs
// key => Value
// id => username
// country => capital
$Capital = array("Nepal" => "Kathmandu", "India" => "New Dehli", "China" => "Beijing");
echo "Accessing the value of key Nepal = ". $Capital["Nepal"] . " <br>";
echo "Accessing the value of key China = ". $Capital["China"] . "  <br><br>";

foreach($Capital as $key => $v){
    echo  $key ." = " . $v . "<br>";
}

$num = array(1 => 2, 4 => 6);
echo "Accessing the value of key 1 = " . $num[1]."<br>";
foreach($num as $key => $value){
    echo $key . "=" . $value . "<br>";
}

echo "<br><br>";
$a = ["hello", 1, "two", "Three"];
for ($i = 0; $i < count($a);$i++){
    echo $a[$i] . "<br>";
}

?>
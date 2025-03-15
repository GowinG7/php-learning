<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Logical Operators</title>
    </head>
</html>
<?php
$temp = 15;
$Cloudy = false;
if ($temp < 0 && $temp > 30)
    echo "It is bad weather.<br>";
else
echo "It is good weather.<br>";


if($temp>0 || $temp >30)
echo "It is good weather.<br>";
else
echo "It is bad weather.<br>";

if (!$Cloudy)
    echo "It is sunny day";
else
    echo "It is cloudy day";
?>
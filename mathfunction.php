<!DOCTYPE html>
<head>
    <title> Demostration of Math function</title>
</head>
<body>
    <form action="mathfunction.php" method="POST">
        <label for="firstno">a:</label>
        <input type="text" id="firstno" name="a" placeholder="enter value of a"><br>
        <label for="secondno">b:</label>
        <input type="text" id="secondno" name="b" placeholder="enter the value of b"><br>
        <input type="submit" value="submit"><br>
    </form>
</body>
</html>
<?php
//to check if the form is submitted or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //to get the values of a and b from the form
    $a = $_POST["a"];
    $b = $_POST["b"];
    #math function
    $c = abs($a);
    echo "The absolute value of {$a} is {$c}<br>";
    $d = round($b);
    echo "The round off value of {$b} is {$d}<br>";
    echo "The square root of {$a} is " . sqrt($a)."<br>";
    echo "The power of {$a} to the {$b} is". pow($a,$b)." <br>";
    echo "The maximum among {$a} and {$b} is ". max($a, $b);
    echo "<br>The mimimum among {$a} and {$b} is " . min($a, $b);

}
?>
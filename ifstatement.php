<!DOCTYPE html>
<html lang="en">
    <head>
        <title>if statement</title>
        <style>
            body{
                align-items: center;
                height:100vh;
            }
            form{
                display:inline-block;
                border:2px solid black;
                margin: 17px;
                padding: 17px;
            }
        </style>
    </head>
    <body>
        <form action="" method="Post">
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your age"><br><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    if ($age >= 18)
        $adult = true;
    else
        $adult = false;
    if ($adult)
        echo "<br>You are eligible to visit this site";
    else
        echo "<br>You are not eligible to visit this site";
}
// if($age<0)
// echo "<br>Age cannot be negative";
//     else if ($age < 18)
//         echo "<br> You arenot eligible ";
// else
// echo "<br> You are eligible ";
// }

?>
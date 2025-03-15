<!DOCTYPE html>
<html lang="en">
    <head>
        <title>To find the circumference of circle</title>
    </head>
    <body>
    <form action="" method="POST">
        <label for="radius">Radius:</label>
        <input type="text" id="radius" name="radius" > <br>
        <input type="submit" value="Calculate"><br>
       

    </body>
    </html>
    <?php
    //to check if the form is submitted
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //to get the radius from the form
        $radius = $_POST["radius"];
        #to calculate the circumference
        $circumference = 2 * 3.14 * $radius;
        //to display result
        echo "The circumference of circle is {$circumference} unit.";
    }
    ?>
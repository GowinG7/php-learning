<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Checkbox</title>
        <style>
            body{
                background-color: whitesmoke;
                height : 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            form{
                border: 2px solid black;
                padding: 10px;
                margin: 10px;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <h4>Select the food you like:</h4>
            <input type="checkbox" name="food[]" value="Biryani">Biryani<br>
            <input type="checkbox" name="food[]" value="Chicken roast">Chicken Roast<br>
            <input type="checkbox" name="food[]" value="Fried rice">Fried Rice<br>
            <input type="checkbox" name="food[]" value="Sekuwa">Sekuwa<br>
            <input type="checkbox" name="food[]" value="Mutton fry">Mutton fry<br>
            <input type="checkbox" name="food[]" value="Mutton Xoila">Mutton Xoila<br>
            <input type="submit" name="submit" value="confirm"> <br>
        </form>
    </body>
</html>
<?php
// Check if the form has been submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //check if the submit button is clicked or not
    if(isset($_POST["submit"])){
        //get the food
        if (!empty($_POST["food"])) {

            $food = $_POST["food"];
            foreach ($food as $a) {
                echo $a . "<br>";
            }
        }
        else{
            echo "<h4>Please select food you like.<h4>";
        }
    }
}
?>
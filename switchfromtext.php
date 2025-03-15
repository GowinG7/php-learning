<!DOCTYPE html>
<html lang="en">
    <head><title>Switch Case Statement</title></head>
    <style>
        body{
            align-items:center;
            height:100vh;
        }
        form{
            display:inline-block;
            border:2px solid black;
            margin:1px;
            padding:10px;
        }
    </style>
    <body>
        <form action="" method="POST">
            <h5><i>Enter between 1-7 to choose day of week</i></h5>
            <label for="number">Number:</label>
            <input type="number" id="number" name="number" placeholder="Enter only +ve number " required><br><br>
            <input type="submit" value="submit"><br>

        </form>
    </body>
</html>
<?php
//to check if the form is submitted or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //get the value from the form
    $number = $_POST["number"];
    switch($number){
        
        case 1:
            echo "<br>Sunday";
            break;
        case 2:
            echo "<br>Monday";
            break;
        case 3:
            echo "<br>Tuesday";
            break;
        case 4:
            echo "<br>Wednesday";
            break;
        case 5:
            echo "<br>Thursday";
            break;
        case 6:
            echo "<br>Friday";
            break;
        case 7:
            echo "<br>Saturday";
            break;
        default:
            echo "<br>Please enter only positive number from 1-7";
    }
}
?>
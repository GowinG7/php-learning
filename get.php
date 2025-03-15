<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Get method</title>
    </head>
    <body>
        <form action="get.php" method="GET">
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" placeholder="Enter your username" required><br>
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" placeholder="Enter your password" required><br>
            <input type="submit" value="Submit"><br>
        </form>
    </body>
</html>
<?php
//to check if the form is submitted or not 
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $username = $_GET["uname"];
    $password = $_GET["pass"];
    echo "Your username and Password are {$username} and {$password}";
}
?>

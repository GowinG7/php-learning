<!DOCTYPE html>
<html lang="en">
    <head><title>Use of the isset function</title>
<style>
body{
    background-color: whitesmoke;
    height: 100vh;
}
form{
    display: inline-block;
    border: 2px solid black;
    margin: 10px;
    padding: 10px;

}
</style>
</head>
    <body>
        <form action="" method="POST">
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" placeholder="Enter your username" ><br><br>
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" placeholder="Enter your password" ><br><br>
            <input type="submit" name="login" value="Login">
        </form>
    </body>
</html>


<?php
// isset() is used to check variable status and it returns true if the variable is declared and is not null
//to check if the form is submit or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //use of isset() function by getting the submit value
    if(isset($_POST["login"])){
        echo "<br>You try to login<br>";

        $username = $_POST["uname"];
        $Password = $_POST["pass"];
        //check if the username and password is not empty
        if(empty("$username")){
            echo "<br> Username is empty<br>";
        }
        else{
            echo "<br> Username is {$username}<br>";
        }
        if(empty("$Password")){
            echo "<br> Password is empty<br>";
        }
        else{
            echo "<br>Your password is {$Password}";
        }
    }
}
?>
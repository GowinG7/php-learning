<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Validation </title>
        <style> 
            body{
                background-color: whitesmoke;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
            }
            form{
                border: 2px solid black;
                margin: 10px;
                padding: 20px;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <label for="uname">Username:</label>
            <input type="text" id="uname" name="uname" placeholder="Enter your username"><br><br>
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" placeholder="Enter your age"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email"><br><br>
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" placeholder="Enter your password"><br><br>
            <input type="submit" name="login" value="Login"><br>
        </form>
    </body>
</html>
<?php
//to check if the form is submitted or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // to check whether the login button is clicked or not
    if(isset($_POST["login"])){
        //to get the values from the form with sanitize
        $username = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        $password = $_POST["pass"];

        // echo "<br> your username is {$username}<br>";
        // echo "your age is $age <br>";
        // echo "your email is {$email} <br>";
        // echo "your password is {$password}";

        //validation
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        echo "<br> Your email is {$email}";
        if(empty($age)){
            echo "<br> Please enter your age";
        }
        else{
            echo "<br> Your age is $age";
        }

        if(strlen($password)<8){
            echo "<br> Your password should be atleast 8 character";
        }
        else{
            echo "<br> Your password is {$password}";
        }
        

    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Post method</title>
    </head>
    <style>

        body {
            align-items: center;
            height: 100vh;    
             }

        form{
            display: inline-block;
            margin:14px;
            padding:7px;
        }

        fieldset{
        border: 2px solid black;
        }
    </style>
    <body>
         <form action="post.php" method="POST">
            <fieldset>
                <legend>Form</legend>
           
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>
                <label for="phone">Phone no:</label>
                <input type="telephone" id="phone" name="phone" placeholder="Enter your phone number" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required><br><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" placeholder="Enter your password" required><br><br>
                <input type="submit" value="Submit"><br>
         </fieldset>
            </form>

           
            
        
    </body>
</html>
<?php
//to check if the form is submitted or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //to get the values from the form
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $Pass = $_POST["pass"];

    echo "<br>Your name is {$name}<br> Your phone number is {$phone}<br> Your email is {$email}<br> Your Password is {$Pass}<br>";

}
?>
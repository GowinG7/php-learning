<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>Php form validation 2019</title>
    <style>
        body{
            background-color: Whitesmoke;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
        
        fieldset{
            background-color: white;
            padding: 20px;
            margin: 10px;
            border: 2px solid black;
            border-radius: 7px;
        }
        input[name="submit"]{
            background-color: lightblue;
            font-size: 17px;
            padding: 5px;
            cursor: pointer;
        }

    </style>
    </head>
    <body>
        <form action="" method="POST">
            <fieldset>
                <legend><b>Register</b></legend>
                <p>*required fields</p>
                <label for="name">Your Full Name*:</label><br>
                <input type="text" id="name" name="name" ><br><br>
                <label for="email">Email Address*:</label><br>
                <input type="email" id="email" name="email"><br><br>
                <label for="uname">User Name*:</label><br>
                <input type="text" id="uname" name="uname"><br><br>
                <label for="pass">Password*:</label><br>
                <input type="password" id="pass" name="pass"><br><br><br>
                <input type="submit" name="submit" value="Submit"><br>
            </fieldset>
        </form>
    </body>
</html>
<?php
//database connection
$hostname = "localhost";
$username = "root";
$password = "";
$database = "bca24";
//create database connection
$conn = mysqli_connect($hostname, $username, $password, $database);
//check if the connection was successful
if(!$conn){
    die("Connection failed.");
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//to check if the submit button is triggered or not
if(isset($_POST["submit"])){
    //first get all the input value
        $fname = $_POST["name"];
        $email = $_POST["email"];
        $Uname = $_POST["uname"];
        $Password = $_POST["pass"];
        
        //Initialize error flag so it can be used to stop insertion if any validation failed 
        $error = false;

    //to ensure all field are not empty
        if (!(empty($fname) || empty($email) || empty($Uname) || empty($Password))) {


            //now validation
            //length of full name up to 40 characters
            if (strlen($fname) > 40) {
                echo "<br>Length of full name should be up to 40 characters.";
                $error = true;
            }
            //email address must be valid email address
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<br>Email address must be valid email address";
                $error = true;
            }
            //username must be string followed by number
            elseif (!preg_match("/^[A-Za-z]+\d+$/", $Uname)) {
                echo "<br>Username must be string followed by number";
                $error = true;
            }
            //password length must be more than 8 characters
            elseif (strlen($Password) < 8) {
                echo "<br>Password length must be more than 8 characters.";
                $error = true;
            }
            
            //if no error then insert data into database
            if (!$error) {

                //hash the password
                $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

                //sql query to insert the data
                $qry = "insert into bcauser(fname,email,uname,password) values('" . $fname . "','" . $email . "','" . $Uname . "','" . $hashedPassword . "')";

                //execute the query
                $result = mysqli_query($conn, $qry);
                //check if the query is executed
                if ($result)
                    echo "<br>Data inserted successfully";
                else
                    echo "<br>Failed to insert data";

                //close the database connection
                mysqli_close($conn);
            }
        }
        else{
            echo "<br>Fill all the input fields";
        }
}
}
?>
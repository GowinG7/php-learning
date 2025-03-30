<?php
session_start(); //start the session
//create the session
$_SESSION['user'] = "Gowin";

//Access the session
if(isset($_SESSION["user"])){
    echo "Hello, " . $_SESSION["user"];
}
else{
    echo "No Session found!";
}
//Destroy session
session_destroy();
?>
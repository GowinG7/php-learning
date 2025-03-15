<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Demonstration of Radio Button</title>
        <style>
            body {
                background-color: whitesmoke;
                height: 100vh;         
                display: flex;
                justify-content: center;
                align-items: center;
            }
            form {
                border: 2px solid black;
                padding: 20px;
                margin:10px;
                background-color: white;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <h4>TU IT subjects:</h4>
            <input type="radio" name="subject" value="BCA"> BCA<br>
           <input type="radio" name="subject" value="BIT"> BIT<br>
            <input type="radio" name="subject" value="CSIT"> CSIT<br>
           <input type="radio" name="subject" value="BICTE"> BICTE<br><br>
            <input type="submit" name="confirm" value="Confirm">
        </form>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject = null;
    
    if (isset($_POST["subject"])) {
        $subject = $_POST["subject"];
        echo "You have selected {$subject}.";
    }
    else {
        echo "<br><p>Please select one of the options.</p>";
    }
}
?>

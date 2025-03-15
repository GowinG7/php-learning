<!-- $_SERVER = is the super global variable , that contains header, patha and javascript locations
            and that shows everything that you need know about the current webpage environment -->
<!-- PHP_SELF = is a superglobal variable that contains the filename of the currently executing script relative to the root of web _SERVER
 echo $_SERVER['PHP_SELF'];?> 
always sanitize it to ensure that any special characters are properly escaped 
echo htmlspecialchars($_SERVER['PHP_SELF']);?> -->

<?php
// foreach($_SERVER as $key => $value){
//     echo $key . " = " . $value . "<br>";
// }
?>

<!-- hashing = is the process of transforming sensitive data(password) into letters, numbers or symbols through mathematical process(similar to encryption but not actually a encryption)
         it hides the original data from the third parties
          -->
    
<?php
$food = "briyani";
$hash = password_hash($food, PASSWORD_DEFAULT);
echo $hash;
// password_verify($food, $hash); // this will return true if the password is correct
if(password_verify("briyan",$hash)){
    echo "<br>biryani password is correct";
}else
    echo"<br>it is not correct";

?>
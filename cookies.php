<?php
//creating a cookies that expires in 1hrs
setcookie("username", "Gowin", time() + (2 * 3600), "/");
//to access the cookies 
if(isset($_COOKIE["username"])){
    echo "Hello," . $_COOKIE["username"];
}
else{
    echo "Cookie not found";
}
//destroy cookies
setcookie("username", "", time() - 3600, "/");

// this result in cookie not found cause cookie is being removed just after the set of cookie

// // Creating a cookie that expires in 2 hours
// setcookie("username", "Gowin", time() + (2 * 3600), "/");

// // In the first request, the cookie is not available in $_COOKIE yet
// if(isset($_COOKIE["username"])){
//     echo "Hello, " . $_COOKIE["username"];
// } else {
//     echo "Cookie not found. Please reload the page.";
// }

// // Cookie deletion should be handled separately
// if(isset($_GET['delete'])){
//     setcookie("username", "", time() - 3600, "/");
//     echo "Cookie deleted.";
// }


?>

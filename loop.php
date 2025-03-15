<?php
//for loop to print from 2-10
echo "Using for loop to print number from 2-10<br>";
for ($i = 2; $i <= 10; $i++)
    echo $i . "<br>";
?>

<?php
echo "Using do while loop <br>";
$i  = 1;
do {
   
    echo $i . "<br>";
  $i++;  
} while ($i <= 10);

?>

<?php
#for each loop
echo "<br>For each loop:<br>";
$foods = array("Biryani", "Chicken roast", "Butter Chicken", "Mutton gravy");
foreach($foods as $food){
    echo $food . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head><title>Using while loop</title>
<style>
    body{
        align-items: center;
        height:100vh;
    }
    form{
        display :inline-block;
        border: 2px solid black;
        margin:1px;
        padding:10px;
    }
</style>
</head>
    <body>
        <br><br>
        <form action="" method="POST">
            <h3>While loop</h3>
            <label for="start">Starting point:</label>
            <input type="number" id="start" name="start" placeholder="Enter the initialization" required><br>
          <br>  <label for="end">Ending point:</label>
            <input type="number" id="end" name="end" placeholder="Enter the ending number" required><br>
            <br><input type="submit" value="Count">
        </form>
    </body>
</html>

<?php
//to check whether the form is submitted or not
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //to get value from the form
    $start = $_POST["start"];
    $end = $_POST["end"];
    #to print number
    // for($i=$start;$i<=$end;$i++){
    //     echo "<br>".$i ;
    // }
    $i = $start;
    while($i<=$end){
        echo "<br>" . $i;
        $i++;
    }
}
?>
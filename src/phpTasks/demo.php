<?php 
$title = "this connect ex3";
include 'header.php' ?>

<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
echo "<h3>Hello " . $fname . " " . $lname . ", You are welcome to my site.</h3>";


?>

<?php include 'footer.php' ?>
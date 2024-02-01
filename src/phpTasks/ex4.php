<?php 
$title = "Exercise 4: Control flow and loops";
include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h3>1.If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
  decide if he/she is eligible for voting. 
  (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
  <form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="age">Age:</label>
    <input type="number" name="age" required> <br>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];

    if ($age >= 18) {
        echo "$name is eligible for voting.";
    } else {
        echo "$name is not eligible for voting.";
    }
}
?>

<h3>2.Switch Case: Write a PHP script that gets the current month and prints one of the following responses,
   depending on whether it's August or not:</h3>
<?php
$NowTheMonth = date("F");
echo "<p>";
switch ($NowTheMonth) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $NowTheMonth so I don't have any holidays.";
}
echo "</p>";
?>

<h3>3.For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
<form method="post" action="">
    <label for="number">Please enter a number:</label>
    <input type="number" name="number" required>
    <input type="submit" value="Generate Table">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    echo "<p>Multiplication table is $number:</p>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<li>$number x $i = " . ($number * $i) . "</li>";
    }
    echo "</ul>";
}
?>

<h3>4.While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>
<form method="post" action="">
    <label for="n">Please enter a value:</label>
    <input type="number" name="num" required>
    <input type="submit" value="Print Numbers">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    echo "<p>Numbers from 1 to $num:</p>";
    echo "<ul>";
    $counter = 1;
    while ($counter <= $num) {
        echo "<li>$counter</li>";
        $counter++;
    }
    echo "</ul>";
}
?>

<h3>5.Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");
echo "<p>Elements of the array:</p>";
echo "<ul>";
foreach ($myarray as $element) {
    echo "<li>$element</li>";
}
echo "</ul>";
?>


  
</body>
</html>










<?php include 'footer.php' ?>
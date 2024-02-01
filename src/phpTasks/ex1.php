<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise 1</title>
  <h3>Exercise 1: Getting Started with PHP - Li Mengyuan</h3>
</head>
<body>
  
</body>
</html>

<?php 

$name = "David";
echo "Hello world! My name is \"$name\"";
?>

<?php
$title = "PHP is interesting.";

$g1 = 5;
$g2 = 4;
$g3 = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>

    <h4><?php echo $title; ?></h4>

    <table border="1">
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td><?php echo $g1; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice</td>
                <td><?php echo $g2; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob</td>
                <td><?php echo $g3; ?></td>
            </tr>
        </tbody>
    </table>

    <img src="images/24.png" alt="this is the environment setup">

</body>
</html>
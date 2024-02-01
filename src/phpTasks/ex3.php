<?php 
$title = "Exercise 3: Variable, Strings & Operators - Li Mengyuan";
include 'header.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<h3>1.Form Creation: Create a simple HTML form to collect the user's Firstname and Lastname. 
Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3</h3>
<h3>2.Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your head tag.</h3>

<div class="container mt-4">
        <form action="demo.php" method="post" class="form">
            <div class="form-group">
                <label for="fname">Firstame:</label>
                <input type="text" id="fname" name="fname" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="lname">Lastname:</label>
                <input type="text" id="lname" name="lname" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<h3>3.HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. 
  If you wish, you can use the same table. </h3>
  <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="Number">Number</th>
                    <th scope="Name">Name</th>
                    <th scope="Age">Age</th>
                    <th scope="Gender">Gender</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>20</td>
                    <td>male</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Gleb</td>
                    <td>21</td>
                    <td>male</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Lily</td>
                    <td>25</td>
                    <td>famale</td>
                </tr>
            </tbody>
        </table>
    </div>


<h3>4.String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
Join them together and print the length of the string.</h3>

<?php
$str1 = "Hello";
$str2 = "World";
$joined = $str1 . " " . $str2;
echo "<p>Joined String: $joined</p>" ;
echo "Length of the String: " . strlen($joined);
?>

<h3>5.Number Addition: Write a script to add up the numbers: 298, 234, 46. 
  Use variables to store these numbers and an echo statement to output your answer.</h3>
<?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<p>The three numbers are:298, 234, 46 </p>";
    echo "<p>Sum of them: $sum</p>";
    ?>

<h3>6.Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
  Hint: Use predefined variables: $_SERVER</h3>
  <?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<p>Browser: $browser</p>";
    ?>


</body>
</html>

<?php include 'footer.php' ?>
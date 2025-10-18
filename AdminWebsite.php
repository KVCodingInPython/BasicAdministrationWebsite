<html>
<body>
<?php
function TestData () {
    $name = $email = $gender = $password = $city = $country = $age = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = est_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


function PrintData () {
Welcome <?php echo $_POST["Username"]; ?> <br>
Your email address is: <?php echo $_POST["E-mail address"]; ?> <br>
Your Password is: <?php echo $_POST["Password"]; ?> <br>
Your Gender is: <?php echo $_POST["Gender"]; ?> <br>
Country: <?php echo $_POST["Country"]; ?> <br>
City: <?php echo $_POST["City"]; ?> <br>
Your Age: <?php echo $_POST["Age"]; ?>
}

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>
PrintData();
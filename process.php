<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $data = "Name: $name | Email: $email" . PHP_EOL;
        
      
        file_put_contents("registration6.txt", $data, FILE_APPEND);

        echo "<h2>Successfully Registered!!!</h2>";
        echo "<p>Your details have been saved.</p>";
        echo '<h3><a href="freg.html">Go Back</a></h3>';
    } else {
        echo "<h3>Try Again!!! Invalid Input.</h3>";
    }
}
?>

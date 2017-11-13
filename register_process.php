<?php
include ("sql.php");
$mysqli = ConnectDB();
$username = $_POST["username"];
$password = md5($_POST["password"]);
$tel = $_POST["tel"];
$email = $_POST["email"];

$sql = "INSERT INTO user (username, password, tel, email) VALUES ('$username','$password','$tel','$email')";

$result = $mysqli->query($sql);

if ($result){
    $_SESSION['login'] = "TRUE";
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
    echo "User Registration Completed<p>";}
else
    echo "User Registration Fail<p>";

$mysqli->close();
?>

<a href="main.php">Go to Home Page</a>

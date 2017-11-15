<?php
include ("sql.php");
$mysqli = ConnectDB();
$username = $_POST["username"];
$password = md5($_POST["password"]);
$tel = $_POST["tel"];
$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];

$sql = "INSERT INTO user (username, password, tel, email, f_name, l_name) VALUES ('$username','$password','$tel','$email', '$fname', '$lname')";

$result = $mysqli->query($sql);


$sql = "SELECT * FROM user where username = '$username'";

$result = $mysqli->query($sql);

$data = $result->fetch_object();

$id = $data->id;
$username = $data->username;


if ($result){
    $_SESSION['login'] = "TRUE";
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
    echo "User Registration Completed<p>";}
else
    echo "User Registration Fail<p>";
$mysqli->close();

header('Location: index.php')

?>

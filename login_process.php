<?php
session_start();
//get information from front page
$username = $_POST["username"];
$password = md5($_POST["password"]);

//connect to database
include ("sql.php");
$mysqli = ConnectDB();

$sql = "SELECT username, password FROM user WHERE username='$username' AND password='$password'";

if (!$row = mysqli_fetch_array($mysqli->query($sql))) {
    echo "<html>\n<head>\n<title>nil</title>";
    echo "<meta http-equiv=\"refresh\" content=\"0; ";
    echo "URL=login.html\">\n";
    echo "</head>\n </html>";
    $_SESSION['login'] = "FALSE";
}
//if user exists, store the user data in sessions
else {
    $sql = "SELECT id FROM user WHERE username='$username'";
    $userid = mysqli_fetch_assoc($mysqli->query($sql));


    $_SESSION['login'] = "TRUE";
    $_SESSION['userid'] = $userid['id'];
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
    echo "You have successfully login the page.<p>";
    echo "<a href='main.php'>Go to Home Page</a>";
}
$mysqli->close();



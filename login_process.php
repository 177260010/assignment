<?php
session_start();
//get information from front page
$username = $_POST["username"];
$password = md5($_POST["password"]);

//connect to database
include("sql.php");
$mysqli = ConnectDB();

$sql = "SELECT username, password FROM user WHERE username='$username' OR email='$username'  AND password='$password'";

if (!$row = mysqli_fetch_array($mysqli->query($sql))) {
    echo "<html>\n<head>\n<title>nil</title>";
    echo "<meta http-equiv=\"refresh\" content=\"0; ";
    echo "URL=login.php\">\n";
    echo "</head>\n </html>";
    $_SESSION['login'] = "FALSE";
} //if user exists, store the user data in sessions
else {
    $sql = "SELECT id FROM user WHERE username='$username' OR email='$username'";
    $userid = mysqli_fetch_assoc($mysqli->query($sql));
    $id = $userid['id'];
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = $mysqli->query($sql);
    $data = $result->fetch_object();
    $username = $data->username;


    $_SESSION['login'] = "TRUE";
    $_SESSION['userid'] = $id;
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;

    if (isset($_POST["remember"])) {
        setcookie('login', 'true', time() + (86400 * 7), "/");
        setcookie('id', $userid['id'], time() + (86400 * 7), "/");
        setcookie('user', $username, time() + (86400 * 7), "/");
        setcookie('pass', $password, time() + (86400 * 7), "/");
    }
header('Location: index.php');

}
$mysqli->close();



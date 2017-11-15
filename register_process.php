<?php
include("sql.php");
$mysqli = ConnectDB();
$username = $_POST["username"];
$password = md5($_POST["password"]);
$tel = $_POST["tel"];
$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];

$sql = "INSERT INTO user (username, password, tel, email, f_name, l_name) VALUES ('$username','$password','$tel','$email', '$fname', '$lname')";

$result = $mysqli->query($sql);
if ($result) {
    $password = $_POST["password"];
    include('login_process.php');

} else {
    echo "
        <form method='post' action='register.php' id='return' hidden>
            <input type='text' name='regfail' value='fail'>
            <input type='submit'>
        </form>";
    echo "<script type=\"text/javascript\">
    document.getElementById('return').submit(); // SUBMIT FORM
</script>";
    $mysqli->close();
}


?>

<?php
session_start();
include('sql.php');

$userid = $_SESSION['userid'];
$password = md5($_POST['password']);
$newpassword = $_POST['newpassword'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$tel = $_POST['tel'];

$mysqli = ConnectDB();
$sql = "SELECT password FROM user WHERE id='$userid'";
$result = $mysqli->query($sql);

$data = $result->fetch_object();

if ($data->password <> $password) {
    $mysqli->close();
    echo "<form method='post' action='user_edit.php' id='return' >
            <input type='text' name='return' value='passwordfail'>
            <input type='submit'>
        </form>";
      echo "<script type=\"text/javascript\">
       document.getElementById('return').submit(); // SUBMIT FORM
</script>";
} else {
    if (isset($newpassword) && $newpassword <> "") {
        $newpassword = md5($newpassword);
        $sql = "UPDATE user SET password='$newpassword', f_name='$fname', l_name='$lname', tel='$tel' WHERE id='$userid'";
    } else {
        $sql = "UPDATE user SET f_name='$fname', l_name='$lname', tel='$tel' WHERE id='$userid'";
    }

    $result = $mysqli->query($sql);

    if ($result) {
        echo "<form method='post' action='user_edit.php' id='return' >
            <input type='text' name='return' value='ok'>
            <input type='submit'>
        </form>";
        echo "<script type=\"text/javascript\">
         document.getElementById('return').submit(); // SUBMIT FORM
   </script>";
    } else {
        echo "<form method='post' action='user_edit.php' id='return' >
            <input type='text' name='return' value='fail'>
            <input type='submit'>
        </form>";
        echo "<script type=\"text/javascript\">
    document.getElementById('return').submit(); // SUBMIT FORM
</script>";
    }
}

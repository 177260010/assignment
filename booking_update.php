<?php
session_start();
//check login
include "check_login.php";
//connect to database
include "sql.php";
$mysqli = ConnectDB();
$id = $_POST['delete'];
$sql = "DELETE FROM booking WHERE id = '$id'";
$result = $mysqli->query($sql);

if ($result)
    echo "Delete Success" . "<p>";
else
    echo "Delete Fail" . "<p>";

echo "<a href='mybooking.php'>Return to My Booking List</a>" . "<p>";
echo "<a href='main.php'>Return to Home Page</a>" . "<p>";
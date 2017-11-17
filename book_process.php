<?php
session_start();
//check login
include "check_login.php";
//connectDB
include "sql.php";
$mysqli = ConnectDB();

$name = $_POST['name'];
$carid = $_POST['carid'];
$userid = $_SESSION['userid'];
$bloc = $_POST['bloc'];
$rloc = $_POST['rloc'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];

$sql = "INSERT INTO booking(user_id, car_id, bookloc, returnloc, start_t, end_t) VALUES ('$userid','$carid','$bloc','$rloc','$stime', '$etime')";

$result = $mysqli->query($sql);
if($result)
    echo "Booking Success"."<p>";
else
    echo "Booking Fail"."<p>";
echo "<a href ='mybooking.php'>View Booking</a>.<p>";
echo "<a href='index.php'>Go to Home Page</a>";
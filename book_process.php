<?php
session_start();
//check login
include "check_login.php";
//connectDB
include "sql.php";
$mysqli = ConnectDB();

$car = $_POST['cars'];
$userid = $_SESSION['userid'];
$origin = $_POST['origin'];
$dest = $_POST['dest'];
$time = $_POST['time'];

$sql = "INSERT INTO booking(user_id, car_type, origin, destination, time) VALUES ('$userid','$car','$origin','$dest','$time')";

$result = $mysqli->query($sql);
if($result)
    echo "Booking Success"."<p>";
else
    echo "Booking Fail"."<p>";
echo "<a href ='mybooking.php'>View Booking</a>.<p>";
echo "<a href='main.php'>Go to Home Page</a>";
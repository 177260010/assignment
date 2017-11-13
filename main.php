<?php
session_start();
//check login
include("check_login.php");
//
?>
<html>
<title>Home</title>
<body>
<h1>Welcome to Vehicle Booking Service</h1>
<div class="container">
    <table>
        <li><a href="vehicle_book.php">Book Vehicle</a></li>
        <li><a href="mybooking.php">My Booking</a> </li>
        <li><a href="logout_process.php">LogOut</a> </li>
    </table>
</div>
</body>
</html>

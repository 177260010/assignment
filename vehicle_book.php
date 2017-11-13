<?php
session_start();
//check login
include("check_login.php");
?>

<html>
<title>Vehicle Booking</title>
<body>
<strong>Booking Form</strong>
<div class="container">
    <form method="post" action="book_process.php">
        <table>
            <tr>
                <td>Car Type:</td>
                <td><select name="cars">
                        <option value="family car">family car</option>
                        <option value="van">van</option>
                        <option value="truck">truck</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Origin:</td>
                <td><input type="text" name="origin"></td>
            </tr>
            <tr>
                <td>Destination:</td>
                <td><input type="text" name="dest"></td>
            </tr>
            <tr>
                <td>Date/Time:</td>
                <td><input type="datetime-local" name="time"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Submit"/>
                    <input type="reset" name="Reset" value="Reset"/></td>
            </tr>
        </table>
    </form>
    <a href="main.php">Back to Home Page</a>
</div>
</body>
</html>

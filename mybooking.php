<?php
session_start();
//check login
include ("check_login.php");
//connect to database
include "sql.php";

$mysqli = ConnectDB();
$userid = $_SESSION['userid'];
$sql = "SELECT username, tel, booking.id , booking.car_type, booking.origin, booking.destination, booking.time FROM user CROSS JOIN booking WHERE user.id = '$userid' AND user.id = user_id";

$result = $mysqli->query($sql);

echo "Number of bookings: $result->num_rows<p>";
$mysqli->close();
?>

<table width='800'>
    <tr>
        <td bgcolor="#003366"><span style="color:white">Booking Time</span></td>
        <td bgcolor="#003366"><span style="color:white">Car Type</span></td>
        <td bgcolor="#003366"><span style="color:white">Origin</span></td>
        <td bgcolor="#003366"><span style="color:white">Destination</span></td>
        <td bgcolor="#003366"><span style="color:white"></span></td>
    </tr>
    <?php

    if ($result->num_rows >0){
        while($row = $result->fetch_object()){
            echo
                "<tr>".
                "<td>".$row->time."</td>".
                "<td>".$row->car_type."</td>".
                "<td>".$row->origin."</td>".
                "<td>".$row->destination."</td>".
                "<td>"."<form action='booking_update.php' method='post'><input type='hidden' name='delete' value='$row->id'><input type='submit' value='Delete'>"."</form>"."</td>".
                "</tr>";
        }
    }else{
        echo "<tr>"."<td>"."No results"."</td>"."</tr>";
    }

    ?>
</table>
<p/>
<a href="vehicle_book.php">New Booking</a><p/>
<a href="main.php">Home Page</a>
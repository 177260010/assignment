<?php
include ('header.php');
include ('check_admin.php');

include ("sql.php");

$mysqli = ConnectDB();

$sql = "SELECT username, tel, booking.id, booking.bookloc, booking.returnloc, booking.start_t, booking.end_t FROM user CROSS JOIN booking WHERE user.id = user_id";

$result = $mysqli->query($sql);

echo "Number of bookings: $result->num_rows<p>";
$mysqli->close();
?>

<table class="table table-bordered">
    <tr>
        <td>User Name</td>
        <td>tel</td>
        <td>Booking ID</td>
        <td>Booking Location</td>
        <td>Return Location</td>
        <td>Start Time</td>
        <td>Return Time</td>
        <td></td>
    </tr>
    <?php

    if ($result->num_rows >0){
        while($row = $result->fetch_object()){
            echo
                "<tr>".
                "<td>".$row->username."</td>".
                "<td>".$row->tel."</td>".
                "<td>".$row->id."</td>".
                "<td>".$row->bookloc."</td>".
                "<td>".$row->returnloc."</td>".
                "<td>".$row->start_t."</td>".
                "<td>".$row->end_t."</td>".
                "</tr>";
        }
    }else{
        echo "<tr>"."<td>"."No results"."</td>"."</tr>";
    }

    ?>
</table>
<p/>
<a href="admin_main.php">Admin Home</a><p/>
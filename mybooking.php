<?php

//check login
include ("header.php");
//connect to database
include "sql.php";

$mysqli = ConnectDB();
$userid = $_SESSION['userid'];
$sql = "SELECT booking.id, booking.bookloc, booking.returnloc, booking.start_t, booking.end_t FROM user CROSS JOIN booking WHERE user.id = '$userid' AND user.id = user_id";

$result = $mysqli->query($sql);

echo "Number of bookings: $result->num_rows<p>";
$mysqli->close();
?>

<table class="table table-bordered">
    <tr>
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
<a href="booking_list.php">New Booking</a><p/>
<a href="index.php">Home Page</a>
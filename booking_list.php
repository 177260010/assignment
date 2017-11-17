<?php
include('header.php');
if ($login <> 'user') {
    echo 'Please Login First.';
    exit();

}

else {
include("sql.php");
$mysqli = ConnectDB();
$sql = "SELECT  * FROM car";

$result = $mysqli->query($sql);

echo "Number of cars: $result->num_rows<p>";

$mysqli->close();
}
?>
<table class='table table-bordered'>
    <tr>
        <td>Picture</td>
        <td>Name</td>
        <td>Price/h</td>
        <td
        </td>

        <?php
        if (isset($_SESSION['admin']))

            echo "<td bgcolor='#003366'><span style='color:white'>aaa</span></td>"
        ?>
    </tr>
    <?php

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            echo
                "<tr>" .
                "<td>" . "<img src='$row->car_img'>" . "</td>" .
                "<td>" . $row->name . "</td>" .
                "<td>" . "$" . $row->price . "/H" . "</td>" .
                "<td>" . "<form method='post' name=''book action='vehicle_book.php'>" .
                "<input type='text' name='id' value='$row->id' hidden>" .
                "<input type='text' name='name' value='$row->name' hidden>" .
                "<input type='text' name='img' value='$row->car_img' hidden>" .
                "<input type='text' name='price' value='$row->price' hidden>" .
                "<input type='submit' value='Book'>" .
                "</form>" . "</td>" .
                "</tr>";
        }
    } else {
        echo "No results";
    }

    ?>
</table>

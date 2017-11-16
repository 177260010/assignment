<?php
include('header.php');
if ($login <> 'true') {
    echo 'Please Login First.<p>';
    echo "<a href='login.php'>login.</a>";
}

include ("sql.php");
$mysqli = ConnectDB();
$sql = "SELECT  * FROM car";

$result = $mysqli->query($sql);

echo "Number of cars: $result->num_rows<p>";

$mysqli->close();
?>
<table class="table table-bordered">
    <tr>
        <td>Picture</td>
        <td>Name</td>
        <td >Price/h</td>
        <td</td>

        <?php
        if (isset($_SESSION['admin']))

        echo "<td bgcolor='#003366'><span style='color:white'>aaa</span></td>"
        ?>
    </tr>
    <?php

    if ($result->num_rows >0){
        while($row = $result->fetch_object()){
            echo
                "<tr>".
                "<td>".$row->carimg."</td>".
                "<td>".$row->name."</td>".
                "<td>"."$".$row->price."/H"."</td>".
                "<td>"."<form method='post' name=''book>".
                "<input type='text' value='$row->id' hidden>".
                "<input type='submit' value='Book'>".
                "</form>"."</td>".
                "</tr>";
        }
    }else{
        echo "No results";
    }

    ?>
</table>

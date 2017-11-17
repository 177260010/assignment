<?php
include ('header.php');
include ('check_admin.php');

include ("sql.php");

$mysqli = ConnectDB();
$sql = "SELECT * FROM user";
$result = $mysqli->query($sql);

echo "Number of users: $result->num_rows<p>";
$mysqli->close();
?>

<table class="table table-bordered">
    <tr>
        <td>User ID</td>
        <td>User Name</td>
        <td>tel</td>
        <td>Email</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td></td>
    </tr>
    <?php

    if ($result->num_rows >0){
        while($row = $result->fetch_object()){
            echo
                "<tr>".
                "<td>".$row->id."</td>".
                "<td>".$row->username."</td>".
                "<td>".$row->tel."</td>".
                "<td>".$row->email."</td>".
                "<td>".$row->f_name."</td>".
                "<td>".$row->l_name."</td>".
                "</tr>";
        }
    }else{
        echo "<tr>"."<td>"."No results"."</td>"."</tr>";
    }

    ?>
</table>
<p/>
<a href="admin_main.php">Admin Home</a><p/>

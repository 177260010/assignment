<?php

// Connect to the db
function ConnectDB(){
    $mysqli = new mysqli("localhost", "root", "", "book_vehicle") or die("Cannot connect to database server! Please check the connection.");
    return $mysqli;
}

?>
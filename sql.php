<?php

// Connect to the db
function ConnectDB(){
    $mysqli = new mysqli("assignment.cprfoxekccb6.ap-southeast-1.rds.amazonaws.com", "admin", "password", "book_vehicle") or die("Cannot connect to database server! Please check the connection.");
    return $mysqli;
}

?>
<?php

// Connect to the db
if(!function_exists('ConnectDB')){
function ConnectDB(){
    $mysqli = new mysqli("assignment.cprfoxekccb6.ap-southeast-1.rds.amazonaws.com", "admin", "password", "book_vehicle") or die("Cannot connect to database server! Please check the connection.");
    return $mysqli;
}
}

?>
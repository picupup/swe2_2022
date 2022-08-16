<?php
function return_db_connection(){
    include("../private/dbconnection.inc.php");
    $conn = new mysqli($host, $user, $password, $database);
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else {
        return $conn;
    }
}
?>
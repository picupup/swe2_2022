<?php
require_once("../private/dbconnection.inc.php");
$conn = new mysqli($host, $user, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else {
    $sql = "select * from itc_kunden";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {

        $data[] = $row;
    };

    if (isset($data)){
        $json = json_encode($data);
        echo $json; 
    } else{
        $json = null;
        echo "keine Einträge";
    }
    //return $json;
}
?>
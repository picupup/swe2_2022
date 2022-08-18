<?php
function print_sqlResult_ToJson($sql){
include("db_connection.php");
$conn = return_db_connection();
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
}
?>
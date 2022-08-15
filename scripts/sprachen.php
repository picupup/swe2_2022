<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../html_parts.php");



function get_all_ub_sprachen(){

}


function get_all_dol_sprachen(){

}


function get_all_mt_sprachen(){

}

function get_all_sprachen(){
    require_once("../../private/dbconnection.inc.php");
    $conn = new mysqli($host, $user, $password, $database);
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "select id, sprache from itc_sprachen";
    $result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $item){
            echo $item;
        }
        $data[] = $row;
    };

    if (isset($data)){
        $json = json_encode($data);
        //echo $json; 
    } else{
        $json = null;
        echo "keine Einträge";
    }
}




html_pageHeader();
get_all_sprachen();
html_footer();

?>
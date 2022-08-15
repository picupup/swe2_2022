<?php

require_once("../private/dbconnection.inc.php");

$conn = new mysqli($host, $user, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

function get_all_ub_sprachen(){

}


function get_all_dol_sprachen(){

}


function get_all_mt_sprachen(){

}

function get_all_sprachen(){
    $sql = "select id, sprache from itc_sprachen";
    $result=mysqli_query($conn, $sql);
    echo $result;
}

get_all_sprachen();

?>
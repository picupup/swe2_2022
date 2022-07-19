<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

#if (! isset($_POST[""] ) ){
#  
#}


require_once("../../private/dbconnection.inc.php");
$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["vorname"];
$geburtsdatum = $_POST["geburtsdatum"];
#$name = $_POST["name"];
#$name = $_POST["name"];
#$name = $_POST["name"];
#$name = $_POST["name"];
$name = $_POST["email"];
#$name = $_POST["name"];
#$name = $_POST["name"];

echo $name;
echo $email;
?>

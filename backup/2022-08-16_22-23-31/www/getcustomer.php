<?php

require_once("../private/dbconnection.inc.php");
$conn = new mysqli($host, $user, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else {
	$sql = "SELECT itc_kunden.id, itc_kunden.vorname, itc_kunden.nachname, itc_kunden.geschlecht, itc_kunden.gbdatum, itc_kunden.art, itc_adresse.strasse, itc_adresse.hausnr, itc_adresse.plz, itc_adresse.ort FROM itc_kunden INNER JOIN itc_adresse ON itc_kunden.adresse=itc_adresse.id";
    //$sql = "select * from itc_kunden";
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

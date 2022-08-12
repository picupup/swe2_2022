<?php

//Dieser Abschnitt für Fehler ausgaben der PHP gedacht <<Herr Radfelder>>
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ( ! isset( $_GET["nn_id"] ) ){
  echo "Ich will deinen Namen!\n";
  exit;
}
require_once("../private/dbconnection.inc.php");
echo "Include => sucess.";
$conn = mysqli_connect($host, $user, $password, $database);
//$mysqli = new mysqli($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Daten Bank verbingung => sucess.";
//Kunden Daten
$nn_id=$_GET["nn_id"];
$vn_id=$_GET["vn_id"];
$gb_id=$_GET["gb_id"];
$ge_id=$_GET["ge_id"];
$person_art_id=$_GET["person_art_id"];

//Adressdaten
$st_id=$_GET["st_id"];
$hausnr_id=$_GET["hausnr_id"];
$plz_id=$_GET["plz_id"];
$ort_id=$_GET["ort_id"];



//Anfrage Daten
$doku_id=$_GET["doku_id"];
$email_id=$_GET["email_id"];  //Email ist bis jetzt in keine Tabelle gespeichert
$dock_art_id=$_GET["dock_art_id"];
//$Kommentar=
$von_sprache_id=$_GET["von_sprache_id"];
$zu_sprache_id=$_GET["zu_sprache_id"];

//: Füg die Adresse in der Tabelle Adresse  und speichere die letzte eingefügte Id.

$sql = " insert into itc_adresse (strasse, hausnr, plz, ort) values (\"".$st_id."\", \"".$hausnr_id."\", \"".$plz_id."\", \"".$ort_id."\") ";
mysqli_query($conn, $sql);

//: Adress ID = ID der zu letzt eingefügte Id in der Adress Tabelle.
$id_last_adress=mysqli_insert_id($conn);

//: Füg der Kudden ein und seine Adress id,Speichere Kuden Id
$sql= "insert into itc_kunden (vorname, nachname, geschlecht, gbdatum, art, adresse) values (\"".$vn_id."\", \"".$nn_id."\", \"".$ge_id."\", \"".$gb_id."\", \"".$person_art_id."\", $id_last_adress) ";
mysqli_query($conn, $sql);
$id_last_kunde=mysqli_insert_id($conn);
//: Füg Anfrage mit Kunden ID ein.
//TODO: Tabelle der Anfrage ist nicht komplett.
$sql= "insert into itc_uebersetzer_anf (kunden_id, aufklaerung, namen_aufklaerung) values ($id_last_kunde, \"".$dock_art_id."\", \"".$von_sprache_id."\")";
mysqli_query($conn, $sql);
$id_last_anfrage=mysqli_insert_id($conn);
//mysqli_query($conn, $sql);

//file_put_contents("anfrage.log", "Script war hier", FILE_APPEND);

//_GET kann auch durch _POST ersetzt werden.

//$name=$_GET["name"];
echo "VORNAME => $nn_id    ";
echo "Id der Zuletzt eingegebene Adresse => $id_last_adress        " ;
echo "Id der Zuletzt eingegebene kunde => $id_last_kunde           " ;
echo "Id der Zuletzt eingegebene Anfrage => $id_last_anfrage           " ;


<?php
include("./scripts/get_sql_result.php");
$sql = "SELECT itc_kunden.id, itc_kunden.vorname, itc_kunden.nachname, itc_kunden.geschlecht, itc_kunden.gbdatum, itc_kunden.art, itc_adresse.strasse, itc_adresse.hausnr, itc_adresse.plz, itc_adresse.ort FROM itc_kunden INNER JOIN itc_adresse ON itc_kunden.adresse=itc_adresse.id";
print_sqlResult_ToJson($sql);
?>

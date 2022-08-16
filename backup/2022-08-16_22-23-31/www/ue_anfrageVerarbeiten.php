<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("html_parts.php");
html_pageHeader();
echo"<main class=messageMain> 
      <div class='message-container'>
        <div class='message-box'>
          <h2>Vielen Dank!</h2><br>";

//Stammdaten
$name = $_POST["name"];
$vorname = $_POST["vorname"];
$geburtsdatum = $_POST["geburtsdatum"];
$geschlecht = $_POST["geschlecht"];
$privatGesch = $_POST["privatGesch"];
$strasse = $_POST["strasse"];
$hausnummer = $_POST["hausnummer"];
$postleitzahl = $_POST["postleitzahl"];
$ort = $_POST["ort"];
$email = $_POST["email"];
$vonSprache = $_POST["vonSprache"];
$zuSprache = $_POST["zuSprache"];
$kommentar = $_POST["kommentar"];

// Übersetzung exklusiv:
  $docTyp = $_POST["docTyp"];
  $dokument = $_POST["dokument"];

// include Connection
include("db_connection.php");
include("./scripts/checkIfExist.php");
$conn = return_db_connection();
$ergebnis = checkIfExist($_POST, $conn);
$kundenId = $ergebnis[0];
$adressId = $ergebnis[1];
$conn -> query("INSERT INTO itc_uebersetzer_anf(kunden_id, dokument_titel, namen_aufklaerung, vonSprache, zuSprache) VALUES ($kundenId, '$_POST[docTyp]', '$_POST[kommentar]', '$_POST[vonSprache]', '$_POST[zuSprache]')");
echo "Ihre Kunden-ID: <b>".$kundenId."</br></br>";
mysqli_close($conn);

echo" <h3>Wir haben Ihre Anfrage erhalten.</h3><br>
        <h4>Sie bekommen schnellstmöglich Rückmeldung.<h4>
      </div>
    </div>
</main>";
html_footer();
?>


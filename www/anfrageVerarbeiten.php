<?php  

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("html_pageHeader.php");
echo"<main class=messageMain> 
      <div class='message-container'>
        <div class='message-box'>
          <h2>Vielen Dank!</h2><br>";

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
$docTyp = $_POST["docTyp"];
$dokument = $_POST["dokument"];
$vonSprache = $_POST["vonSprache"];
$zuSprache = $_POST["zuSprache"];
$kommentar = $_POST["kommentar"];

// include Connection
// Create Connection
// Check Connection
require_once("../private/dbconnection.inc.php");
include("./scripts/checkIfExist.php");
$conn = new mysqli($host, $user, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else {
    $ergebnis = checkIfExist($_POST, $conn);
    $kundenId = $ergebnis[0];
    $adressId = $ergebnis[1];
    echo "Ihre Kunden-ID: <b>".$kundenId."</br></br>";
    #echo "adressId".$adressId."<br>";
    #$conn -> query("INSERT INTO itc_kunden(vorname, nachname, geschlecht, gbdatum, art, adresse) VALUES ('$vorname', '$name', '$geschlecht', '$geburtsdatum', '$privatGesch', '$adressId')"); 
    #$kundenId = mysqli_insert_id($conn);
    mysqli_close($conn);
  }

  echo" <h3>Wir haben Ihre Anfrage erhalten.</h3><br>
        <h4>Sie bekommen schnellstmöglich Rückmeldung.<h4>
      </div>
    </div>
</main>";
require_once("html_footer.php");
?>


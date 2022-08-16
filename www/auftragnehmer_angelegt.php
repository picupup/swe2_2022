<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("html_parts.php");
include("scripts/checkIfExist_translator.php");
require_once("../private/dbconnection.inc.php");

html_pageHeader();
echo"<main class=messageMain> 
      <div class='message-container'>
        <div class='message-box'>
          <h2>Übersetzer/Dolmetscher Angelegt!</h2><br>
          
          </div>
      </div>
  </main>";

// echo $_POST["beideVarianten"];

// $name = $_POST["name"];
// $vorname = $_POST["vorname"];
// $geburtsdatum = $_POST["geburtsdatum"];
// $geburtsort = $_POST["geburtsort"];
// $geschlecht = $_POST["geschlecht"];

// $strasse = $_POST["strasse"];
// $hausnummer = $_POST["hausnummer"];
// $postleitzahl = $_POST["postleitzahl"];
// $ort = $_POST["ort"];
// $email = $_POST["email"];

// $zeilenpreis = $_POST["zeilenpreis"];


$conn = new mysqli($host, $user, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else {
    $ergebnis = checkIfExist_tr($_POST, $conn);

    $dolmetscherSprache = $_POST["dolmetscherSprache"];
    $ubersetzerSprache = $_POST["ubersetzerSprache"];
    $beideVarianten = $_POST["beideVarianten"];
    $telefonnummer = $_POST["mutterSprache"];
    // $telefonnummer = $_POST["telefonnummer"];
}




echo"   </div>
      </div>
  </main>";
    echo formUbersetzerDolmetscherAnlegen();
  html_footer();
?>



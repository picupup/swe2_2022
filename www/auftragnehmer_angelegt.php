<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("html_parts.php");
include("scripts/checkIfExist_translator.php");
include("/var/www/html/swe2_2022team17/private/dbconnection.inc.php");

html_intern_pageHeader();
echo"<main class=messageMain> 
      <div class='message-container'>
        <div class='message-box'>
          ";

$conn = new mysqli($host, $user, $password, $database);
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
} else  {

  if ( isset($_POST["dolmetscherSprache"]) or isset($_POST["ubersetzerSprache"]) or isset($_POST["beideVarianten"]) ){

    // 0 = Mutter Sprache
    // 1 = Dolmetscher
    // 2 = Übersetzer
    // 3 = Beides

   //Ab hier die Vier IF Anweisungen sind für die Vier Fälle oben im Kommentar gedacht.
    $ergebnis = checkIfExist_tr($_POST, $conn);
    if (isset($_POST["dolmetscherSprache"])){
      $dol = $_POST["dolmetscherSprache"];
      foreach ((array) $_POST["dolmetscherSprache"] as $sprachID){
        //TODO: Hier erhält man keine Array, vom $_POST["dolmetscherSprache"], obwohl der select im Html auf Multi gesetzt ist.
        $sql = "insert into itc_skills (translator_id, sprach_id, variante) values ($ergebnis[0],  $dol, 1)";
        mysqli_query($conn, $sql);
      }
    }
    
    if (isset($_POST["ubersetzerSprache"])){
      $dol = $_POST["ubersetzerSprache"];
      foreach ((array) $_POST["ubersetzerSprache"] as $sprachID){
        //TODO: Hier erhält man keine Array, vom $_POST["dolmetscherSprache"], obwohl der select im Html auf Multi gesetzt ist.
        $sql = "insert into itc_skills (translator_id, sprach_id, variante) values ($ergebnis[0],  $sprachID, 2)";
        mysqli_query($conn, $sql);
      }
    }
    

    if (isset($_POST["beideVarianten"])){
      $dol = $_POST["beideVarianten"];
      foreach ((array) $_POST["beideVarianten"] as $sprachID){
        //TODO: Hier erhält man keine Array, vom $_POST["dolmetscherSprache"], obwohl der select im Html auf Multi gesetzt ist.
        $sql = "insert into itc_skills (translator_id, sprach_id, variante) values ($ergebnis[0],  $sprachID, 3)";
        mysqli_query($conn, $sql);
      }
    }

    if (isset($_POST["mutterSprache"])){
      $dol = $_POST["mutterSprache"];
      foreach ((array) $_POST["mutterSprache"] as $sprachID){
        //TODO: Hier erhält man keine Array, vom $_POST["dolmetscherSprache"], obwohl der select im Html auf Multi gesetzt ist.
        $sql = "insert into itc_skills (translator_id, sprach_id, variante) values ($ergebnis[0],  $sprachID, 0)";
        mysqli_query($conn, $sql);
      }
    }

    echo "<h2>Übersetzer/Dolmetscher Angelegt!</h2><br>";

  } else
  {
    echo "<h2>Könnte nicht eingefügt werden. <br><br>Bitte eine Variante der Sprachfähigkeiten auswählen.</h2>";
  }
}




echo"</div>
      </div>
  </main>";
    echo formUbersetzerDolmetscherAnlegen($conn);
  html_footer();
?>



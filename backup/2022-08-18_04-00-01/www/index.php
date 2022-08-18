<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("html_parts.php");

//require_once("html_pageHeader.php");
html_pageHeader();
echo"
<main class='startseite'>
    <h1 class='startHeading'> Herzlich Willkommen auf der neuen Webseite der ITC Bremerhaven! </h1>
    <div class='startParagraph'>
        <paragraph > ITC ist die Abkürzung für 'International Translation Company' und genau darum geht es hier: <br>
                Wir vermitteln Ihnen seit 1994 für alle Weltsprachen einen Dolmetscher oder einen Übersetzer und wickeln den gesamten Prozess für Sie ab.
        </paragraph><br>
    </div>
    <button href='#' onclick=\"dialogOeffnen('ue_anfrage_dia')\">Übersetzer-Anfrage erstellen</button>
    <button href='#' onclick=\"dialogOeffnen('dol_anfrage_dia')\">Dolmetscher-Anfrage erstellen</button>

</main>";
//require_once("html_footer.php");
html_footer();
?>




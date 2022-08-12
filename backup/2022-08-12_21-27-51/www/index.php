<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("html_pageHeader.php");
echo"
<main class='startseite'>
    <h1 class='startHeading'> Herzlich Willkommen, auf der neuen Webseite der ITC Bremerhaven! </h1>
    <div class='startParagraph'>
        <paragraph > ITC ist die Abkürzung für 'International Translation Company' und genau darum geht es hier: <br>
                Wir vermitteln Ihnen seit 1994 für alle Weltsprachen einen Dolmetscher oder einen Übersetzer und wickeln den gesamten Prozess für Sie ab.
        </paragraph><br>
    </div>
    <button class='variabler_body' style='margin-left:0%;float:left;margin-right:10px' onclick='execUebersetzungAnfrage()' id='ue_button'>Anfrage stellen für eine Übersetzung</button>
    <button class='variabler_body' onclick='execDolmetscherAnfrage()' id='do_button'>Anfrage stellen für einen Dolmetscher</button>
    <nav class='variabler_body'  id='variabler_body'>
    </nav>

</main>";
require_once("html_footer.php");
?>




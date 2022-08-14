<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("html_parts.php");



//require_once("html_intern_pageHeader.php");
html_intern_pageHeader();
echo"<main>
        <h2 class='startHeading'>Willkommen, auf Ihrem Dashboard!</h2><br>
        <h4>Kunden-Datenbank:</h4><br>
        <table id=kundenTabelle>
            <thead>
                <tr>
                    <th>Kunden-ID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Geschlecht</th>
                    <th>Geburtsdatum</th>
                    <th>Kundenart</th>
                    <th>Straße</th>
                    <th>Hausnummer</th>
                    <th>Postleitzahl</th>
                    <th>Ort</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Kunden-ID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Geschlecht</th>
                    <th>Geburtsdatum</th>
                    <th>Kundenart</th>
                    <th>Straße</th>
                    <th>Hausnummer</th>
                    <th>Postleitzahl</th>
                    <th>Ort</th>
                </tr>
            </tfoot>
        </table><br><br>
        <h4>Anfragen:</h4>
        <table id=anfragen>
            <thead>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Beschreibung</th>
                    <th>Namen-Aufklärung</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Beschreibung</th>
                    <th>Namen-Aufklärung</th>
                </tr>
            </tfoot>
        </table>
    </main>";
//require_once("html_footer.php");
html_footer();
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("html_parts.php");
html_intern_pageHeader();

echo"
    <main>
    <button href='#' onclick=\"dialogOeffnen('auftragnehmer_form_dia')\">Mittler Anlegen</button>
        <h4>Mittler Datenbank:</h4><br>
        <table id=mittlerTabelle>
            <thead>
                <tr>
                    <th>Mittler-ID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Geschlecht</th>
                    <th>Geburtsdatum</th>
                    <th>Nationalität</th>
                    <th>Geburtsort</th>
                    <th>Beruf</th>
                    <th>adresse</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Mittler-ID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Geschlecht</th>
                    <th>Geburtsdatum</th>
                    <th>Nationalität</th>
                    <th>Geburtsort</th>
                    <th>Beruf</th>
                    <th>adresse</th>
                </tr>
            </tfoot>
        </table>
        </main>";

html_footer();
?>
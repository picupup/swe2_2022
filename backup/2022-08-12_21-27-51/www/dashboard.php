<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("html_intern_pageHeader.php");
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
                    <th>Adress-ID</th>
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
                    <th>Adress-ID</th>
                </tr>
            </tfoot>
        </table>
    </main>";
require_once("html_footer.php");
?>

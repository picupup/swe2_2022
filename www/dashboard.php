<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("html_parts.php");



//require_once("html_intern_pageHeader.php");
html_intern_pageHeader();
echo"<main>
        <h2 class='startHeading'>Willkommen, auf Ihrem Dashboard!</h2><br>
        <button href='#' onclick=\"dialogOeffnen('ue_anfrage_dia')\">Übersetzer-Anfrage Erstellen</button>
        <button href='#' onclick=\"dialogOeffnen('dol_anfrage_dia')\">Dolmetscher-Anfrage Erstellen</button>
        <button href='#' onclick=\"dialogOeffnen('auftragnehmer_form_dia')\">Dolmetscher-Übersetzer Anlegen</button>
        <h4>Anfragen für Übersetzungen:</h4>
        <table id=ue_anfragen>
            <thead>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Dokument-Titel</th>
                    <th>Namen-Aufklärung</th>
                    <th>von</th>
                    <th>nach</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Dokument-Titel</th>
                    <th>Namen-Aufklärung</th>
                    <th>von</th>
                    <th>nach</th>
                </tr>
            </tfoot>
        </table><br><br>
        <h4>Anfragen für Dolmetsching-Termine:</h4>
        <table id=do_anfragen>
            <thead>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Beschreibung</th>
                    <th>Ab</th>
                    <th>Bis</th>
                    <th>ort</th>
                    <th>von</th>
                    <th>nach</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Beschreibung</th>
                    <th>Ab</th>
                    <th>Bis</th>
                    <th>ort</th>
                    <th>von</th>
                    <th>nach</th>
                </tr>
            </tfoot>
        </table><br><br>
        <h4>Laufende Aufträge Übersetzungen:</h4>
        <table id=ue_auftraege>
            <thead>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Ab</th>
                    <th>Bis</th>
                    <th>von</th>
                    <th>nach</th>
                    <th>ort</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Ab</th>
                    <th>Bis</th>
                    <th>von</th>
                    <th>nach</th>
                    <th>ort</th>
                </tr>
            </tfoot>
        </table><br><br>
        <h4>Laufende Aufträge Dolmetsching:</h4>
        <table id=do_auftraege>
            <thead>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Ab</th>
                    <th>Bis</th>
                    <th>von</th>
                    <th>nach</th>
                    <th>ort</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Anfrage-ID</th>
                    <th>Kunden-ID</th>
                    <th>Ab</th>
                    <th>Bis</th>
                    <th>von</th>
                    <th>nach</th>
                    <th>ort</th>
                </tr>
            </tfoot>
        </table><br><br>
    </main>";

//require_once("html_footer.php");
html_footer();
?>

<?php


function html_pageHeader(){
    echo"<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>ITC INDEX</title>
        <link rel='stylesheet' type='text/css' href='./styles.css' />
        <script type='text/javascript' src='./getFormulars.js'></script>

    </head>
    <body>
    <header class='header'>
        <div class='header-brand-wrapper'>
            <a class='header-brand' href='index.php'> <img src='./images/logo.png' alt='logo'> </a>
        </div>
        <nav class='header-navbar'>
            <ul class='header-navbar-links'>
                <li><a href='index.php'>SARTSEITE</a></li>
                <li><a>ÜBER UNS</a></li>
                <li><a>LEISTUNGEN</a></li>
                <li><a>PREISE</a></li>
                <li><a>REFERENZEN</a></li>
                <li><a>IMPRESSUM</a></li>
                <li><a href='mitarbeiterLogin.php'>login</a></li>
            </ul>
        </nav>
</header>";
}
function html_intern_pageHeader(){
    echo"<!DOCTYPE html>
<html class='intern'>
    <head>
        <meta charset='utf-8'>
        <title>ITC INDEX</title>
        <link rel='stylesheet' type='text/css' href='./styles.css' />
        <!-- <link rel='stylesheet' type='text/css' href='//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' /> -->

        <link rel=\"stylesheet\" type=\"text/css\" href=\"DataTables/files/datatables.min.css\"/>
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.5.1.js'></script>
        <script type='text/javascript' src='//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
        <script type=\"text/javascript\" src=\"DataTables/files/datatables.min.js\"></script>
        
        
       
        <script type='text/javascript' src='./getKundeJson.js'></script>
        <!-- <script type='text/javascript' src='./dialoge.js'></script> -->
        
    
    </head>
    <body>
    <header class='header'>
        <div class='header-brand-wrapper'>
            <a class='header-brand' href='dashboard.php'> <img src='./images/logo.png' alt='logo'> </a>
        </div>
        <nav class='header-navbar'>
            <ul class='header-navbar-links'>
                <li><a href='dashboard.php'>DASHBOARD</a></li>
                <a href='kundenDatenbank.php'><li>KUNDEN</li></a>
                <a href='./testprototyp/osm.html'><li>KARTE</li></a>
                <a href='justLoggedOut.php'><li>logout</li></a>
            </ul>
        </nav>
</header>";
}

function html_footer(){
    echo"<footer class='footer'>
            <div class='container'>
                <p style='text-align:center;color:white;font-size:10px'>Made by: Team-Swifty</p>
            </div>
        </footer>
        <div id='body-overlay'></div>
        <div class='dialog' id='ue_anfrage_dia'>
            <a href='#' role='button' class='dialog-schliessen-button' onclick=\"dialogSchliessen('ue_anfrage_dia')\">
               X 
            </a>";
    anfrageformular_Ue();
    echo"
        </div>
        <div class='dialog' id='dol_anfrage_dia'>
            <a href='#' role='button' class='dialog-schliessen-button' onclick=\"dialogSchliessen('dol_anfrage_dia')\">
                X 
            </a>";
    anfrageformular_Dol();
    echo"
        </div>
        <script src='dialoge.js'></script>
    </body>
</html>";
}
function anfrageformular_Ue(){
    echo"
    <nav>
    <h3> Anfrage für die Übersetzung eines Dokuments stellen: </h3> <br>
    <form method='post' action='./ue_anfrageVerarbeiten.php'>

        <!--Stammdaten-->
        <p style='font-weight:bold'>Persönliche Angaben:</p>
        <label> Nachname </label>
        <input id='nn_id' type='text' name='name' placeholder='Nachname' value='' required> <br>
        <label> Vorname </label>
        <input id='vn_id' type='text' name='vorname' placeholder='Vorname' value='' required> <br>
        <label> Geburtsdatum </label>
        <input id='gb_id' type='date' name='geburtsdatum' placeholder='Geburtsdatum' value='' required> <br>
        
        <label for='ge_id'>Geschlecht</label>
        <select name='geschlecht' id='ge_id' defaultValue=''>
            <option value='m'>Mänlich</option>
            <option value='w'>Weiblich</option>
            <option value='d'>Divers</option>
        </select><br>

        <label>Person</label>
        <select name='privatGesch' id='person_art_id' defaultValue=''>
            <option value='privat'>Privat</option>
            <option value='geschäftlich'>Geschäftlich</option>
        </select><br>
        
        <label> Straße </label> 
        <input id='st_id' type='text' name='strasse' placeholder='Straße' value='' required>
        <label> Nr. </label> 
        <input id='hausnr_id' type='text' name='hausnummer' placeholder='Hausnr' value='' required> <br>
        <label> PLZ </label> 
        <input id='plz_id' type='text' name='postleitzahl' placeholder='PLZ' value='' required> <br>
        <label> Ort </label> 
        <input id='ort_id' type='text' name='ort' placeholder='Ort' value='' required> <br>
        <label> E-Mail </label>
        <input id='email_id' value=''  type='text' placeholder='E-Mail' name='email' required> <br>

         <!--Auftragsdaten exklusiv für Überstzung-->
        <p style='font-weight:bold'>Angaben zum Auftrag:</p>
        <label> Art des Dokuments </label>
        <input id='dock_art_id' value=''  type='text' placeholder='Titel Ihres Dokuments' name='docTyp'> <br>
        <label> Dokument </label>
        <input id='doku_id' type='file' placeholder='Dokument' value='' name='dokument' > <br>
        <label> von Sprache </label>
        <input id='von_sprache_id' type='text' placeholder='Sprache Ihres Dokuments'value='' name='vonSprache'  required > <br>
        <label> zu Sprache </label>
        <input id='zu_sprache_id' type='text' placeholder='Übersetzen in' value='' name='zuSprache' required> <br>
        
        <!--Kommentar-->
        <label>Notieren Sie bitte hier die für die gewählte Zielsprache korrekte Schreibweise<br> aller in Ihrem Dokument vorkommenden Namen:</label> <br>
        <textarea name='kommentar' rows='7'></textarea> <br>

        <input type='Checkbox' name='abholung'>
        <label>Ich möchte die die Übersetzung in Papierform in der Geschäftsstelle vorort abholen</labell><br>
        <input type='checkbox' name='agb' required>
        <label>Hiermit erkläre ich mich mit den Allgemeinen Geschäftsbedingungen der ITC-Bremerhaven einverstanden</label><br>
    
        
        <button type='submit' onclick='anfrage_antwort(this)'>Abschicken</button> 
    </form>
</nav>
    ";
}
function anfrageformular_Dol(){
    echo"
    <nav>
    <h3> Anfrage für einen Dolmetscher stellen: </h3> <br>
    <form method='post' action='./do_anfrageVerarbeiten.php'>

        <!--Stammdaten-->
        <p style='font-weight:bold'>Persönliche Angaben:</p>
        <label> Nachname </label>
        <input id='nn_id' type='text' name='name' placeholder='Nachname' value='' required> <br>
        <label> Vorname </label>
        <input id='vn_id' type='text' name='vorname' placeholder='Vorname' value='' required> <br>
        <label> Geburtsdatum </label>      
        <input id='gb_id' type='date' name='geburtsdatum' placeholder='Geburtsdatum' value='' required> <br>
        
        <label for='ge_id'>Geschlecht</label>
        <select name='geschlecht' id='ge_id' defaultValue=''>
            <option value='m'>Mänlich</option>
            <option value='w'>Weiblich</option>
            <option value='d'>Divers</option>
        </select><br>

        <label for='person_art_id'>Person</label>
        <select name='privatGesch' id='person_art_id' defaultValue=''>
            <option value='1'>Privat</option>
            <option value='2'>Geschäftlich</option>
        </select><br>
        
        <label> Straße </label> 
        <input id='st_id' type='text' name='strasse' placeholder='Straße' value='' required>
        <label> Nr. </label> 
        <input id='hausnr_id' type='text' name='hausnummer' placeholder='Hausnr' value='' required> <br>
        <label> PLZ </label> 
        <input id='plz_id' type='text' name='postleitzahl' placeholder='PLZ' value='' required> <br>
        <label> Ort </label> 
        <input id='ort_id' type='text' name='ort' placeholder='Ort' value='' required> <br>
        <label> E-Mail </label>
        <input id='email_id' value=''  type='text' placeholder='E-Mail' name='email' required> <br>

        <p style='font-weight:bold'>Angaben zum Auftrag:</p>
        <label> von Sprache </label>
        <input name='vonSprache' id='von_sprache_id' type='text' placeholder='Sprache Ihres Dokuments'value=''  required > <br>
        <label> zu Sprache </label>
        <input name='zuSprache' id='zu_sprache_id' type='text' placeholder='zu Sprache' value=''  required> <br>
        
        <!--Auftragsdaten exklusiv für Dolmetscher-->
        <label> Treffpunkt </label>
        <input name='treffpunkt' type='text' placeholder='Treffpunkt' value=''  required> <br>
        <label> Zeitpunkt </label>
        <input name='treff_datum_start' type='date' placeholder='Datum' value=''  required>
        <input name='treff_zeit_start' type='time' placeholder='Uhrzeit' value=''  required> Uhr <br>
        <label> Termin-Ende </label>
        <input name='treff_datum_ende' type='date' placeholder='Datum' value=''  required>
        <input name='treff_zeit_ende' type='time' placeholder='Uhrzeit' value=''  required> Uhr <br>

        <!--Kommentar-->
        <label> Zusätzliche Informationen für Ihren Dolmetscher:  </label><br>
        <textarea name='kommentar' rows='7'></textarea><br>

        <!--AGB-Bestätigung-->
        <input type='checkbox' name='agb' required>
        <label>Hiermit erkläre ich mich mit den Allgemeinen Geschäftsbedingungen der ITC-Bremerhaven einverstanden</label><br>
    

        <button type='submit' onclick='anfrage_antwort(this)'>Abschicken</button> 
    </form>
</nav>
    ";
}
?>
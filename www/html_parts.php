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
        
        
        <!-- <script type='text/javascript' src='./getKunde.js'></script> -->
        <script type='text/javascript' src='./getKundeJson.js'></script>
        
    
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
    </body>
</html>";
}

?>
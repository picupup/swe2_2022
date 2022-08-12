<?php
echo"<!DOCTYPE html>
<html class='intern'>
    <head>
        <meta charset='utf-8'>
        <title>ITC INDEX</title>
        <link rel='stylesheet' type='text/css' href='./styles.css' />
        <link rel='stylesheet' type='text/css' href='//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' />
        
        <script type='text/javascript' src='https://code.jquery.com/jquery-3.5.1.js'></script>
        <script type='text/javascript' src='//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
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
                <a href='./testprototyp/osm.html'><li>KARTE</li></a>
                <a href='justLoggedOut.php'><li>logout</li></a>
            </ul>
        </nav>
</header>";
?>

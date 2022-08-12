<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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
?>
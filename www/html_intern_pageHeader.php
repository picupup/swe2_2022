<?php
echo"<!DOCTYPE html>
<html class='intern'>
    <head>
        <meta charset='utf-8'>
        <title>ITC INDEX</title>
        <link rel='stylesheet' type='text/css' href='./styles.css' />
        <script type='text/javascript' src='./getKunde.js'></script>
    </head>
    <body>
    <header class='header'>
        <div class='header-brand-wrapper'>
            <a class='header-brand' href='dashboard.php'> <img src='./images/logo.png' alt='logo'> </a>
        </div>
        <nav class='header-navbar'>
            <ul class='header-navbar-links'>
                <li><a href='dashboard.php'>DASHBOARD</a></li>
                <li><a>ÜBER UNS</a></li>
                <li><a>LEISTUNGEN</a></li>
                <li><a>PREISE</a></li>
                <li><a>REFERENZEN</a></li>
                <li><a>IMPRESSUM</a></li>
                <a href='justLoggedOut.php'><li>logout</li><a>
            </ul>
        </nav>
</header>";
?>
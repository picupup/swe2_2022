<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("html_intern_pageHeader.php");
echo"<main>
        <h2 class='startHeading'>Willkommen, auf Ihrem Dashboard!</h2><br>
        <h4>Kunden-Datenbank:</h4><br>
        <div id=kundenTabelle></div>
    </main>";
require_once("html_footer.php");
?>g
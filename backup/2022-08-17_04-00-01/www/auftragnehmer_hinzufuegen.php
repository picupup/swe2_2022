
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("html_parts.php");
html_pageHeader();
require_once("/var/www/html/swe2_2022team17/private/dbconnection.inc.php");
$conn = new mysqli($host, $user, $password, $database);

echo formUbersetzerDolmetscherAnlegen($conn);

html_footer();

    
?>


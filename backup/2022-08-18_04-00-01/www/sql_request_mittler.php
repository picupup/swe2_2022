<?php
include("./scripts/get_sql_result.php");
$sql = "SELECT * from itc_translator";
print_sqlResult_ToJson($sql);
?>

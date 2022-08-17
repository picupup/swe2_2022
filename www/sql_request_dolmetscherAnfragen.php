<?php
include("./scripts/get_sql_result.php");
$sql = "SELECT * from itc_dolmetscher_anf";
print_sqlResult_ToJson($sql);
?>
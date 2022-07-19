<?php



if ( ! isset( $_GET["nn_id"] ) ){
  echo "Ich will deinen Namen!\n";
  exit;
}
$nn_id=$_GET["nn_id"];
$doku_id=$_GET["doku_id"];
$email_id=$_GET["email_id"];
$art_id=$_GET["art_id"];
$von_sprache_id=$_GET["von_sprache_id"];
$zu_sprache_id=$_GET["zu_sprache_id"];


file_put_contents("anfrage.log", "Script war hier", FILE_APPEND);

//_GET kann auch durch _POST ersetzt werden.

//$name=$_GET["name"];
echo "Du bist also da ".$nn_id." nach";

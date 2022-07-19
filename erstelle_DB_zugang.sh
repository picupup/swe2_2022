#!/bin/bash
#2022.07.13

con=/var/www/html/$USER/private/dbconnection.inc.php
dir=/var/www/html/$USER/private/

#wenn die Passwört verzeichnes nicht existiert solte erstellt werden.
if test ! -e $con;then
  echo "Im in the if statment";
  (umask 007; mkdir -p $dir ; echo "created => private");
  touch $con;
  cat ~/.my.cnf | grep = | sed -E -e 's/^/$/g' -e 's/=/="/g' -e 's/$/";/g'  | (echo "<?php" ; cat) > $con;
fi

#!/bin/bash


#set -xv

max=4;
#declare -i index=1


#for i in $(eval echo "{0..$max}");do

 # wert=${index:? "Argument $index fehlt."}
  #index=$((index + 1))
#done

export IFS=","  #internal field separators
if test "$#" = "4";then 

#TODO alle kommas durch einen single quote mit komme durch sed ersetzen.

seder=$(echo "$*" | sed -E -e 's/^/"/g' -e 's/,/", "/g' -e 's/$/"/g' )
echo "insert into itc_adresse (strasse, hausnr, plz, ort) values ( $seder );" | mysql

echo "select * from itc_adresse;" | mysql

else
  echo "Anzahl Argumente $# stimmt nicht."
fi


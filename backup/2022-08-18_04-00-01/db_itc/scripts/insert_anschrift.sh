#<<insert_anschrift.sh>>
#erfankarimi
#2022-06-22_12:48:30
#Thema:Adress Eingabe in mysql
#

export IFS=","
for i in $@ ;do echo 
	wert=${i};
	#echo $wert;

	case $i in
		1)
			adresse=$wert
			;;
		2)
			
		#wab laba dab dab
			hausnr=$wert
			;;
		3)
			
			plz=$wert
			;;
		4)
			
			ort=$wert
			;;
		4)
			
			tr_id=$wert
			;;
		5)
			
			kunden_id=$wert
			;;
		6)
			
			dummy=$wert
		esac
done
  

echo $*

if test $# = 5;then 

    #echo "insert into itc_adresse (strasse , hausnr, plz, ort, tr_id, kunden_id) values $all" | mysql
  else
    #echo "Anzahl stimmt nicht. muss 5 sein"
fi

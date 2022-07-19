#!/bin/bash
#team17-erfkarimi
#2022-05-18_16:11:01
#Thema: 

#mkdir -p www
#chmod -R o-rwx www

sudo -i -u swe2_2022team17 rm -rf /var/www/html/swe2_2022team17/ITC_Index/
sudo -i -u swe2_2022team17 ./erstelle_DB_zugang.sh
sudo -i -u swe2_2022team17 mkdir -p /var/www/html/swe2_2022team17/ITC_Index/scripts

tar -C www/ -cf- . | (sudo -i -u swe2_2022team17 tar -C /var/www/html/swe2_2022team17/ITC_Index/ -xvf-)

tar -C scripts/ -cf- . | (sudo -i -u swe2_2022team17 tar -C /var/www/html/swe2_2022team17/ITC_Index/scripts/ -xvf-)

#curl https://informatik.hs-bremerhaven.de/swe2_2022team17/prototypSWE2

#!/bin/bash
#team17-erfkarimi
#2022-05-18_16:11:01
#Thema: 

mkdir -p www
chmod -R o-rwx www

#sudo -i -u swe2_2022team17 rm -r /var/www/html/swe2_2022team17/swe2_2022team17/*


tar -C www -cf- . | (sudo -i -u swe2_2022team17 tar -C /var/www/html/swe2_2022team17 -xvf-)


#curl https://informatik.hs-bremerhaven.de/swe2_2022team17/prototypSWE2

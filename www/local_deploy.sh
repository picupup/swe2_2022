#!/bin/bash
#team17_erfkarimi
#2022-05-18_16:29:55
#Thema: 


mkdir -p /var/www/html/$USER/ITC_Index/
rm -rf /var/www/html/$USER/ITC_Index/*
./erstelle_DB_zugang.sh

cp -r www/* /var/www/html/$USER/ITC_Index/
cp -r scripts/ /var/www/html/$USER/ITC_Index/

echo "Link: https://informatik.hs-bremerhaven.de/$USER/swe2_2022team17/ITC_Index"

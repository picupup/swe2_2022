#!/bin/bash
#<<id_test.sh>>
#erfkarimi
#2022-06-14_20:16:04
#Thema: 



touch test.pdf
exiftool -DocumentID="uuid:2222222222222" test.pdf
exiftool test.pdf | grep 'Document ID' | cut -d ":" -f3

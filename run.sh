#!/bin/sh

URL=http://www.cie.men.gov.pl/index.php/sio/wykaz-szkol-i-placowek/26-wykaz-wg-wojewodztw.html
INPUT_HTML_FILE_PATH=./data/input/input-data-list.html

curl $URL > $INPUT_HTML_FILE_PATH
php src/get--all-excel-files.php "http://www.cie.men.gov.pl/"
sh convert-all-xls2csv.sh
sh prepare-all-csv.sh

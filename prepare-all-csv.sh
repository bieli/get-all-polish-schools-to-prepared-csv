#!/bin/sh

FILES=./data/csv/*.csv
for f in $FILES
do
  echo "Processing '$f' file..."
  echo "Preparing CSV file ..."
  php src/prepare-csv.php ./data/csv/`basename $f`
done

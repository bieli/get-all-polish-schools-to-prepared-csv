#!/bin/sh

TYPE=$1

FILES=./data/prepared/*.csv
for f in $FILES
do
  #echo "Processing '$f' file..."
  #echo "Preparing CSV file ..."
  php src/get-school-by-type.php ./data/prepared/`basename $f` $TYPE
done

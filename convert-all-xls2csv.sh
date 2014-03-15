#!/bin/sh

FILES=./data/xls/*.xls
for f in $FILES
do
  echo "Processing '$f' file..."
  # take action on each file. $f store current file name
  echo "Saving CSV file ..."
  xls2csv $f > ./data/csv/`basename $f`.csv
done

echo "Removing dictionaries from CSV ..."
rm ./data/csv/podzial_terytorialny.xls.csv
rm ./data/csv/slowniki.xls.csv


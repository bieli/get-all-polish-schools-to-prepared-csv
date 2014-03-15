<?php

$url = $_SERVER['argv'][1];
$inp = file_get_contents('./data/input/input-data-list.html');

$d = array();
$data = preg_match_all('~href="(.[^"]+.xls)"~i', $inp, $d);

foreach ($d[1] as $l) {
  echo "Get XLS file from: '" . $url . $l . "'\n";
  $xls = (string) file_get_contents($url . $l);

  file_put_contents('./data/xls/' . basename($l), $xls);
}

<?php

$file = $_SERVER['argv'][1];

$ff = file_get_contents($file);

$csvP = explode('"33","34","35","36","37","38","39"', $ff);

file_put_contents('./data/prepared/' . basename($file) . '.csv', trim((string)$csvP[1]));

<?php

$file = $_SERVER['argv'][1];
$type = $_SERVER['argv'][2];

$row = 1;
if (($handle = fopen($file, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",", '"')) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        /*
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        } */
            if (
        isset($data[6]) &&
        strlen(trim($data[6])) > 0 &&
             $data[6] == $type) {
               echo '"' . $data[4] . '","' . $data[8] . '",'
               //. '","' . $data[9] 
               . '"' . $data[10]
               . '","' . $data[11] 
               . '","' . $data[12] 
               . '","' . $data[13] 
               //. '","' . $data[14] 
               //. '","' . $data[15] 
               . '","' . $data[16] 
               . '"' . "\n";
            }
            //var_dump($data);die();
    }
    fclose($handle);
}


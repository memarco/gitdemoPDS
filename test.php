<?php $file="Rates.csv";
$csv= file_get_contents($file);
$array = array_map("str_getcsv", explode("\n", $csv));//blablacar
$json = json_encode($array);
print_r($json); ?>
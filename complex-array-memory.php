<?php
ini_set('memory_limit', '-1');

const TEST_SIZE = 1000000;

$array = [];

$start = microtime(true);
for ($i = 0; $i < TEST_SIZE; ++$i) {

    $array[$i] = [
        'variable1' => '',
        'variable2' => '',
        'variable3' => '',
        'variable4' => '',
        'variable5' => '',
        'variable6' => '',
        'variable7' => '',
        'variable8' => '',
        'variable9' => '',
        'variable10' => '',
        'variable11' => '',
        'variable12' => '',
        'variable13' => '',
        'variable14' => '',
        'variable15' => '',
        'variable16' => '',
    ];
}
$stop = microtime(true);
$memory = memory_get_peak_usage()/1024/1024;
printf("Runtime: %s\nMemory: %s\n", $stop - $start, $memory);

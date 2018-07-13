<?php
ini_set('memory_limit', '-1');

const TEST_SIZE = 1000000;

$array = [];

$start = microtime(true);
for ($i = 0; $i < TEST_SIZE; ++$i) {
    $array[$i] = [
        'a' => '',
        'b' => '',
    ];
}
$stop = microtime(true);
$memory = memory_get_peak_usage(true)/1024/1024;
printf("Runtime: %s\nMemory: %s\n", $stop - $start, $memory);

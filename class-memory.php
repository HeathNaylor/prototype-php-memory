<?php
ini_set('memory_limit', '-1');

class Object{
    private $a;
    private $b;
    private $c = [];

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}

const TEST_SIZE = 1000000;

$array = [];

$start = microtime(true);
for ($i = 0; $i < TEST_SIZE; ++$i) {

    $array[$i] = new Object('', '');
}
$stop = microtime(true);
$memory = memory_get_peak_usage()/1024/1024;
printf("Runtime: %s\nMemory: %s\n", $stop - $start, $memory);

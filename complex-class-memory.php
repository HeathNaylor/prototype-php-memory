<?php
ini_set('memory_limit', '-1');

class Activity
{

    protected $id;

    protected $variable1;

    protected $variable2;

    protected $variable3;

    protected $variable4;

    protected $variable5;

    protected $variable6;

    protected $variable7;

    protected $variable8;

    protected $variable9;

    protected $variable10;

    protected $variable11;

    protected $variable12;

    protected $variable13;

    protected $variable14;

    protected $variable15;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function setVariable1($variable1 )
    {
        $this->variable1 = $variable1;
    }

    public function setVariable2($variable2 )
    {
        $this->variable2 = $variable2;
    }

    public function setVariable3($variable3 )
    {
        $this->variable3 = $variable3;
    }

    public function setVariable4($variable4 )
    {
        $this->variable4 = $variable4;
    }

    public function setVariable5($variable5 )
    {
        $this->variable5 = $variable5;
    }

    public function setVariable6($variable6 )
    {
        $this->variable6 = $variable6;
    }

    public function setVariable7($variable7 )
    {
        $this->variable7 = $variable7;
    }

    public function getVariable7()
    {
        return $this->variable7;
    }

    public function setVariable8($variable8 )
    {
        $this->variable8 = $variable8;
    }

    public function getVariable8()
    {
        return $this->variable8;
    }

    public function setVariable9($variable9 )
    {
        $this->variable9 = $variable9;
    }

    public function setVariable10($variable10 )
    {
        $this->variable10 = $variable10;
    }

    public function setVariable11($variable11 )
    {
        $this->variable11 = $variable11;
    }
    
    public function setVariable12($variable12 )
    {
        $this->variable12 = $variable12;
    }

    public function setVariable13($variable13 )
    {
        $this->variable13 = $variable13;
    }

    public function setVariable14($variable14 )
    {
        $this->variable14 = $variable14;
    }

    public function setVariable15($variable15 )
    {
        $this->variable15 = $variable15;
    }

}

const TEST_SIZE = 500000;

$array = [];

$start = microtime(true);
for ($i = 0; $i < TEST_SIZE; ++$i) {

    $array[$i] = new Activity();
}
$stop = microtime(true);
$memory = memory_get_peak_usage()/1024/1024;
printf("Runtime: %s\nMemory: %s\n", $stop - $start, $memory);

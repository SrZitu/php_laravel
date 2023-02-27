<?php

class DistrictCollections implements IteratorAggregate, Countable
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }
    function addDistricts($district)
    {
        array_push($this->districts, $district);
    }
    function getDistrict()
    {
        return $this->districts;
    }
    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
    function count(): int
    {
        return count($this->districts);
    }
}


$distrcts = new DistrictCollections;
$distrcts->addDistricts("Rajshahi");
$distrcts->addDistricts("Rangpur");
$distrcts->addDistricts("khulna");
$distrcts->addDistricts("Rangamati");

echo count($distrcts);
echo PHP_EOL;
foreach ($distrcts as $distrct) {
    echo $distrct . "\n";
}

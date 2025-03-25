<?php
namespace App;

class Arale {
    private $name;
    private $energy;

    public function __construct($name,$energy ) {
        $this->name = $name;
        $this->energy = $energy;
    }

    public function eatNcha() {
        $this->energy += 10;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function getName() {
        return $this->name;
    }
}

<?php
namespace App;

class Senbei {
    private $name;
    private $intelligence;

    public function __construct($name,$intelligence ) {
        $this->name = $name;
        $this->intelligence = $intelligence;
    }

    public function invent() {
        $this->intelligence += 15;
    }

    public function getIntelligence() {
        return $this->intelligence;
    }

    public function getName() {
        return $this->name;
    }
}

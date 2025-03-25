<?php
use PHPUnit\Framework\TestCase;
use App\Arale;

class AraleTest extends TestCase {
    public function testEatNcha() {
        $a = new Arale('Arale Norimaki', 50);
        $a->eatNcha();
        $this->assertEquals(60, $a->getEnergy());
    }
}

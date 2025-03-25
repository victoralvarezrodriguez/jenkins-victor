<?php
use PHPUnit\Framework\TestCase;
use App\Senbei;

class SenbeiTest extends TestCase {
    public function testInvent() {
        $b = new Senbei('Senbei Norimaki', 70);
        $b->invent();
        $this->assertEquals(85, $b->getIntelligence());
    }
}

<?php
use PHPUnit\Framework\TestCase;
require 'GumballMachine.php';

class GumballMachineTest extends TestCase {

    public $gumballMachineInstance;
    
    public function setup():void {
        
        $this->gumballMachineInstance = new GumballMachine();
    }
    
    public function testIfWheelWorks() {
        
        $this->gumballMachineInstance->setGumballs(100);
        
        $this->gumballMachineInstance->turnWheel();
        
        // Change the expected value to make the assert fail
        $this->assertEquals(100, $this->gumballMachineInstance->getGumballs());
    }
}

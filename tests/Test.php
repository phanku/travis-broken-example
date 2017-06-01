<?php

class Test extends PHPUnit_Framework_TestCase
{
		
	protected $stuff; 

	public function setUp() {
		require_once('stuff.php');
		$this->stuff = new stuff();
	}

	public function testStuff() {

		$this->assertEquals($this->stuff->add(1,1), 2);
		
	}

	public function testStuff2() {
		$this->assertEquals($this->stuff->add(1,2), 2);
	}

  	public function testTwoPlusTwo() { 
  		$this->assertEquals(2+2, 4);
  	}
}

?>

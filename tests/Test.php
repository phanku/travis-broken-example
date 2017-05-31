<?php

class Test extends PHPUnit_Framework_TestCase
{
		
	protected $stuff; 

	public function setUp() {
		require_once('../stuff.php');
		$this->stuff = new stuff();
	}

  	public function testTwoPlusTwo() { 
  		$this->assertEquals(2+2, 4);
  	}
}

?>

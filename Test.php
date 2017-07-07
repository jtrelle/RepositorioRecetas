<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	
	public function testFailingInclude()
	{
		include 'not_existing_file.php';
	}
	
	public function testTile()
	{
		$this->open("index.html");
		$this->getTitle();
		$this->assertEquals('Home', $title);
	}
}
?>

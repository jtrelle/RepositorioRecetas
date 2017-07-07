<?php
use Tests\TestCase;
class Test extends PHPUnit_Framework_Test
{
	private $cal;
	protected function SetUp()
	{
		$cal -> cal = new Cal();
	}
	public function testOnePlusOne() {
		$this->assertEquals(1,2);
  	}
	
}
?>

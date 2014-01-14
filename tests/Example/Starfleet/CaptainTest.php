<?php

use Example\Starfleet\Captain;
use Example\Log\ILog;
class CaptainTest extends PHPUnit_Framework_TestCase {
	
	public function test_issueCommand_returns_string(){	
		$mockLog = $this->getMockBuilder('Example\Log\ILog')
			->setMethods(array('println'))
			->getMock();
		$mockLog->expects($this->at(0))
			->method('println')
			->with($this->matchesRegularExpression('/Captain\'s Log, Stardate [\d\.]+/'), $this->equalTo(true));
		$mockLog->expects($this->at(1))
			->method('println')
			->with($this->isType('string'));
		
		$cap = new Captain($mockLog);
		$command = $cap->issueCommand();
		
		$this->assertInternalType('string', $command);
	}
	

	
}
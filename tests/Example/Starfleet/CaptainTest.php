<?php

use Example\Starfleet\Captain;
use Example\Log\Console;
class CaptainTest extends PHPUnit_Framework_TestCase {
	
	public function test_issueCommand_returns_string(){		
		$cap = new Captain(new Console());
		$command = $cap->issueCommand();
		
		$this->assertInternalType('string', $command);
	}
	

	
}
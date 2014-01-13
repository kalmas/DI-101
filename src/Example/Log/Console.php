<?php

namespace Example\Log;
use Example\Log\ILog;

class Console implements ILog {

	public function println($line, $emphasis=false) {
		$this->checkPriv();
		
		if($emphasis){
			$line = "\e[0;35m{$line}\e[0m";
		}

		echo  "{$line}\n";
	}
	
	private function checkPriv() {
		$user = get_current_user();
		if($user != 'privledged_user_who_you_are_not') {
			throw new \Exception("I'm sorry, {$user}. I'm afraid I can't do that");
		}
	}

}
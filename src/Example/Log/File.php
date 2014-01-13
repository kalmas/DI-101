<?php

namespace Example\Log;

class File implements ILog {

	public function println($line, $emphasis=false) {
		$this->checkPriv();
			
		if($emphasis){
			$line = "--- {$line} ---";
		}
		
		file_put_contents('captains.log', "{$line}\n", FILE_APPEND);
	}
	
	private function checkPriv() {
		$user = get_current_user();
		if($user != 'privledged_user_who_you_are_not') {
			throw new \Exception("I'm sorry, {$user}. I'm afraid I can't do that");
		}
	}

}
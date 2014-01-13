<?php

namespace Example\Log;

class File implements ILog {

	public function println($line, $emphasis=false) {
		if($emphasis){
			$line = "--- {$line} ---";
		}
		
		file_put_contents('captains.log', "{$line}\n", FILE_APPEND);
	}

}
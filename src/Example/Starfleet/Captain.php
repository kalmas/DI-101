<?php

namespace Example\Starfleet;

class Captain {

	public function issueCommand() {
		
		// Log stardate
		// Log entry

		return $this->getCommand();
	}

	private function getCommand() {
		$commands = ['Make it so!'
				, 'Second star to the right...and straight on \'til morning.'
				, 'Assimilate this!'
			];
		$randomCommand = array_rand($commands);

		return $commands[$randomCommand];
	}

	private function getEntry() {
		$entries = ['Make it so!'
				, 'Second star to the right...and straight on \'til morning.'
				, 'Assimilate this!'
			];
		$randomEntry = array_rand($entries);

		return $entries[$randomEntry];
	}

	private function getStardate() {
		return unixtojd();
	}

}

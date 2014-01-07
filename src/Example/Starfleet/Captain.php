<?php

namespace Example\Starfleet;

class Captain {

	private $captainsLog;

	public function __construct($log){
		$this->captainsLog = $log;
	}

	public function issueCommand() {
		
		$this->captainsLog->println("Captain's Log, {$this->getStardate()}", true);
		$this->captainsLog->println($this->getEntry());

		return $this->getCommand();
	}

	private function getCommand() {
		$commands = ['Make it so!'
				, 'Second star to the right...and straight on \'til morning.'
				, 'Assimilate this!'
				, 'KHAAAN!!!'
				, 'Sulu, you have the con.'
				, 'Take the bridge, Number One.'
				, 'Warp speed!'

			];
		$randomCommand = array_rand($commands);

		return $commands[$randomCommand];
	}

	private function getEntry() {
		$entries = ['The Enterprise remains in standard orbit while we investigate the tragedy which has struck the away team. Lieutenant Marla Aster, ship\'s archaeologist, has been killed on what should have been a routine mission. Whatever the explanation, it will not bring back a valued and trusted officer.'
				, 'We\'re orbiting Barzan II, which is entertaining bid for control of what appears to be a stable wormhole which could provide a permanent shortcut to the distant Gamma Quadrant.'
				, 'We have entered a spectacular binary star system in the Kavis Alpha sector on a most critical mission of astrophysical research.'
				, 'After completing a delivery of dicosilium to the Tanuga IV research station, our away team is receiving an update from Doctor Nel Apgar on his efforts to create Krieger waves, a potentially valuable new power source.'
			];
		$randomEntry = array_rand($entries);

		return $entries[$randomEntry];
	}

	private function getStardate() {
		return 'stardate ' . unixtojd() . trim(round((date('H') * 3600 + date('i') * 60 + date('s'))/86400, 1), '0');
	}

}

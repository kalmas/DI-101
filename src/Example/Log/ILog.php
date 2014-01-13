<?php

namespace Example\Log;

interface ILog {
	/**
	 * Prints line to log. Add emphasis if $emphasis == true
	 * @param $line string
	 * @param $emphasis boolean
	 * @return void
	 */
	public function println($line, $emphasis);
}

